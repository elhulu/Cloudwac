<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link href="http://localhost/pepi/cloudwac/medias/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/pepi/cloudwac/medias/css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/pepi/CloudWac/medias/js/jquery-1.10.2.min.js"></script>
    <script src="/pepi/CloudWac/medias/js/audioplayer.js"></script>
    <script src="/pepi/CloudWac/medias/js/bootstrap.min.js"></script>
    <script src="/pepi/CloudWac/medias/js/visual.js"></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="/pepi/CloudWac/medias/imgs/logo.png" alt="CloudWac" width="50" height="34"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar">
        <ul class="nav navbar-nav">
            <?php if(!$user){  ?>
            <li class="active"><a href="/pepi/CloudWac/user/signup">Inscription</a></li>
            <li><a href="/pepi/CloudWac/user/login">connexion</a></li>
            <?php } ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php if($user){  ?>
            <li><a href="/pepi/CloudWac/file/shared"><b>Mes partages</b></a></li>
            <li class="active"><a href="/pepi/CloudWac/file"><b>MES FICHIERS</b></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon compte <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo WEBROOT; ?>user/edit">Modifier mes informations</a></li>
                    <li><a href="<?php echo WEBROOT; ?>user/logout">Deconnexion</a></li>
                </ul>
            </li>

            <?php } ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>


<?php echo $content; ?>
</body>
</html>