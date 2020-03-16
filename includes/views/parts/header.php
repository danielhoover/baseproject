<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo $this->title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<?php if($this->current == "login"): ?>
		<link href="css/toastr.min.css" rel="stylesheet">
	<?php endif; ?>

    <link href="css/main.css" rel="stylesheet">




</head>
<body>
<header>
	<div class="inner">
		<div class="logo">
			<div class="name">Adressverwaltung</div>
			<div class="version">1.0</div>
		</div>

		<?php if(LOGGED_IN == true): ?>
			<nav class="navbar navbar-expand-lg px-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainmenu">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a href="./logout">Logout</a></li>
                        </ul>

                        <p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>
                    </div>
			</nav>
		<?php else: ?>
            <nav class="navbar navbar-light navbar-expand-lg px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item <?php if($this->current == "login"): ?>active<?php endif; ?>"><a href="./login">Login</a></li>
                    </ul>
                </div>
            </nav>
		<?php endif; ?>

	</div>
</header>