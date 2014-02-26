
<h2>Mes partages</h2>


<div class="panel panel-default">
    <div class="panel-body">


        <?php

        if( count($files) == 0)
        {

            echo '<div class="alert alert-info">Aucun Fichier partagé</div>';

        }

        else
        {

             foreach($files as $file):
                    ?>

                    <div class="panel panel-default filePrev">
                        <div class="panel-body">

                            <div class="fileImg"><img src="<?php echo WEBROOT; ?>medias/imgs/file_other.png" alt=""/></div>
                            <div class="fileTitle"><?php echo $file->name; ?></div>
                            <div class="fileType"><?php echo $file->type; ?></div>
                            <div class="fileSize"><?php echo (INT) $file->size / 1024; ?> Ko</div>
                            <div class="sharesender">Propriétaire : <span><?php echo $files_senders[$file->id]; ?></span></div>

                            <div class="btn-group-vertical">
                                <?php if( substr($file->type, 0, 5) == 'audio' )
                                { echo '<a href="'.WEBROOT.'file/player/'.$file->id.'" class="btn btn-default butsmall butblue">Ecouter</a>'; } ?>
                                <a href="<?php echo WEBROOT; ?>file/download/<?php echo $file->id; ?>" class="btn btn-default butsmall butgreen">Telecharger</a>
                            </div>


                        </div>
                    </div>
                <?php  endforeach;

        }?>










    </div>
</div>
