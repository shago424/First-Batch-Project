<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend')}}/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 

  <title>Bootstrap</title>

  <style type="text/css">
 
.dropdown-menu li:hover{
  background: blue;
}

.dropdown-menu a:hover{
  background: blue;
}

  </style>
  </head>
  <body>
    
<div class="container" style="background-color:  #eefcf8 ">

        <!-- Header Part -->
<div class="header-part" style="height: 150px">
  <img src="{{ asset('frontend')}}/image/header-logo.jpg" style="width: 100%;height: 150px">
  </div>
<!-- ---------------Nav Bar------- -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-home"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="font-size: 20px;" class="nav-link" href="#">হোম <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" class="nav-link" href="#">সম্পর্কে</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" style="font-size: 20px;" class="nav-link" href="#">Contac Us</a>
      </li>
      <li class="nav-item dropdown">
        <a style="font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="font-size: 20px;" class="dropdown-item" href="#">Recent</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">All</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Admission</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Exam</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Result</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a style="font-size: 20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Class
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="font-size: 20px;" class="dropdown-item" href="#">One</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Two</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Admission</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Exam</a>
          <a style="font-size: 20px;" class="dropdown-item" href="#">Result</a>
        </div>
      </li>
      <li class="nav-item">
        <a style="font-size: 20px;" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Slider Part -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('frontend')}}/image/s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend')}}/image/s2.gif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend')}}/image/s3.gif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend')}}/image/s4.gif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- ----------------Slider end------------- -->

<!-- ----------------Marquee Start------------- -->

<div class="row" style="height: 45px;margin: 0 0">
  <div class="col-sm-3 text-center" style="background: lightblue;color: black;padding-top: 10px;">
   Argent Notice 
  </div>
   <div class="col-sm-9" class="dummy" style="background:  #e3dd12  ;color: white;padding-top: 10px">
    <ul style="list-style: none;">
    <marquee onmouseover="this.stop()" onmouseout="this.start()" direction="left">
    <li><a style="text-decoration: none;" href="#">Latest News</a></li>

     <!-- <li><a  href="#">Latest News</a></li> -->
  </marquee>
 </ul>
  </div>
</div>

  <div class="card">
  <div class="card-body">
    <div class="row pt-1" style="margin : 0 0;background-color: #fff" >


<!-- ----------Left Sidebar Start------------------- -->

  <div class="col-sm-3" style="" >

     <div class="panel panel-primary" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title">Recent Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 200px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">        
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li> 
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li>
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li>
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>


            <div class="panel panel-primary mt-2" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title text-center">Admission Result Exam Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 200px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">        
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li> 
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li>
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Exam Notice</a></li>
                <li ><a style="text-decoration: none;" href=""><i class="fa fa-angle-right"></i>  Admission Notice</a></li>     
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>
   


<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-danger" class="notice" style="color: white">
    Notice Panel
  </div>
  <a style="width: 100%" class="btn btn-success text-left" href="">Recent Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">All Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Admission Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Exam Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Result Notice</a>
 
</div>

<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-primary" class="notice" style="color: white">
    Gallery
  </div>
  <ul class="list-group list-group-flush">
    <li style="background-color: red;" class="list-group-item"><a style="text-decoration: none;color: white" href="">Photo Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Event Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Video Gallery</a></li>
  

  </ul>
</div>








  </div>

  <!-- ----------Left Sidebar End------------------- -->

    <!-- ----------Content Start------------------- -->

   <div class="col-sm-6" style="">
  
   <div class="card" style="border-radius: none;border:none;">
  <img src="{{ asset('frontend')}}/image/s3.gif" class="card-img-top" alt="..." style="border-radius: none;border:none;">
  <div class="card-body" style="background-color:  #f1eaf9 ;border-radius: none;border:none;">
    <h5 class="card-title">College History</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

<div class="card  mt-2">
  <img src="{{ asset('frontend')}}/image/s3.gif" class="card-img-top" alt="...">
  <div class="card-body" style="background-color:  #cdf4cd ">
    <h5 class="card-title">Latest News</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

 <div class="card  mt-2">
  <img src="{{ asset('frontend')}}/image/s3.gif" class="card-img-top" alt="...">
  <div class="card-body" style="background-color:  #feedf0 ">
    <h5 class="card-title">Latest Event</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

  </div>

  <!-- ----------Content Part end------------------- -->

<!-- ----------Right Sidebar Start------------------- -->

   <div class="col-sm-3" style="">
   
   <div class="card" style="width:100%;height: 330px;border-radius: none;;">
  <img class="card-img-top pt-2" src="{{ asset('frontend')}}/image/girl.png" alt="Card image" height="180px">
  <div class="card-body" style="background-color:  #fbe6e3 ">
    <h4 class="card-title">Chiarman</h4>
    <p style="padding: 0">Jonh Doe</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

 <div class="card" style="width:100%;height: 330px;margin-top: 10px;">
  <img class="card-img-top pt-2" src="{{ asset('frontend')}}/image/girl.png" alt="Card image" height="180px">
  <div class="card-body">
    <h4 class="card-title">Principal</h4>
    <p style="padding: 0">Jonh</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-success" class="notice" style="color: white">
   Emergency Website Link
  </div>
  <a style="width: 100%" class="btn btn-warning text-left" href="">SHED</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">DSHE</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">NU</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">Rajshahi Board</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">EMIS Cell</a>
 
</div>

<div class="card mt-2">
  <div class="fb-page" data-href="https://www.facebook.com/SsbLearningInstitute" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SsbLearningInstitute" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SsbLearningInstitute">SSB Learning Institute - এসএসবি লার্নিং ইন্সটিটিউট</a></blockquote></div>
  
</div>

  </div>


</div>
  </div>
</div>

<div class="card mt-1" >
  <h5 class="card-header">College Location</h5>
  <div class="card-body">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
  </div>
</div>

  
 <div class="card mt-1" style="background-color: #222" class="footer">
  
  <div class="row" style="margin-top: 20px" class="foot">
    
      <div class="col-sm-3">
        <div class="card" style="background: none;border:none;">
     <div class="fleft">
    <h4>Contac Us</h4>
    <p>Address : Professor Para, Sherpur, Bogura</p>
    <p>Email : shagor424@gmail.com</p>
    <p>Mobile : 01312-411894</p>
    </div>
    </div>
</div>
<div class="col-sm-3">
  <div class="card" style="background: none;border:none;">
    <div class="fcenter">
    <ul>
        <h4 class="fcsos">Important Links</h4>
        <li><a class="btn" href="#">Home</a><br></li>
        <li><a class="btn" href="#">Admin Login</a><br></li>
        <li><a class="btn" href="#">Teacher Login</a><br></li>
        <li><a class="btn" href="#">Student Login</a><br></li>
      </ul>
    </div>
    </div>
   </div>

<div class="col-sm-3">
  <div class="card" style="background: none;border:none;"> 
    <div class="fcenter2">
    <ul>
        <h4 class="fcsos2">Other Links</h4>
        <li><a class="btn" href="#">Sign Up</a><br></li>
        <li><a class="btn" href="#">Payment</a><br></li>
        <li><a class="btn" href="#">Privicy & Polocy</a><br></li>
        <li><a class="btn" href="#">Contac Us</a><br></li>
      </ul>
    </div>
    </div>
</div>

    <div class="col-sm-3">
      <div class="card" style="background: none;border:none;">
    <div class="fright">
      <ul>
        <h4 class="fsos">Social Link</h4>
        <li><a class="btn" href="#">Facebook</a><br></li>
        <li><a class="btn" href="#">Twitter</a><br></li>
        <li><a class="btn" href="#">Instragram</a><br></li>
        <li><a class="btn" href="#">Youtube</a><br></li>
      </ul>
          </div>

      </div>
   </div>
  </div>
</div>



</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="{{ asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend')}}/js/bootstrap.min.js"></script>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="Ohah2kwY"></script>
  </body>
</html>
