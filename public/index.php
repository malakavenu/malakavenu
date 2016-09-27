<!doctype html>


<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Karthik Rajan / Software Developer">
	  <meta name="author" content="Karthik Rajan">

	  <title> Malaka Venugopal Reddy / Software Engineer </title>


	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	  <!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->

		</head>

	<body>

		<div class="container-info">
			<div class="info-main">
				<div class="info__elevator">
					<h1 class="info__elevator-text">
						I'm Malaka Venugopal Reddy <br/> Software Engineer
					</h1>
				</div>
				<a href="mailto:venu.malaka@gmail.com" class="info__button--dark">Get In Touch.</a>
			</div>
			<div>
				<form>
					<section id="left">
				      <label for="form_name">Name</label>
				      <input name="form_name" id="form_name" type="text" >
				      <label for="form_email">Email</label>
				      <input name="form_email" id="form_email" type="email" >
					</section>
					<section id="right">
				      <label for="form_msg">Message</label>
				      <textarea name="form_msg" id="form_msg"></textarea>
				      <input id="submit" class="button" name="submit" type="submit" value="Send">
					</section>
				</form>
			</div>
			<div class="info-footer">
				<div class="info-footer__social">
					<a href="https://twitter.com/malakavenu" target="_blank" class="fa fa-twitter info-footer__social-icon--twitter"></a>
					<a href="https://github.com/malakavenu" target="_blank" class="fa fa-github info-footer__social-icon--github"></a>
					<a href="https://in.linkedin.com/in/malakavenu" target="_blank" class="fa fa-linkedin info-footer__social-icon--linkedin"></a>
				</div>
			</div>
		</div>

		<div class="container-main">
			<a name="top-desktop"></a>
			<div class="main__container-about">

				<div class="main__tag">About Me</div>
				<p class="main__copy">
          For the past 2 years, I have been working in the area of web application development.
          My primary areas of interest are Web application Architecting, Designing and development.
          I also focus on areas like Machine Learning, Deep Learning in the field of
          Artificial Intellingence and want to build systems around it to improve the lives of the people.
				</p>

			</div>

			<div class="main__container-projects">

				<div class="main__tag">Skills</div>

          <ul class="main__list">
  					<li class="main__list-item">HTML / CSS</li>
            <li class="main__list-item">Object Oriented PHP</li>
  					<li class="main__list-item">Laravel &amp; other PHP Frameworks</li>
            <li class="main__list-item">JS / Angular JS</li>
            <li class="main__list-item">MySQL</li>
            <li class="main__list-item">GIT / SVN</li>
            <li class="main__list-item">WebRTC</li>
            <li class="main__list-item">Web Sockets</li>
            <li class="main__list-item">Material Design / Angular Material</li>
            <li class="main__list-item">PHPUnit / PHPSpec</li>
            <li class="main__list-item">Amazon Web Services</li>
            <li class="main__list-item">Agile / Scrum Methodologies</li>
  				</ul>

				</div>

			</div>

		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$.ajax({
	        type: "POST",
	        url: "email.php",
	        data: $(form).serialize(),
	        success: function(){
	        $('.success').fadeIn(1000);
	        }
    	  });
		</script>
	</body>

</html>
