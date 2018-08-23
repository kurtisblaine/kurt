<!--~~~~~~~~~~~~~~~~~~~~~~~~~~NAVBAR START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~><-->
<?php include('actionpage.php'); ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Kurtis Waldner's web portfolio">
		<meta name="author" content="Kurtis">
		<title>Kurtis Waldner</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav pull-left navbar-nav">
                <li><a href="../files/about.html">Kurtis Blaine Waldner</a></li>
              </ul>
              <ul class="nav pull-right navbar-nav">
                <li><a href="../files/software.html">Software</a></li>
                <li><a href="../index.html#games">Games</a></li>
                <li><a href="../files/military.html">Military</a></li>
                <li><a href="../files/music.html">Music</a></li>
                <li class="dropdown">
                  <a href="../files/contact.php" class="dropdown-toggle" data-toggle="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~NAVBAR END~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-><-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~contact start~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-><-->
<div class="contact">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2><br><br>&ensp;   C   &ensp;   O   &ensp;   N   &ensp;   T   &ensp;   A   &ensp;   C   &ensp;   T   &ensp;<br></h2>
          <p>questions, concerns, grammar error, collaboration, chat, advice, or suggestions.<br><br></p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form name="contact-form" class="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="First and last name..." value="<?= $name ?>" tabindex="1" >
                  <span class="error"> <?php echo $nameError;?> </span>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Valid email address..." value="<?= $email ?>" tabindex="2" >
                  <span class="error"><?php echo $emailError;?></span>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="What is your message about..." value="<?= $subject ?>" tabindex="3">
                  <span class="error"><?php echo $subjectError;?></span>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="What do you want me to know..."  tabindex="4" ><?= $message ?></textarea>
                  <span class="error"><?php echo $messageError;?></span>
              </div>
              <div class="text-center">
                  <button type="submit" onclick="actionpage.php" class="btn btn-start-order">Send Message</button>
              </div>
              <span class="success"><?php echo $successMessage;?></span>
          </form>
      </div>
  </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~contact end~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-><-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-><-->
<div class="grey-background">
    <div class="container">
      <footer id="footer">
      <a name="bottom"></a>
      <h2>
      <ul class="media_btn">
        <li style="display: inline-block">
          <a href="https://www.facebook.com/kurtis.waldner" class="fa fa-facebook"></a>
        </li>
        <li style="display: inline-block">
          <a href="https://www.instagram.com/_usercurt/?hl=en" class="fa fa-instagram"></a>
        </li>
        <li style="display: inline-block">
          <a href="https://www.linkedin.com/in/kurtis-waldner-a1bb99165/" class="fa fa-linkedin"></a>
        </li>
        <li style="display: inline-block">
          <a href="https://github.com/kurtisblaine" class="fa fa-github"></a>
        </li>
        <li style="display: inline-block">
          <a href="https://accounts.snapchat.com/accounts/snapcodes" class="fa fa-snapchat"></a>
        </li>
        <li style="display: inline-block">
          <a href="https://soundcloud.com/kurt-waldner" class="fa fa-soundcloud"></a>
        </li>
      </ul>
    </h2>
        <p class="pull-center"><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Email me with suggestions, questions, or just to chat<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Kurtis.Waldner@trojans.dsu.edu</p>
        <p class="pull-left"><a href="#">Back to Top</a></p>
        <p class="pull-right"><a href="../index.html">Home</a></p>
      </footer>
    </div>
    </div>  
    <script src="../js/contact.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER END~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-><-->
</html>