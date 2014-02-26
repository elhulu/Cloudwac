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

?>
<h2>Inscription</h2>


<form method="POST">
<div class="panel panel-default" id="InputGroupMod">
    <div class="panel-body">

        <div class="input-group" >
            <span class="input-group-addon labelSignup">Login</span>
            <input type="text" class="form-control" placeholder="Username" name="username" >
        </div>

        <div class="input-group">
            <span class="input-group-addon labelSignup">Mot de passe</span>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password">
        </div>

        <div class="input-group">
            <span class="input-group-addon labelSignup">Confirmation</span>
            <input type="password" class="form-control" placeholder="Tapez une seconde fois votre mot de passe" name="password_confirm">
        </div>

        <div class="input-group">
            <span class="input-group-addon labelSignup">Email</span>
            <input type="text" class="form-control" placeholder="Entrez votre adresse electronique" name="email">
        </div>

        <button type="submit" class="btn btn-primary" id="Lbut">Envoyer</button>


    </div>
</div>
</form>