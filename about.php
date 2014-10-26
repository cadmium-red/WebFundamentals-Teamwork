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
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
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
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
        </div>

        <hr>		
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
