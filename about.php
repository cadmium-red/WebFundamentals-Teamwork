<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> 	

</head>

<body>
	<!-- NAVIGATION -->
	<?php include('includes/nav.php'); ?>
	<!-- NAVIGATION -->
    <!-- Page Content -->
    <div class="container">
    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">За ХардУни
                    <small>Запознай се с екипа</small>
                </h1>
                <p>Преподавателският състав е внимателно подбран и още по-внимателно генетично модифициран. Той се състои от практици, хора от индустрията, които могат да излекуват всеки от мързел, безхаберие и игнорантност.</p>
            </div>
        </div>
        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Преподавателски екип</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/gizmo-thumb.png" alt="gizmoImg" data-toggle="modal" data-target="#gizmoModal">
                <h3>Гизмо Наков
                    <small>Master Могуей</small>
                </h3>
                <p>Наков не се страхува от нищо! Но всичко се страхува от Наков!</p>
            </div>
			<div id="gizmoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/gizmo.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>			
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/achebg-thumb.png" alt="achebgImg" data-toggle="modal" data-target="#acheModal">
                <h3>Аче Смит
                    <small>Java Могуей</small>
                </h3>
                <p>Джаварите не включват светлината...Те гасят тъмнината</p>
            </div>
			<div id="acheModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/achebg.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/vlado-thumb.png" alt="vladoImg" data-toggle="modal" data-target="#vladoModal">
                <h3>Владо theCook
                    <small>CSS Гремлин</small>
                </h3>
                <p>Когато се разхожда в планината, той оглежда заобикалящата го природа и се любува на графиката!</p>
            </div>
			<div id="vladoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/vlado.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/marian-thumb.png" alt="marianImg" data-toggle="modal" data-target="#marianModal">
                <h3>Мариян Smith
                    <small>Linux Гремлин</small>
                </h3>
                <p>Собственоръчно е компилирал първият компилатор...</p>
            </div>
			<div id="marianModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/marian.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/sto-thumb.png" alt="stoImg" data-toggle="modal" data-target="#stoModal">
                <h3>Просто Сто
                    <small>Linux Гремлин</small>
                </h3>
                <p>Може да инсталира Microsoft Office на Slackware</p>
            </div>
			<div id="stoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/sto.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="img/assistent-thumb.png" alt="assistantImg" data-toggle="modal" data-target="#assistantModal">
                <h3>Рандом Асистент
                    <small>Гремлин Хелпер</small>
                </h3>
                <p>На чужд гръб и сто студента са малко.</p>
            </div>
						<div id="assistantModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aboutModal" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<img src="img/assistent.png" class="img-responsive">
					</div>
				</div>
			  </div>
			</div>
        </div>

        <hr />		
			<!-- START FOOTER -->
			<?php include('includes/footer.php'); ?>
			<!-- END FOOTER -->
	  </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
