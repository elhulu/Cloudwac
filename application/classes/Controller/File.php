<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller_Template {

    public function action_index()
    {
        $this->template->title .= 'Mes fichiers';
        $this->template->content = View::factory('files/perso')
            ->bind('files', $files)
            ->bind('folders', $folders)
            ->bind('user', $user)
            ->bind('id_folder_display', $id_folder_display)
            ->bind('foldername', $foldername)
            ->bind('used_space', $used_space)
            ->bind('used_space_percent', $used_space_percent);

        $user = Auth::instance()->get_user();

        $used_space = $user->usedspace;

        $used_space_percent = round($used_space * 100 / $user->maxspace);

        $used_space = round((INT) $used_space / 1048576 , 2);

        $actparam = $this->request->param('id');

        if( $actparam )
        {
            $id_folder_display = $actparam;
        }
        else
        {
            $id_folder_display = NULL;
        }


        $folders = ORM::factory('folder')->where('id_user', '=', $user->id)->find_all();
        $files = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();


        $current_folder = ORM::factory('folder', $id_folder_display);
        $foldername = $current_folder->name;

    }



    public function action_upload()
    {


        $this->template->title .= 'Upload';
        $this->template->content = View::factory('files/upload')
                            ->bind('$error_message', $error_message)
                            ->bind('folders', $folders)
                            ->bind('inside', $inside);

        $actparam = $this->request->param('id');


        if( $actparam )
        {
            $inside = $actparam;
        }
        else
        {
            $inside = NULL;
        }


        $error_message = NULL;
        $filename = NULL;

        $user = Auth::instance()->get_user();
        $folders = ORM::factory('folder')->where('id_user', '=', $user->id)->find_all();
        $post = Validation::factory( $_POST );
        $file = Validation::factory( $_FILES );

        $file->rule( 'file', 'Upload::valid' );
        $file->rule( 'file', 'Upload::not_empty' );
        $file->rule( 'file', 'Upload::size', array( ':value', '30M') );


        if ($this->request->method() == Request::POST )
        {

            if( $post->check() && $file->check() )
            {


                if (isset($_FILES['file']) && $file->check())
                {

                    $user = Auth::instance()->get_user();
                    $user->username;

                    $fileiniName = $_FILES['file']['name'];
                    $fileType = $_FILES['file']['type'];
                    $fileSize = $_FILES['file']['size'];


                    $filename = $this->_save_file($_FILES['file']);


                    $filename = basename($filename);

                    if ( ! $filename)
                    {
                        $error_message = 'Un problème est survenu lors de l\'ajout de votre fichier.';
                    }
                    else
                    {
                        // Create an instance of a model
                        $DBfile = ORM::factory('file');

                        // Do an INSERT query
                        $DBfile->name = $fileiniName;
                        $DBfile->path = $filename;
                        $DBfile->size = $fileSize;
                        $DBfile->type = $fileType;
                        $DBfile->id_user = $user->id;
                        $DBfile->id_folder = $inside;
                        //Verif dossier parent
                        if($post['parentfolder'] != 'none' )
                        {
                            $DBfile->id_folder = $post['parentfolder'];
                        }


                        $DBfile->save();

                        $actualspace = $user->usedspace;
                        $user->usedspace = $actualspace + $fileSize;
                        $user->save();

                        $this->redirect('file');
                    }

                }


            }
            else
            {
                $error_message = "Aucun fichier / fichier trop volumineu";
            }




        }



        $this->template->content->uploaded_file = $filename;
        $this->template->content->error_message = $error_message;
    }





    protected function _save_file($file)
    {
        if (
            ! Upload::valid($file) OR
            ! Upload::not_empty($file))
        {
            return FALSE;
        }

        $user = Auth::instance()->get_user();

        $directory = DOCROOT.'cwFiles/'.$user->id.'/';

        $file  = Upload::save($file, NULL, $directory);





        if ($file)
        {

            return $file;

        }

        return FALSE;
    }









    public function action_addfolder()
    {
        $this->template->title .= 'Ajouter un fichier';
        $this->template->content = View::factory('files/addfolder')
                            ->bind('folders', $folders)
                            ->bind('inside', $inside);

        $user = Auth::instance()->get_user();
        $folders = ORM::factory('folder')->where('id_user', '=', $user->id)->find_all();

        $actparam = $this->request->param('id');

        if( $actparam )
        {
            $inside = $actparam;
        }
        else
        {
            $inside = NULL;
        }


        if (HTTP_Request::POST == $this->request->method())
        {
            try {


                $post = $this->request->post();
                $user = Auth::instance()->get_user();





                // Create an instance of a model
                $DBfolder = ORM::factory('folder');

                // Do an INSERT query
                $DBfolder->name = $post['name'];
                $DBfolder->id_user = $user->id;
                $DBfolder->id_parent = $inside;

                //Verif dossier parent
                if($post['parentfolder'] != 'none' )
                {
                    $DBfolder->id_parent = $post['parentfolder'];
                }


                $DBfolder->save();

                $this->redirect('file/index/'.$inside);

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }



    }





    public function action_player()
    {

        $this->template->title .= 'Player audio';
        $this->template->content = View::factory('files/audio-player')
                             ->bind('user', $user)
                             ->bind('file', $file);

        $id_file = $this->request->param('id');
        $user = Auth::instance()->get_user();


        $file = ORM::factory('file', $id_file);





    }




    public function action_rename()
    {

        $this->template->title .= 'Renommer un fichier';
        $this->template->content = View::factory('files/rename')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('file', $file);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);

        if (HTTP_Request::POST == $this->request->method())
        {
            try {


                $post = $this->request->post();


                if($file->loaded())
                {
                    $file->set('name', $post['newname'])->update();
                    $this->redirect('file/index');
                }

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }

    }






    public function action_move()
    {

        $this->template->title .= 'Deplacer un fichier';
        $this->template->content = View::factory('files/move')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('file', $file)
            ->bind('folders', $folders);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);
        $folders = ORM::factory('folder')->where('id_user', '=', $user->id)->find_all();
        $post = $this->request->post();

        if (HTTP_Request::POST == $this->request->method())
        {
            try {


                if($file->loaded())
                {
                    $file->set('id_folder', $post['foldername'])->update();
                    $this->redirect('file/index');
                }

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }

    }






    public function action_del()
    {

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);


            try {

                if($file->loaded())
                {
                    unlink(LOCALROOT.$user->id."\\".$file->path);
                    $filesize = $file->size;
                    $file->delete();

                    $actualspace = $user->usedspace;
                    $user->usedspace = $actualspace - $filesize;
                    $user->save();

                    $this->redirect('file/index');
                }



            } catch (ORM_Validation_Exception $e) {


                $message = 'There were errors, please see form below.';


                $errors = $e->errors('models');
            }
        }



    public function action_download()
    {


        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);


        if($user)
        {
            $shared = ORM::factory('Share')->where('id_receiver', '=', $user->id)->find_all();

            $valid = FALSE;
            foreach($shared as $share)
            {
                if($share->id_file == $id_file)
                {
                    $valid = TRUE;
                }

           }



            if($file->id_user == $user->id || $valid)
            {


                $full_path = DOCROOT."cwFiles\\".$file->id_user."\\".$file->path; // chemin système (local) vers le fichier
                $file_name = basename($full_path);


                ini_set('zlib.output_compression', 0);
                $date = gmdate(DATE_RFC1123);

                header('Pragma: public');
                header('Cache-Control: must-revalidate, pre-check=0, post-check=0, max-age=0');

                header('Content-Tranfer-Encoding: none');
                header('Content-Length: '.filesize($full_path));
                header('Content-MD5: '.base64_encode(md5_file($full_path)));
                header('Content-Type: application/octetstream; name="'.$file_name.'"');
                header('Content-Disposition: attachment; filename="'.$file_name.'"');

                header('Date: '.$date);
                header('Expires: '.gmdate(DATE_RFC1123, time()+1));
                header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($full_path)));

                readfile($full_path);
                exit; // nécessaire pour être certain de ne pas envoyer de fichier corrompu


            }
            else
            {

                $this->template->title .= 'Partage';
                $this->template->content = View::factory('files/signtodown')
                    ->bind('errors', $errors)
                    ->bind('message', $message);


                    $message = 'Vous n\'etes pas authorisé a acceder a ce fichier';



            }


        }
        else
        {
            $this->template->title .= 'Partage';
            $this->template->content = View::factory('files/signtodown')
                ->bind('errors', $errors)
                ->bind('message', $message);

            $message = 'Vous devez être connecté pour telecharger ce fichier.';
        }


    }



    public function action_share()
    {

        $this->template->title .= 'Partager';
        $this->template->content = View::factory('files/share')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('file', $file)
            ->bind('stoken', $stoken);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);
        $post = $this->request->post();



        if (HTTP_Request::POST == $this->request->method())
        {

            try {



                $data_receiver = ORM::factory('User')->where('username', 'LIKE', $post['receiver'])->find_all();

                if($data_receiver)
                {
                    $mail_receiver = NULL;

                    if( !empty($post['email']) )
                    {
                        $mail_receiver = $post['email'];
                    }



                    foreach($data_receiver as $fuser)
                    {
                        $id_receiver = $fuser->id;
                    }

                    if( isset($id_receiver) )
                    {

                        $token = md5(microtime(TRUE) . rand(0, 100000));

                        // Create the user using form values
                        $share = ORM::factory('share');

                        $share->id_sender = $file->id_user;
                        $share->id_receiver = $id_receiver;
                        $share->email = $mail_receiver;
                        $share->id_file = $file->id;
                        $share->token = $token;
                        $share->save();


                        $stoken = $token;


                    }
                    else
                    {
                        $message = 'Utilisateur inexistant.';
                    }



                }
                else
                {
                    $message = 'Utilisateur inexistant.';
                }



            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }

        }


    }






    public function action_shared()
    {

        $this->template->title .= 'Partage';
        $this->template->content = View::factory('files/shared')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('files', $files)
            ->bind('files_senders', $files_senders);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('File', $id_file);
        $post = $this->request->post();


        $shared = ORM::factory('Share')->where('id_receiver', '=', $user->id)->find_all();

        foreach($shared as $share)
        {
            $sharedc = $share->id;
        }

        if( isset($sharedc) )
        {
            $files_ids = array();
            $files_senders = array();
            foreach($shared as $share)
            {

                $files_ids[$share->id_file] = $share->id_file;

                $data_receiver = ORM::factory('User', $share->id_sender);


                    $files_senders[$share->id_file] = $data_receiver->username;



            }




            $files =  ORM::factory('File')->where('id', 'IN', $files_ids)->find_all();


        }
        else
        {
          $message = "Aucun fichier.";
        }


    }



    public function action_sharedown()
    {
        $this->template->title .= 'Partage';
        $this->template->content = View::factory('files/sharedown')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('dllink', $dllink)
            ->bind('file', $file);

        $user = Auth::instance()->get_user();
        $token = $this->request->param('id');



        $shared = ORM::factory('Share')->where('token', '=', $token)->find_all();

        foreach($shared as $share)
        {
            $dllink = WEBROOT.'file/download/'.$share->id_file;
            $id_file = $share->id_file;

        }
        $file = ORM::factory('File', $id_file);



    }



    public function action_folderrename()
    {

        $this->template->title .= 'Renommer un dossier';
        $this->template->content = View::factory('files/rename')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('file', $file);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('Folder', $id_file);

        if (HTTP_Request::POST == $this->request->method())
        {
            try {


                $post = $this->request->post();


                if($file->loaded())
                {
                    $file->set('name', $post['newname'])->update();
                    $this->redirect('file/index');
                }

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }

    }





    public function action_foldermove()
    {

        $this->template->title .= 'Deplacer un dossier';
        $this->template->content = View::factory('files/movef')
            ->bind('errors', $errors)
            ->bind('message', $message)
            ->bind('file', $file)
            ->bind('folders', $folders);

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('folder', $id_file);
        $folders = ORM::factory('folder')->where('id_user', '=', $user->id)->find_all();
        $post = $this->request->post();

        if (HTTP_Request::POST == $this->request->method())
        {
            try {


                if($file->loaded())
                {
                    $file->set('id_parent', $post['foldername'])->update();
                    $this->redirect('file/index/'.$post['foldername']);
                }

            } catch (ORM_Validation_Exception $e) {

                // Set failure message
                $message = 'There were errors, please see form below.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }

    }






    public function action_folderdel()
    {

        $user = Auth::instance()->get_user();
        $id_file = $this->request->param('id');
        $file = ORM::factory('Folder', $id_file);


        try {

            if($file->loaded())
            {

                $file->delete();
                $this->redirect('file/index');
            }



        } catch (ORM_Validation_Exception $e) {


            $message = 'There were errors, please see form below.';


            $errors = $e->errors('models');
        }
    }





}
?>