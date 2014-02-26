<?php


if(isset($message))
{


            echo '<div class="alert alert-danger">'.$message.'</div>';


}

?>
<h2>Recuperer un fichier partagé</h2>


<form method="POST" enctype="multipart/form-data">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <div class="alert alert-info alertinfored">
                <span><?php echo $file->name; ?></span><br>
                Taille : <?php echo $file->size / 1024; ?> Ko<br>
                Type : <?php echo $file->type; ?><br>

            </div>


            <a href="<?php echo WEBROOT; ?>file/download/<?php echo $file->id; ?>" class="btn btn-primary" id="Greenbut">TELECHARGER</a>


        </div>
    </div>
</form>