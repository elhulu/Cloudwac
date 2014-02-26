<?php
$iFolders =0;
$arrayFolder = array();
foreach($folders as $key => $Subfolder):

    $arrayFolder[$key] = '
        <div class="panel panel-default filePrev">
            <div class="panel-body panelFolder folderprev">

                <div class="fileImg"><a href="'.WEBROOT.'file/index/'.$Subfolder->id.'"><img src="'.WEBROOT.'medias/imgs/folder_other.png" alt=""/></a></div>
                <div class="subfolderTitle"><a href="'.WEBROOT.'file/index/'.$Subfolder->id.'">'.$Subfolder->name.'</a></div>

                <div class="btn-group-vertical">
                     <a href="'.WEBROOT.'file/folderrename/'.$Subfolder->id.'" class="btn btn-default butsmall">Renommer</a>
                     <a href="'.WEBROOT.'file/foldermove/'.$Subfolder->id.'" class="btn btn-default butsmall">Deplacer</a>
                     <a href="'.WEBROOT.'file/folderdel/'.$Subfolder->id.'" class="btn btn-default butsmall">Supprimer</a>
                </div>


            </div>
        </div>
     ';

    $arrayFolder[$key.'-parent'] = $Subfolder->id_parent;
    $iFolders++;

endforeach;





?>
<h2>Mes fichiers</h2>

<p class="persojauge"><?php echo $used_space; ?> Mo / 30 Mo (<span><?php echo $used_space_percent; ?>%</span>)</p>

<div class="visualspace">
    <div class="progress progresssty">
        <div class="progress-bar progresssty" role="progressbar" aria-valuenow="<?php echo $used_space_percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_space_percent; ?>%">
            <span class="sr-only"><?php echo $used_space_percent; ?>% Complete</span>
        </div>
    </div>
</div>

<a href="/pepi/CloudWac/file/upload/<?php echo $id_folder_display; ?>" class="btn btn-primary addBut">Ajouter un fichier</a>
<a href="/pepi/CloudWac/file/addfolder/<?php echo $id_folder_display; ?>" class="btn btn-warning addButb">creer un dossier</a>

<div class="panel panel-default">
    <div class="panel-body">


        <?php
        if($iFolders == 0 && count($files) == 0)
        {

            echo '<div class="alert alert-info">Aucun Fichier</div>';

        }
        ?>


        <?php if( !empty($foldername) ){ ?>

        <div class="alert alert-warning foldernameact">
            <img src="<?php echo WEBROOT; ?>medias/imgs/folder.png" alt=""/>
            <?php echo $foldername; ?>
        </div>

        <?php }  ?>


        <?php foreach($files as $file):
            if($file->id_folder == $id_folder_display)
            {
                ?>

                <div class="panel panel-default filePrev">
                    <div class="panel-body">

                        <div class="fileImg"><img src="<?php echo WEBROOT; ?>medias/imgs/file_<?php if(substr($file->type, 0, 5) == 'audio' || substr($file->type, 0, 4) == 'text' || substr($file->type, 0, 5) == 'image'){  if(substr($file->type, 0, 4) == 'text'){ echo 'text'; } else { echo substr($file->type, 0, 5);} }else { echo "other"; }?>.png" alt=""/></div>
                        <div class="fileTitle"><?php echo $file->name; ?></div>
                        <div class="fileType"><?php echo $file->type; ?></div>
                        <div class="fileSize"><?php echo (INT) $file->size / 1024; ?> Ko</div>

                        <div class="btn-group-vertical">
                            <a href="<?php echo WEBROOT; ?>file/rename/<?php echo $file->id; ?>" class="btn btn-default butsmall">Renommer</a>
                            <a href="<?php echo WEBROOT; ?>file/move/<?php echo $file->id; ?>" class="btn btn-default butsmall">Deplacer</a>
                            <a href="<?php echo WEBROOT; ?>file/del/<?php echo $file->id; ?>" class="btn btn-default butsmall">Supprimer</a>
                            <?php if( substr($file->type, 0, 5) == 'audio' )
                            { echo '<a href="'.WEBROOT.'file/player/'.$file->id.'" class="btn btn-default butsmall butblue">Ecouter</a>'; } ?>
                            <a href="<?php echo WEBROOT; ?>file/share/<?php echo $file->id; ?>" class="btn btn-default butsmall butgrey">Partager</a>
                            <a href="<?php echo WEBROOT; ?>file/download/<?php echo $file->id; ?>" class="btn btn-default butsmall butgreen">Telecharger</a>
                        </div>


                    </div>
                </div>
            <?php } endforeach; ?>






<?php foreach($folders as $folder):



        if($folder->id_parent == $id_folder_display)
        {



        ?>
        <div class="folderTitle"><a href="<?php echo WEBROOT.'file/index/'.$folder->id; ?>"><?php echo $folder->name; ?></a></div>
        <HR width=75% noshade size=2>


        <?php foreach($files as $file):
                if($file->id_folder == $folder->id)
                {
                ?>

        <div class="panel panel-default filePrev">
            <div class="panel-body">

                <div class="fileImg"><img src="<?php echo WEBROOT; ?>medias/imgs/file_<?php if(substr($file->type, 0, 5) == 'audio' || substr($file->type, 0, 4) == 'text' || substr($file->type, 0, 5) == 'image'){  if(substr($file->type, 0, 4) == 'text'){ echo 'text'; } else { echo substr($file->type, 0, 5);} }else { echo "other"; }?>.png" alt=""/></div>
                <div class="fileTitle"><?php echo $file->name; ?></div>
                <div class="fileType"><?php echo $file->type; ?></div>
                <div class="fileSize"><?php echo (INT) $file->size / 1024; ?> Ko</div>

                <div class="btn-group-vertical">
                    <a href="<?php echo WEBROOT; ?>file/rename/<?php echo $file->id; ?>" class="btn btn-default butsmall">Renommer</a>
                    <a href="<?php echo WEBROOT; ?>file/move/<?php echo $file->id; ?>" class="btn btn-default butsmall">Deplacer</a>
                    <a href="<?php echo WEBROOT; ?>file/del/<?php echo $file->id; ?>" class="btn btn-default butsmall">Supprimer</a>
                    <?php if( substr($file->type, 0, 5) == 'audio' )
                    { echo '<a href="'.WEBROOT.'file/player/'.$file->id.'" class="btn btn-default butsmall butblue">Ecouter</a>'; } ?>
                    <a href="<?php echo WEBROOT; ?>file/share/<?php echo $file->id; ?>" class="btn btn-default butsmall butgrey">Partager</a>
                    <a href="<?php echo WEBROOT; ?>file/download/<?php echo $file->id; ?>" class="btn btn-default butsmall butgreen">Telecharger</a>
                </div>


            </div>
        </div>
        <?php } endforeach; ?>


            <?php
            for($i = 0; $i < count($arrayFolder); $i++)
            {

                if(isset( $arrayFolder[$i.'-parent'] ) && $arrayFolder[$i.'-parent'] == $folder->id)
                {
                    echo $arrayFolder[$i];
                }
            }

            ?>





<?php } endforeach; ?>









    </div>
</div>
