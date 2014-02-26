<?php



   //var_dump($file);


if(isset($message))
{

            echo '<div class="alert alert-danger">'.$message.'</div>';

}

?>
<h2>Lecteur audio</h2>

<div class="panel panel-default">
    <div class="panel-body">


        <div class="alert alert-info">
            En cours de lecture : <span class="filenameSpan"><?php echo $file->name; ?></span>
        </div>


        <pre class="playerpre">
            <audio preload="auto" autoplay controls>
                <source src="<?php echo "http://localhost".WEBROOT."cwFiles/".$file->id_user."/".$file->path ?>" type="<?php echo $file->type; ?>"/>
                Votre navigateur ne supporte pas le lecteur.
            </audio>
        </pre>








    </div>
</div>
