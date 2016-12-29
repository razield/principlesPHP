<!DOCTYPE html>
<html lang="en">
<?php
 include('head.php');
?>
<body>

    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.html"><img src="img/sas_logo.png" alt="Logo" width="100px" height="40px"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#pricing" class="scroll">Pricing</a></li>
            <li><a href="#">Sign in</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        
  <?php include('header.php');?>
    
    <div class="mouse-icon hidden-xs">
				<div class="scroll"></div>
			</div>
    
    <section id="be-the-first" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
            <h2>PAGINA 2</h2>
            <p class="lead">Y esto es la pagina2, creo...</p>
          </div>
        </div>
        
        <div class="iphone wow fadeInUp" data-wow-delay="1s">
	        <img src="img/iphone.png">
        </div>
      </div>
    </section>
    
    <section id="main-info" class="pad-xl">
	    <div class="container">
		    <div class="row">
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
				    <hr class="line purple">
				    <h3>App Feature One Here</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
				    <hr  class="line blue">
				    <h3>App Feature One Here</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
			    </div>
			    <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
				    <hr  class="line yellow">
				    <h3>App Feature One Here</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
			    </div>
		    </div>
	    </div>
    </section>
        
        
    <!--Pricing-->
<?php include('sectionPricing.php');?>
    
    
    <section id="invite" class="pad-lg light-gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <i class="fa fa-envelope-o margin-40"></i>
            <h2 class="black">Get the invite</h2>
            <br />
            <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.</p>
            <br />
            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form role="form">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Request Invite</button>
                </form>
              </div>
            </div><!--End Form row-->

          </div>
        </div>
      </div>
    </section>
    
    
    <section id="press" class="pad-sm">
      <div class="container">
        
        <div class="row margin-30 news-container">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
            <a href="#" target="_blank">
            <img class="news-img pull-left" src="img/press-01.jpg" alt="Tech Crunch">
            <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.<br /> 
            <small><em>Student UdeA Juan F Zuluaga G</em></small></p>
            </a>
          </div>
        </div>
        
        <div class="row margin-30 news-container">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
            <a href="#" target="_blank">
            <img class="news-img pull-left" src="img/press-02.jpg" alt="Forbes">
            <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut. <br /> 
            <small><em>Sasa consultoria - Dic 29, 2016</em></small></p>
            </a>
          </div>
        </div>
        
      </div>
    </section>
    
    
    <footer>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Connect with us on</li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        
      </div>
    </footer>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

   
    </body>
</html> 