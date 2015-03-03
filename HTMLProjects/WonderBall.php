<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="shortcut icon" href="PERRty.png">
<style>

@font-face {
    font-family: BoldFont;
    src: url(Nexa_Bold.otf);
}

@font-face {
    font-family: LightFont;
    src: url(Nexa_Light.otf);
}

.selector{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color:black;
}

.selector p {
  color:white;
  display:inline-block;
}

#YaddaPhoto{
  margin-left:20px;
  margin-top:5px;
}

#How {
  margin-left:40px;
  font-size:14px;
  }
  
#Contact {
  margin-left:20px;
  font-size:14px;
  }
  
#Status {
  margin-left:20px;
  font-size:14px;
  }
  
.selector h4 {
  font: 400 55px BoldFont;
  color: #fff;
  margin-left: 145px;
  text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
  display:inline-block;
}

.body {
  background-color: lightblue;
}

.Video {
    margin-left:250px;
	margin-top:200px;
    position:relative;
}
 .CoverPhoto {
   top: -50%; 
   left: -50%; 
   width: 50%; 
   height: 100%;
}
  .CoverPhoto img{ 
  top: 0; 
  left: 0; 
  right: 0; 
  bottom: 0; 
  margin: auto; 
  min-width: 100%;
  min-height: 100%;
 }

 
</style>
  </head>
  <body>
  <div class="selector">
	<img id="YaddaPhoto" align="left" src="Toolbar-Photo.jpg" height="70" width="70">
	  <h4 class="text-center">Messaging in a New Dimension</h4>
	  <p><a href="#" id="How" align="right">How It Works</a><p>
	  <p><a href="#" id="Contact" align="right">Contact Us</a></p>
	  <p><a href="#" id="Status" align="right">Status</a></p>
  </div>
  <div class="CoverPhoto">
  <img src="http://wowslider.com/sliders/demo-77/data1/images/idaho239691_1920.jpg" height="750" width="1348">
  </div>
  <div class="Video">
	<iframe width="854" height="510" src="https://www.youtube.com/embed/H0aGdy1eyz8?autoplay=1" frameborder="0" allowfullscreen></iframe>
  </div>
  
  <h2 align="center">Need to Contact Yadda-Yadda?</h2>
  
<form align="center" action="contact.php" method="post">
	Your name<br>
    <input type="text" name="cf_name"><br>
	Your e-mail<br>
    <input type="text" name="cf_email"><br>
	Message<br>
    <textarea name="cf_message"></textarea><br>
	<input type="submit" value="Send">
	<input type="reset" value="Clear">
</form>

 </body>
</html>