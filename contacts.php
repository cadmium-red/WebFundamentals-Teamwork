<!DOCTYPE html>
<html>
<head>
<!-- META -->
<title>Hardcore University | Contacts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />	
<!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> 	
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=143346044418&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
		<!-- NAVIGATION -->
		<?php include('includes/nav.php'); ?>
		<!-- NAVIGATION -->	
    <!-- Page Content -->
		<div class="container">
			<div class="col-md-6">
				<div class="contact-form">
					<h3>Контакт с нас</h3>
					<form method="post" action="phpContact/contact.php" onsubmit="MM_validateForm(&#39;name&#39;,&#39;&#39;,&#39;R&#39;,&#39;email&#39;,&#39;&#39;,&#39;R&#39;
		,&#39;phone&#39;,&#39;&#39;,&#39;R&#39;,&#39;msg&#39;,&#39;&#39;,&#39;R&#39;)return document.MM_returnValue" encytype="text/plain, charset=UTF-8">
						<div class="input-group">
							<span class="input-group-addon" ><span class="glyphicon glyphicon-user"></span></span></span>
							<span><input name="name" type="text" class="form-control" placeholder="Type your name here" required="required"></span>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<span><input name="email" type="text" class="form-control" placeholder="Type your e-mail here" required="required"></span>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
							<span><input name="phone" type="text" class="form-control" placeholder="Type your phone here" required="required"></span>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<span><textarea class="form-control" placeholder="Type your message here.." name="msg" required="required"></textarea></span>
						</div>
						<div>
							<span><input class="btn btn-danger btn-lg" type="submit" value="Send"></span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/HardUni/814806185224174" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			</div>
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38731.01843011139!2d23.045439451806644!3d42.59881993790281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14aacb4941e949cf%3A0x400a01269bf5580!2sPernik!5e1!3m2!1sen!2sbg!4v1414490072505" width= 100% height="450" frameborder="0" style="border:0">
				</iframe>
			</div>
		</div>
			<!-- /.container -->
			<!-- START FOOTER -->
			<?php include('includes/footer.php'); ?>
			<!-- END FOOTER -->
	</body>
</html>
