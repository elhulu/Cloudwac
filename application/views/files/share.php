<?php

if(isset($errors))
{

    foreach($errors as $error)
    {
        if( !is_array($error) )
        {
            echo '<div class="alert alert-danger">'.$error.'</div>';
        }
        else
        {
            foreach($error as $erro)
            {
                echo '<div class="alert alert-danger">'.$erro.'</div>';
            }
        }

    }

}


//var_dump($folders);
if(isset($message))
{


            echo '<div class="alert alert-danger">'.$message.'</div>';


}

?>
<h2>Partager un fichier</h2>

<?php
if( isset($stoken) )
{
    echo '<div class="alert alert-success">Votre fichier a été partagé avec succes. <br> <b>Lien de partage :</b> <pre><b>http://localhost'.WEBROOT.'file/sharedown/'.$stoken.'</b></pre></div>';

}
?>


<form method="POST" enctype="multipart/form-data">
    <div class="panel panel-default" id="InputGroupMod">
        <div class="panel-body">

            <p>
                <span class="label label-primary">Pour partager votre fichier, deux solutons :</span>
            </p>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="PSEUDO du destinataire du partage" name="receiver">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="EMAIL du destinataire du partage" name="email">
            </div>


            <button type="submit" class="btn btn-primary" id="Lbut">Partager</button>



        </div>
    </div>
</form>