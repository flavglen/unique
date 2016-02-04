<!DOCTYPE html>
<!--
Theme by Glen
copyright:glen@bolasintelli.co.in
-->
<html>
    <head>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Glens</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
                <link rel="stylesheet" href="css/bootstrap-switch.min.css">
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="css/style.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                <script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>
                <script src="js/bootstrap-switch.min.js"></script>
                <script>
                $( document ).ready(function() {
                    
               
                    var orangeSite= $('.aboutBootstrap,.header,.starBg');
                   
                        $("[name='ToggleStyle']").bootstrapSwitch({
                            onSwitchChange: function(event, state) {
                              if(state===false)
                              {
                                  orangeSite.css("background-color", "#6699FF");
                                 
                              }
                              else
                              {
                                  orangeSite.css("background-color", "#ff9966");
                                  
                              }
                            
                            }
                        })
                    });
                      
                </script>
    </head>
    <body>
        <!--HEADER NAVIATION -->
  <nav class="navbar navbar-default navbar-fixed-top navBgColor">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GLENS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav listColor">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right listColor">
            <li class="switchTheme"><span>Switch theme</span>
                 <input id="switch-size" type="checkbox" name="ToggleStyle" checked data-size="mini"></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <!--NAVI MENU END-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="images/bootstrap_icon-512.png" alt="wordpress" class="img-responsive centerImage"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="cssFun">CSS IS FUN</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="line">
                        </div>
                       <i class="fa fa-html5 starBg"></i>
                           
                    </div>
                </div>
                
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3>CREATIVE - SIMPLE - UNIQUE - ATTACTIVE </h3>   
                    </div>
                </div>
                
            </div>
        </div>
        
        <!--PORT POLIO -->
        <div class="portpolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="portplioText">TECHNOLOGY</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="line lineBlack">
                        </div>
                       <i class="fa fa-css3 startBgBlack"></i>
                        
                         
                    </div>
                </div>
                
                <!--TECHNOLOGY -->
               <div class="row">
                   <div class="technologyRow">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a class="hvr-shrink" href=""> <img src="images/1426780611_apple-512.png" alt="wordpress" class="img-responsive "/></a>
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                             <a class="hvr-shrink" href="">   <img src="images/android.png" alt="wordpress" class="img-responsive"/></a>
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <a class="hvr-shrink" href="">    <img src="images/Coding-Html-512.png" alt="wordpress" class="img-responsive"/></a>
                         </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                             <a class="hvr-shrink" href="">   <img src="images/microsoft_windows-512.png" alt="wordpress" class="img-responsive"/></a>
                         </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <a class="hvr-shrink" href="">  <img src="images/html_5.png" alt="wordpress" class="img-responsive"/></a>
                         </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <a class="hvr-shrink" href="">  <img src="images/social_style_1_css3-512.png" alt="wordpress" class="img-responsive"/></a>
                         </div>
                    </div>
               </div>
                
            </div>
        </div>
        
        <!--About Bootstrap-->
        <div class="aboutBootstrap">
            <div class="container ">
               
                
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="aboutText">ABOUT</h1>
                        </div>
                   
                
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="line">
                          </div>
                           <span class="glyphicon glyphicon-hand-up starBg" aria-hidden="true"></span>
                      </div>
         
                
                <div class="row justifyText">
                    <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-12"> 
                        <p><span>B</span>ootstrap easily and efficiently scales your websites and applications with a single code base, 
                            from phones to tablets to desktops with CSS media queries.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12"> 
                         <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, 
                             dozens of custom HTML and CSS components, and awesome jQuery plugins.</p>
                    </div>
                    
                    <div class="col-lg-8 col-lg-offset-2  col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center noPadding">
                         <a class="btn btn-outline btn-lg" href="#">DOWNLOAD</a>  
                    </div>
                </div>
                    
                   
            </div>
        </div>
        
        <div class="footer centerAlign">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 noPadding">
                        <h2>CONTACT ME <i class="fa fa-paper-plane-o"></i> </h2>
                        <p>BOLAS INTELLI SOLUTIONS<br/>MANGALORE</p>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 noPadding">
                        <h2>FIND ME ON <i class="fa fa-weixin"></i> </h2>
                        <ul class="list-inline">
                            <li><a href="" class="socialBtn"><i class="fa fa-facebook fb"></i></a></li>  
                           <li><a href="" class="socialBtn"><i class="fa fa-linkedin"></i></a></li>   
                           <li><a href="" class="socialBtn"><i class="fa fa-youtube"></i></a></li>  
                         <li><a href="" class="socialBtn"><i class="fa fa-twitter"></i></a></li>  
                        </ul>
                    </div>
                   <div class="col-lg-4 col-md-4 col-sm-6 noPadding">
                        <h2>ABOUT ME <i class="fa fa-jsfiddle"></i></h2>
                        <p>Hi This is <b>Glen.</b>Working as PHP,HTML,CSS,JQUERY developer in Bolas Intelli Solutions, Mangalore</p>
                       
                    </div>
                </div>
            </div>
        </div>
        
        <!--FOOTER BOTTOM -->
        <div class="footerBottom centerAlign">
            <div class="container">
                <div class="row">
                    <p><i class="fa fa-copyright"></i> Powered by Bolas Intelli Solution</p>
                </div>
            </div>
        </div>
        
    </body>
</html>
