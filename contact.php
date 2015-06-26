
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
  <script src="http://cdn.optimizely.com/js/266130224.js" type="text/javascript"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <title>jtphoto</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  

 <style>
   
 #centerdiv
{
  width: 800px;
  display: block;
  margin-left: auto;
  margin-right: auto;

}

      
    .dropdown-menu{
     z-index: 3000; 
    }
    
   @media (min-width: 768px) {
    .navbar .navbar-nav {
        display: inline-block;
        float: none;
        vertical-align: top;
    }

    .navbar .navbar-collapse {
        text-align: center;
    }
} 
</style>




  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  
  
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    

    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <script src="email/validation.js" type="text/javascript"></script>
  

    
 


  
  
</head>
 
<body>
  
<div id="apDiv2"><a href="index.html"><img src="logo100arial18bold.jpg" width="360" height="30" alt="John Trone Photography"></a><a href="index.html"></a></div>

    <nav class="navbar navbar-vert navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"></a>
      <a class="navbar-cart icon icon-cart visible-xs" href="/cart"><span class="navbar-cart-count" v-text="totalProducts"  v-show="totalProducts > 0"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.html">Home</a></li>
        
        <li class="dropwdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Photographs<span class="caret"></span></a>  
            <ul class="dropdown-menu" role="menu">
              <li class=""><a href="tonedcyanotype.html">Toned Cyanotype Portrait</a></li>
              <li class=""><a href="tonedcyanotypelandscape.html">Toned Cyanotype Landscape</a></li>
              <li class=""><a href="recent1.html">Recent 1</a></li>
              <li class=""><a href="recent2.html">Recent 2</a></li>
              <li><a href="underwater.html">Underwater</a></li>
            </ul>
        </li>    
        <li class=""><a href="exhibitions.html">Exhibitions</a></li>
        <li class=""><a href="http://www.johntrone.com/archive.htm">Archive</a></li>
        <li class=""><a href="about.html">About</a></li>
        <li class=""><a href="contact.php">Contact</a></li>
        
      </ul>
  

    </div>
  </div>
</nav>

  

  <div class="container alert-container"></div>
  <!--Copy and paste the code below into your bootstrap html page -->


    

<h1>Contact</h1>
  
  <h1>Contact Us</h1>
   <h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
   <hr>
		                                                

	          			
				<!--Start Contact form -->		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
	
				
	    


  
</body>
  
</html>