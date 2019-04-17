
<!DOCTYPE html>
<html lang="en">

<head><title>shrot description</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 0) {
        document.getElementById("top").style.height = "100px";
         document.getElementById("logo").style.padding  = "20px";
         document.getElementById("bigfont").style.fontSize = "15px";
         document.getElementById("navbar").style.marginTop = "15px";
        
        
        
      } else {
        document.getElementById("top").style.height = "130px";
        
         document.getElementById("logo").style.padding = "10px";
         document.getElementById("bigfont").style.fontSize  = "25px";
         document.getElementById("navbar").style.marginTop = "30px";
      }
    }
    </script>

 
</head>
<body >
 
  
   
  <div class="clearfix" style="clear:both"></div>
    <div class="container-fluid">
      
         <div class="container" style="width:100%;height: auto;overflow: hidden!important;">
            <div class="col-sm-12" id="top">
                <p style="display:inline"><img src="http://www.sassnepal.org.np/images/team/46.jpg" id="logo"><h3   class="bigfont" id="bigfont" style="display:inline; margin-left: 1%;">ANIL KARKI ::: Phone : 9869392504</h3></p>
            </div>
             <nav id="navbar">
        <div class="navbar-header">
          
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  
        </div>
       
        <div class="collapse navbar-collapse" id="mynavbar">
            

    
                <ul class="nav navbar-nav" style="padding-left: 0px" id="nav1">
                    
                       
                    <li><a href="#">Home</a></li>
                    <li><a href="#">BioGraphy</a></li>
                    <li><a href="#" class="dropdown" data-toggle="dropdown">Pations<span class="caret"></span></a>
                        <ul class="dropdown-menu" id="menu">
                            <li><a href="index1.html">Cross fire</a></li>
                            <li><a href="index1.html">Cross fire</a></li>
                            <li><a href="#">Ducati</a></li>
                            <li><a href="#">Pulsar</a></li>
                            <li><a href="#">Honda</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Achievements</a></li>
                     <li><a href="#message">Messages</a></li>
                     <p style="display: inline-block;margin-top: 30px;"><input type="text">
                        <li class="social-icon"><a href="#"><i class="fas fa-search"></i></a> </li>
                    
                     <li class="social-icon"><a href="#"><i class="fa fa-facebook"></i></a> </li>
                <li class="social-icon"><a href="#"> <i class="fab fa-instagram"></i></a></li>
                     </p>
                </ul>
               
    
        </div>
    </nav> 
                
                
                  
                
                <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12"  style="background-color:rgb(39, 39, 40);">
                    <h2 class="bigfont">WELCOME EVERYONE</h2>
                    <h3 class="font">I am Anil Karki.Officially I am a Student and I work for myself.</h3>
                </div>
                <!-- skills -->
                <div class="col-sm-12">
                <H1 class="fonttitle">Skills I POSSES</H1>
                <div class="col-sm-5 col-md-5 col-xs-5 col-lg-5">
                        <h2 class="font" style="position:absolute;margin-top: 5%;color:rgb(15, 15, 15);font-weight: bold;background-color: white;opacity: 0.5">A complete Webdesign(HTML/CSS)</h2>
                    <img src="images/web design.jpg" class="img-responsive" id="img">
                    
                </div>
                <div class="col-sm-7 col-sm-7 col-lg-7 col-xs-7">
                        <h2 class="font" style="position:absolute;margin-top: 3%;color:rgb(15, 15, 15);font-weight: bold;background-color: white;opacity: 0.5">Django For Backened</h2>
                        <img src="images/DJANGO.jpg" class="img-responsive" id="img">
                    </div>
                </div>

                
                <div  class="col-sm-12 slideanim" > 
                     
                    <H1 class="fonttitle">MY RECENT PROJECTS</H1>
                    <div class="col-sm-5 col-md-5 col-xs-5 col-lg-5">
                        <a href="#" data-toggle="modal" data-target="#popupModal"><img src="images/bike3.jpg" class="img-responsive" id="img"></a>
                      
                    </div>
                    <div class="col-sm-7 col-sm-7 col-lg-7 col-xs-7">
                            <a href="#" data-toggle="modal" data-target="#popupModal"><img src="images/bike3.jpg" class="img-responsive" id="img"></a>
                        </div>

            </div>
            <!-- popup modal -->
            <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Sass Management System</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="images/footerimg.jpg">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- end of modal box -->
            
            <div  class="col-sm-12"  id="message"> 
                     
                <H1 class="fonttitle">GET IN TOUCH</H1>
              </div>
            

          <div class="col-sm-12 parallex">
            <div class="col-sm-6">
            <form  style="color:white;margin-left:10%;">
              <label>Email: <input name="name" type="text" class="form-control" placeholder="YOUR EMAIL*" maxlength="70"><BR>
              </label><br>
              <label>Message:<textarea name="name" class="form-control a" placeholder="YOUR MESSAGE*" rows="10" cols="60"></textarea></label>
              <p><button style="display:inline;"><span style="color:black;border-radius:10px;font-weight:bolder;">Send Message</span><a href="#"><img src="images/right.png"  class="send"></a></button></p>
            </form>
            </div>
            <div class="col-sm-5 google" style="height: 5%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14127.236875747205!2d85.35106662955332!3d27.72317616910118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1bdb45cbc593%3A0x2d0d68684b1d03ab!2sBoudhha%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1550769223898" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
              


          </div>


                        <!-- footer -->
                    <div class="col-sm-12 slideanim">
                        <H1 class="fonttitle">Find Me</H1>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                                <a href="#"><img src="images/google.png" id="social"></a>
                            
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                                <a href="#"><img src="images/fb.png" id="social"></a>
                            
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                                <a href="#"><img src="images/insta.png" id="social"></a>
                            
                        </div>
                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                                <a href="#"><img src="images/yout.png" id="social"></a>
                            
                        </div>
                </div>
         </div>
            
         
      

<!-- for scrolling effect -->
<script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
        // Prevent default anchor click behavior
        event.preventDefault();
    // Store hash
        var hash = this.hash;
    
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
       
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      });
      
      // Slide in elements on scroll
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;
    
          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>
  
</body>
</html>
