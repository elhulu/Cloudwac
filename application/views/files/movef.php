<?php

//var_dump($folders);
if(isset($error_message))
{


            echo '<div class="alert alert-danger">'.$error_message.'</div>';


}

?>
<h2>Deplacer</h2>


<form method="POST" enctype="multipart/form-data">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <h3>Depacer <span><?php echo $file->name; ?></span> vers :</h3>


            <select class="form-control input-lg" name="foldername">

                    <?php foreach($folders as $folder):
                    if($folder->id != $file->id && $folder->id != $file->id_parent){ ?>

                        <option value="<?php echo $folder->id; ?>" <?php if($folder->id == $file->id_parent)
                { echo 'selected="selected"'; } ?> ><?php echo $folder->name; ?></option>



                    <?php } endforeach; ?>

            </select>


            <button type="submit" class="btn btn-primary" id="Lbut">Envoyer</button>


        </div>
    </div>
</form>