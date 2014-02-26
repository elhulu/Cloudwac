<?php

if(isset($message))
{

            echo '<div class="alert alert-danger">'.$message.'</div>';

}

?>
<h2>Login</h2>


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

            <button type="submit" class="btn btn-primary" id="Lbut">Envoyer</button>


        </div>
    </div>
</form>