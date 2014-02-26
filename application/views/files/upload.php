<?php

if(isset($error_message))
{


            echo '<div class="alert alert-danger">'.$error_message.'</div>';


}

?>
<h2>Ajouter un fichier</h2>


<form method="POST" enctype="multipart/form-data">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <h3>Selectionnez un fichier</h3>

                <div class="form-group">
                    <input type="file" name="file" class="form-control inpufile">
                </div>

            <div id="uploadlogin">
                <img src="<?php echo WEBROOT; ?>medias/imgs/lodingBar.gif" alt=""/>
            </div>

            <select class="form-control input-lg" name="parentfolder">

                <option value="none" selected="selected">- Selectionnez le dossier parent -</option>

                <?php foreach($folders as $folder): ?>

                    <option value="<?php echo $folder->id; ?>" <?php if($folder->id == $inside) { echo 'selected="selected"'; }?> ><?php echo $folder->name; ?></option>



                <?php  endforeach; ?>

            </select>



            <button type="submit" class="btn btn-primary" id="Lbut" onclick="showUpLoading();">Envoyer</button>


        </div>
    </div>
</form>