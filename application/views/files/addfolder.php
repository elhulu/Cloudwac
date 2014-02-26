<?php

if(isset($error_message))
{


            echo '<div class="alert alert-danger">'.$error_message.'</div>';


}

?>
<h2>Ajouter un dossier</h2>


<form method="POST" enctype="multipart/form-data" action="<?php echo WEBROOT.'file/addfolder/'.$inside; ?>">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <h3>Nom du dossier</h3>


            <div class="form-group">
                <input type="text" class="form-control" placeholder="Entre le nom du dossier" name="name">
            </div>

            <div class="well">

                <h4>Creer dans le dossier :  (optionnel)</h4>

                <select class="form-control input-lg" name="parentfolder">

                    <option value="none" selected="selected">- Selectionnez le dossier parent -</option>

                    <?php foreach($folders as $folder): ?>

                        <option value="<?php echo $folder->id; ?>" <?php if($folder->id == $inside) { echo 'selected="selected"'; }?>><?php echo $folder->name; ?></option>



                    <?php  endforeach; ?>

                </select>


            </div>


            <button type="submit" class="btn btn-warning" id="Lbut">Creer le dossier</button>


        </div>
    </div>
</form>