<?php


if(isset($error_message))
{


            echo '<div class="alert alert-danger">'.$error_message.'</div>';


}

?>
<h2>Renommer</h2>


<form method="POST" enctype="multipart/form-data">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <h3>Nouveau nom pour <span><?php echo $file->name; ?></span></h3>


            <div class="form-group">
                <input type="text" class="form-control" placeholder="Entre le nouveau nom" name="newname">
            </div>


            <button type="submit" class="btn btn-primary" id="Lbut">Envoyer</button>


        </div>
    </div>
</form>