<!doctype html>


<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Malaka Venugopal Reddy / Software Engineer ( Front End Developer )">
        <meta name="author" content="Malaka Venugopal Reddy Front End Developer">
        <meta name="keywords" content="Malaka Venugopal Reddy / Software Engineer ( Front End Developer )">

      <title> Malaka Venugopal Reddy / Software Engineer </title>


      <link rel="stylesheet" href="css/app.css?v-1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <![endif]-->

        </head>

    <body>

        <div class="container-info">
        <!-- <div class="img-profile">
            <img class="img-circle" src="images/vg.jpg" alt="profile">
        </div> -->
            <div class="info-main">
                <div class="info__elevator">
                    <h1 class="info__elevator-text">
                        I'm Malaka Venugopal Reddy <br/> Software Engineer
                    </h1>
                </div>
                <a href="mailto:venu.malaka@gmail.com" class="info__button--dark">Get In Touch.</a>
                <div>
                <form action="/contact" method="Post" class='formfields'>
                    {{ csrf_field() }}
                   <textarea required id="content" name="content" rows="4" cols="50" placeholder="Enter your message ..."></textarea><br>
                    <input type="submit" value="Contact me" id="submit"></input>
                    </form>
                </div>
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
    </body>

</html>
