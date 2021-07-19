<?php 
require_once('dataconnection.php');

//Code for contact 
if(isset($_POST['Help']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  echo "$name";
  echo "phone";
  echo "email";
  echo "message";
  $msg=mysqli_query($con,"insert into message(Name,Phone,Email,Message) values('$name','$phone','$email','$message')");
if($msg)
{
  echo "<script>alert('Message send successfully');</script>";
}
else
{
  echo "<script>alert('Message not send');</script>";
}
}
// Code for SignUp
if (isset($_POST['signup'])) 
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $Email=$_POST['email'];
  $Contact=$_POST['Contact'];
  $password=$_POST['password'];
  $msg=mysqli_query($con,"insert into project(FName,LName,Email,Contact,password) values('$fname','$lname','$Email','$Contact','$password')");
if($msg)
{
  echo "<script>alert('Sign Up successfully');</script>";
}
else
{
  echo "<script>alert('error');</script>";
}
}

// code for subscribe
if (isset($_POST['subs']))
{
  $Subscribe=$_POST['Subscribe'];
  $mess= mysqli_query($con,"insert into subscribe(Email) values('$Subscribe')");
  echo $Subscribe;
  if ($mess) 
  {
  echo "<script>alert('Subscribed successfully');</script>";
}
else
{
  echo "<script>alert('error');</script>";
}
}


// code for Login
if (isset($_POST['login'])) 
{
  $usermail=$_POST['mail'];
  $passwor=$_POST['pass3'];
  $msg= mysqli_query($con,"SELECT * FROM project WHERE Email='$usermail' and password='$passwor'");
  echo $usermail;
  echo $passwor;
  if ($msg)
  {
    echo "<script>alert('Login successfully');</script>";
  }
  else
  {
    echo "<script>alert('Incorrect User ID  or Password ');</script>";
  }
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Hotels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="project1.css">
</head>
<body style="overflow-x: hidden;">
	<div style="background-image: url(https://rtcstorage01.z29.web.core.windows.net/article/nature_photographer_norway_lofoten_archipelago_2U8VRFW_e8477f21-fa1f-41af-8a1b-d722aff4fdb4.jpg); background-size: cover; height: 45em;width: 100%">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Hepta</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li  class="active"><a href="hotel.php">Hotels</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a class="btn" data-target="#mycontact" data-toggle="modal">Contact</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a class="btn" data-target="#SignUp" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a>

 

  <!-- Modal sign up -->
  <div class="modal fade" id="SignUp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal SignUp-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
           
      <form action="" method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-3"><input type="text" name="fname" placeholder="First Name" required class="form-control"></div>
          <div class="col-md-3"><input type="text" name="lname" placeholder="Last Name" required class="form-control"></div>
      </div><br>
      <div class="row">
        <div class="col-md-6"><input type="email" name="email" placeholder="E-mail" required class="form-control"></div>
      </div><br>
      <div class="row">
        <div class="col-md-6"><input type="number" name="Contact" placeholder="Number" required class="form-control"></div>
      </div><br>
      <div class="row">
        <div class="col-md-6"><input type="password" name="password" placeholder="Password" required class="form-control"></div>
      </div><br>
      <div class="row">
        <div class="col-md-6"><input type="text" name="pass2" placeholder="Confirm Password" required class="form-control"></div>
      </div><br>
      <div class="row">
        <div class="col-md-6"><input type="checkbox" name="ckb" required>Read the Terms And Condition</div>
      </div>
    </div>
      <input type="submit" name="signup" value="SignUp">
      </form>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

        </li>
         <li><a class="btn" data-target="#Login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         <!-- Modal sign up -->
  <div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Login-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
           <form action="" method="post">
            <div class="container">
              <div class="row">
                <div class="col-md-6"><input type="text" name="mail" required class="form-control" placeholder="E-mail or Contact"></div>
              </div><br>
              <div class="row">
                <div class="col-md-6"><input type="Password" name="pass3" required class="form-control" placeholder="Password"></div>
              </div>
            </div>
            <input type="submit" name="login" value="Login">
           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



      </ul>
  
</nav> 

<!-- Modal contact-->
<div class="modal fade" id="mycontact" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-md-6"> <label for="name"> Name</label>
                        <input type="text" name="name" class="form-control"></div>
                      <div class="col-md-6"><label for="phone">Phone</label>
                      <input type="phone" name="phone" class="form-control"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><label for="email">Email</label><br>
                      <input type="email" name="email" class="form-control"> </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><label>Write message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea></div>
                    </div>
                  
                </div>
                <div class="col-md-5 col-md-offset-1">
                  <h5>ADDRESS:<br></h5>
                  <P>98 West 21th Street, Suite 721<br> New York NY 10016</P><br>
                    <h5>PHONE:</h5><br>
                  <p>(+1) 435 3533</p><br>
                     <h5>EMAIL:</h5><br>
                  <p>info@yourdomain.com</p>
                </div>
              </div>
              
            </div>         
    </div>
        <div class="modal-footer">
          <input type="submit" name="Help" value="Message">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div></form>
      </div>
    </div>   
    </div> 
<div class="hotel">Our Hotel</div>
<div class="container-fluid">
    <div class="row">
       <div class="col-md-3"></div>
            <h3 class="hotel1" align="center"> </h3>
       </div> 
    </div>
</div>
<br><br>
<div class="container"> 
  <div class="row">
    <div class="col-md-4" style="text-align: center;">
      <img src="fast.svg" class="pic">
      <h2 style="text-align: center;">Good Foods</h2>
      <p style="text-align: center;"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
    <div class="col-md-4" style="text-align: center;">
      <img src="earth.svg" class="pic">
      <h2 style="text-align: center;">Travel Anywhere</h2>
      <p style="text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
    <div class="col-md-4" style="text-align: center;">
      <img src="airplane.svg" class="pic">
      <h2 style="text-align: center;">Airplane</h2>
      <p style="text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4" style="text-align: center;">
      <img src="beach.svg" class="pic">
      <h2 style="text-align: center;">Beach Resort</h2>
      <p style="text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
    <div class="col-md-4" style="text-align: center;">
      <img src="mountains.svg" class="pic">
      <h2 style="text-align: center;">Mountain Climbing</h2>
      <p style="text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
    <div class="col-md-4" style="text-align: center;">
      <img src="balloon.svg" class="pic">
      <h2 style="text-align: center;">Hot Air Balloon</h2>
      <p style="text-align: center;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-10 ">
            <!-- <div style="background-image: url(https://specials-images.forbesimg.com/imageserve/5e0e81a9ab5be6000762d4e9/960x0.jpg?fit=scale); height: 500px; width: 500px; background-repeat: no-repeat;">
            </div> --><img style="background-size:cover;width: 100%;margin: auto;cursor: zoom-in;" src="https://specials-images.forbesimg.com/imageserve/5e0e81a9ab5be6000762d4e9/960x0.jpg?fit=scale" height="450">
        </div>
        <div class="col-md-6 col-sm-10">
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
            <div><h2 style="margin-top: 100px;" class="hotel2">Family Room</h2>
              <p style="font-size: 18px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.A small river named Duden flows by their place and supplies it with the necessary regelialia.
              </p>  
              <center><br>
                <button type="submit" class="btn btn-lg"id="bt1" style="border-color: #21D3FB; " >
                          <a href="family.html" id="anc"> SEE MORE </a>
                </button>
               </center>
             </div>
           </div>
            </div>
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-10 " >
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
              <h3 style="margin-top: 100px;" class="hotel2">Presidential Room</h3 >
              <p style="font-size: 18px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <center><br>
                <button type="submit" class="btn btn-lg"id="bt1" style="border-color: #21D3FB; " >
                          <a href="presidential.html" id="anc"> SEE MORE </a>
                </button>
               </center>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-10">
            <img style="background-size:cover; margin: auto;width: 100%;cursor: zoom-in;" src="https://images.squarespace-cdn.com/content/v1/5c4c3678697a985352fd27f9/1553348151342-SVHBU1K8PDDPZQQXIWRW/ke17ZwdGBToddI8pDm48kBxVgS0PyMdcr4oWpEun9PlZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpxByInz5ohDQ4ryf7w-3U0-iosLtr-TpEMGRw4QRwMs-NrwXtW4P9rzAA7dDW5Kmtg/Living+room+of+the+Presidential+Suite+of+the+St+Regis+Hotel+New+York+demonstrating+luxury+hotel+interior+design%2C+with+rich+velvet%2C+formal+occasional+chairs%2C+curved+seating%2C+grasscloth+wallpaper+and+elaborate+chandeliers?format=500w" height="450">
        </div>   
    </div>
</div>

<div style="margin-top: 100px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="inter">Hotel Gallery</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <center>
        <div style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</div></center>
        
      </div>
      
    </div>
  </div>
</div><br><br>
<div class="row">
  <div class="col-md-8 col-sm-12 col-md-offset-2">  <div id="myCarousel" class="carousel slide" data-ride="carousel"  id="caro">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div>
    <div class="carousel-inner ">

      <div class="item active">
        <img src="https://technext.github.io/hepta/images/slider-2.jpg" style="width:100%; height: 650px;">
      </div>

      <div class="item" style="align-content: center;">
        <img src="https://technext.github.io/hepta/images/slider-1.jpg" style="width:100%; height: 650px;">
      </div>
    
      <div class="item">
        <img src="https://technext.github.io/hepta/images/slider-3.jpg" style="width:100%; height: 650px;">
      </div>
      <div class="item">
        <img src="https://technext.github.io/hepta/images/slider-4.jpg" style="width:100%; height: 650px;">
      </div>
      <div class="item">
        <img src="https://technext.github.io/hepta/images/slider-5.jpg" style="width:100%; height: 650px;">
      </div>
      <div class="item">
        <img src="https://technext.github.io/hepta/images/slider-6.jpg" style="width:100%; height: 650px;">
      </div>
  </div> 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div></div>
</div>
<br><br><br>
<div style="background-color: #fafafa;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="inter">More Hotel Features</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <center>
        <div style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</div></center>
       </div>
    </div>
  </div>
</div>
</div>
<br>
<div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <table >
          <tr>
            <td><img src="https://technext.github.io/hepta/images/img_1.jpg" style="height: 220px; width: 330px;"> </td>
          </tr>
          <tr>
            <td  bgcolor="white">
              <h2><a href="project1.html" class="anc">Five Reasons to Stay at Villa Resort</a></h2><br>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table>
          <tr>
            <td>
              <img src="https://technext.github.io/hepta/images/img_2.jpg" style="height: 220px; width: 330px;">
            </td>
          </tr>
          <tr>
            <td bgcolor="white">
              <h2><a href="project1.html" class="anc">Five Reasons to Stay at Villa Resort</a></h2><br>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table>
          <tr>
            <td>
              <img src="https://technext.github.io/hepta/images/img_3.jpg" style="height: 220px; width: 330px;">
            </td>
          </tr>
          <tr>
            <td bgcolor="white"> 
              <h2><a href="project1.html" class="anc">Five Reasons to Stay at Villa Resort</a></h2><br>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-1"></div>
    </div>
  <div style="background-color: #000000;">
<div style="margin-left: 150px; margin-right: 150px;" ><br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <h4 class="h3s"> Quick Link</h4><br><br>
        <p><a href="#" class="anch but">About Us</a><br><br>
          <a href="#" class="anch but">Terms & Conditions</a><br><br>
          <a href="#" class="anch but">Privacy Policy</a><br><br>
          <a href="#" class="anch but">Help</a><br><br>
          <a href="#" class="anch but">Rooms </a></p>
      </div>
      <div class="col-md-3">
        <h4 class="h3s">Support</h4><br><br>
        <p><a href="#" class="anch but">Our Location</a><br><br>
          <a href="#" class="anch but">The Hosts</a><br><br>
          <a href="#" class="anch but">About</a><br><br>
          <a href="#" class="anch but">Contact</a><br><br>
          <a href="#" class="anch but">Restaurant</a> </p>
      </div>
      <div class="col-md-3">
        <h4 class="h3s">Contact Info</h4><br><br>
          <p style="color: #ffff00;"><i>Address:</i><br></p>
          <p class="but">98 West 21th Street, Suite 721<br> New York NY 10016<br> </p>
          <p style="color: #ffff00;"><i>Phone:</p>
            <p class="but">(+1) 435 3533</p><br>
          <p style="color: #ffff00;"><i>Email</i></p><br>
            <p class="but">info@yourdomain.com</p>  
      </div>
      <div class="col-md-3">
        <h4 class="h3s">Subscribe</h4><br><br>
        <p class="but">Sign up for our newsletter</p><br>
        <form action="" method="post">
          <input type="Email" name="Subscribe" placeholder="Your Email" style="border: none; background-color: #000000; border-bottom: dotted; border-bottom-color: #ffffff;">
          <button type="submit" class="sub" name="subs"><i class="fa fa-paper-plane" aria-hidden="true"></i>
</button>
        </form>
      </div>
    </div>
  </div>
  <hr>
  <p class="but" style="text-align: center;font-size: 15px;"><i>
    © Copyright 2018. All Rights Reserved.<br>
    Designed & Developed by <a href="#" class="anch">Ganesh</a> <br>
    Distributed by ThemeWagon</i>
  </p>
  <center>
  <div>
  <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
  <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
  </div></center>
  <br><br><br><br>
</div>
</div>
</body>
</html>