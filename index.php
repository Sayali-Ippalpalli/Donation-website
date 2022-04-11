<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DONATOPEDIA</title>
  <link rel="stylesheet" href="all.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
  .fixed-top.scrolled {
  background-color:#01012b !important;
  transition: background-color 200ms linear;
}





.carousel-item {
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    background-size: cover;
  }
html{
  scroll-behavior: smooth;
}
  .carousel-caption {
    bottom: 220px;
  }
  .carousel-caption h3{
    font-size: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-family: 'Ubuntu', sans-serif;
  }
  .carousel-caption h1{
    font-size: 65px;
    letter-spacing: 2px;
    font-weight: 500;
    font-family: 'Carter One', cursive;
  }
  .carousel-caption p{
    font-family: 'Ubuntu', sans-serif;
    font-size: 20px;
  }
  .drk:after {
  content:"";
  display:block;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background:linear-gradient(145deg,#a7a5a5,#0c0c0c);
 
  opacity:0.8;
}
.navbar-nav a{
    font-size: 20px;
    font-weight: 700;
    font-family: 'Ubuntu', sans-serif;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color:#fae845;
    
}
.navbar-light .navbar-nav .nav-link{
    color: white;
    font-size: larger;
}
.navbar-light .navbar-nav .nav-link:hover{
    color:#ffeb39;
}
.navbar-nav{
    text-align: center;
}
.nav-link{
    padding: .2rem 1rem;
}
.btn{
    color: white;
    padding: 0.5rem 1rem 0.5rem 1rem;
    font-weight: 500;
   
}
.w-100{
    height: 100vh;
}











.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}







.half{
  flex: 50%;
  padding: 0px 40px;
}
.half img{
  vertical-align: middle;
  width: 100%;
  
}
.half h1{
  font-size: 45px;
  color: #1e272e;
  font-family: 'Carter One', cursive;
}
.half p{
  margin-top: 32px;
  font-family: 'Ubuntu', sans-serif;
  color: #485460;
  font-size: 18px;
}






 

  .con2 h1{
    font-size: 40px;
    
   padding-bottom: 10px;
   font-family: 'Carter One', cursive;
  }
  .con2 h5{
    font-size: 25px;
   
   padding-bottom: 10px;
   font-family: 'Carter One', cursive;
  }
  .con2 p{
    font-family: 'Ubuntu', sans-serif;
    color: #485460;
    font-size: 17px;
    padding-bottom: 25px;
  }

.card{
  transition: transform 0.5s,opacity 0.5s,box-shadow 0.5s;
}
.card:hover{
  transform: translateY(-10px);
  opacity: 0.8;
  box-shadow: 0 1rem 3rem 0.5rem rgba(0, 0, 0, 0.4);
}







.test{
  display: inline-block;
  text-align: center;
  margin: 28px;
  background-color: white;
} 



.ved{
 
 
  background-color: white;
  margin-left: auto;
  margin-right: auto;
  border: 10px solid white;
  box-shadow: 0 1rem 3rem 0.5rem rgba(0, 0, 0, 0.4);
}
.ved iframe{
  height: 200px;
 width: 400px;
}




.footer{
  position: relative;
  margin-top: 100px;
}
.footer .it{
  position: absolute;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   
}



 








/* ------------------------------------------------------------------Responsiveness---------------------------------------------------------- */





@media only screen and (max-width:992px){
  .navbar-nav.ml-auto{
      background: rgba(0,0,0,0.8);
  }
  .navbar-toggler{
      padding: 1px 5px;
      font-size: 18px;
      line-height: 0.3;
      background: #fff;
  }
  .half{
    flex: 100%;
    margin-bottom: 20px;
  }
  .half h1,p{
    text-align: center;
  }
  
  .test{
    display: block;
    margin: auto;
  }
  .ved{
    margin-top: 30px;
  }
  
}

@media only screen and (max-width:767){
 
  
  .test{
    display: block;
    margin: auto;
  }
  
  
}



@media only screen and (max-width:500px){
  .carousel-caption {
    bottom: 220px;
  }
  .carousel-caption h3{
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-family: 'Ubuntu', sans-serif;
  }
  .carousel-caption h1{
    font-size: 30px;
    letter-spacing: 2px;
    font-weight: 500;
    font-family: 'Carter One', cursive;
  }
  .carousel-caption p{
    font-family: 'Ubuntu', sans-serif;
    font-size: 12px;
  }
  .test{
    display: block;
    margin: auto;
  }
 

}











@media screen and (max-width: 600px) {
  
  .ved iframe{
    height: 100px;
   /* width: 100%; */
  }
  
  .test{
    display: block;
    margin: auto;
  } 
  
  .half img{
    margin-top: 30px;
  }
  
  .ved{
    position: relative;;
    margin-top: 150px;
  }
  
 
}





</style>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" >
    <div class="container">
      <!-- Our website logo -->
      <a class="navbar-brand" href="#"><img src="images/websitelogo.png" height="80px" width="250px"
          style="border-radius: 30px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link " href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#prog">OUR PROGRAMS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#cont">CONTACT US</a>
          </li>

          <li class="nav-item">

            <div class="dropdown">
              <a class=" dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                GET INVOLVED
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DONATE</a>
                <a class="dropdown-item" href="#">HELP</a>
                <a class="dropdown-item" href="#">CHARITY</a>
              </div>
            </div>

          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle bg-info" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sign in
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="S_login.php">As a staff</a>
                <a class="dropdown-item" href="O_login.php">As a organization</a>

              </div>
            </div>
          </li>



        </ul>

      </div>
    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item drk active">
        <img class="d-block w-100" src="images/info.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3>Welcome To</h3>
          <h1 class="animate__animated animate__fadeInDown" style="animation-delay: 0.3s;">DONATOPEDIA</h1>
          <p class="animate__animated animate__backInLeft" style="animation-delay: 1s;">We are determined to help ,
            nurture and love mankind.<br>
            Give Us A HELPING HAND.</p>
          <button type="button" class="btn bg-info animate__animated animate__backInRight"
            style="animation-delay: 2s;" ><a href="#org" class="text-light">Donate Now</a></button>
        </div>
      </div>
      <div class="carousel-item drk">
        <img class="d-block w-100" src="images/ngo1.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h3>Welcome To</h3>
          <h1 class="animate__animated animate__flipInX" style="animation-delay: 0.3s;">DONATOPEDIA</h1>
          <p class="animate__animated animate__lightSpeedInRight" style="animation-delay: 1s;"> Give us a helping hand
            to let kids study and achieve their dreams.<br>
            Be their light of hope </p>
          <button type="button" class="btn bg-info animate__animated animate__lightSpeedInLeft"
            style="animation-delay: 2s;"><a href="#org" class="text-light">Have A Visit</a></button>
        </div>
      </div>
      <div class="carousel-item drk">
        <img class="d-block w-100" src="images/banner-2.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h3>Welcome To</h3>
          <h1 class="animate__animated animate__fadeInDown" style="animation-delay: 0.3s;">DONATOPEDIA</h1>
          <p class="animate__animated animate__backInLeft" style="animation-delay: 1s;">Leave all your
            worries,meet senior citizens
            .<br>
            and listen to their experiences
            .<br> </p>
          <button type="button" class="btn bg-info animate__animated animate__backInRight"
            style="animation-delay: 2s;"><a href="#org" class="text-light">Be A Helping Hand</a></button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  <!-- About us -->

  <section id="about" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="half">
          <img src="images/aboutus.jpg">
        </div>
        <div class="half">
          <h1>About Us</h1>
          <p>We started this website with the goal of shedding light on the lesser known organisations.<br>
            As well as ensuring authenticity to both the donors and organisations. <br>
            Our staff is dedicated to provide you with the best services and make your experience easier.
          </p>



        </div>

      </div>

    </div>
  </section>



  <!-- Our Mission -->


  <section id="about" style="margin-top: 50px;">
    <div class="container">
      <div class="row">

        <div class="half">
          <h1>Our Mission</h1>
          <p>Our mission is to provide the best and convenient services to the donors.<br>
            We provide you a list of authentic donors and organisations so that you can take a sigh of relief.<br>
            Our main focus is to assist you for your donations with safety.
          </p>



        </div>
        <div class="half">
          <img src="images/mission.jpg">
        </div>
      </div>

    </div>
  </section>









  <!-- Organizations -->

  <div class="container con2" id="org" style="margin-top: 50px;">

    <h1 class="text-center">Organizations</h1>
    <p class="text-center ">Since you get more joy out of giving joy to others,<br> you should put a good deal of
      thought into the happiness that you are able to give.</p>

    <div class="card-deck">
      <div class="card ">
        <img class="card-img-top" src="images/oldagehome.jpg" height="300px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">NIWARA Old Age Home</h5>
          <p class="card-text text-center">NIWARA is self sustained trust which is trusted by the society for its
            commitments. Niwara as a family, is committed, to support all inmates for basic needs through out their
            life &nbsp;<a href="nirwara.html">more..</a></p>

        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/aa.jpg" height="300px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">SAMPARC</h5>
          <p class="card-text text-center">To reach orphan, needy, helpless, disadvantaged children of commercial sex
            workers, tribal and poor rural children for their shelter, rights, protection, nutrition, best education &nbsp;<a href="samparc.html">more..</a>
          </p>

        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/orphans.jpg" height="300px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">ASHTVINAYAK Trust</h5>
          <p class="card-text text-center">Ashtavinayak Trust is a non-Government charitable organization at Pune,
            (Maharashtra state / India) and provides home for orphans &nbsp;<a href="ashtavinayak.html">more..</a></p>

        </div>
      </div>
</div>
      <div class="card-deck" style="margin-top: 30px;">
        <div class="card ">
          <img class="card-img-top" src="images/1.jpg" height="300px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">SWADHAR</h5>
            <p class="card-text text-center">Swadhar seeks to help and empower women in distress and achieve healthy
              development of underprivileged children through education, guidance, training and counseling to ensure a
              reasonable quality of life for individuals and families &nbsp;<a href="swadhar.html">more..</a></p>

          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/ss.png" height="300px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">JEEVAN ASHRAY Old Age Home</h5>
            <p class="card-text text-center">JEEVAN ASHRAY is a "HOME AWAY FROM HOME". It is an institute run by the
              Mittal Sisters. A quality and respectful living is provided for the retired Senior Citizens by qualified
              professionals with a dream to create, trust and to promote genuine love &nbsp;<a href="jeevan.html">more..</a></p>

          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/home1.jpg" height="300px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">SARLADEVI Vruddhashram</h5>
            <p class="card-text text-center">You’ve worked hard and fulfilled your responsibilities, now you should
              think about your needs, comforts and peace of mind. The time has come to enjoy life on your own terms.
              Yes, it’s time to live with a sense of self respect, dignity and confidence that comes from being
              independent &nbsp;<a href="sarladevi.html">more..</a></p>

          </div>
        </div>
      </div>
</div>










      <!-- Video -->

      <div class="container con2" id="prog" style="margin-top: 50px;">

        <h1 class="text-center">Have a look at us</h1>
        <p class="text-center ">Since you get more joy out of giving joy to others,<br> you should put a good deal of
          thought into the happiness that you are able to give.</p>
      </div>
      <div class="container">
        <div class="embed-responsive embed-responsive-16by9 ved">

          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R4EM8BR9X6o" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
      </div>

     

      <!-- Our Expert team -->
      <div class="container con2" id="services" style="margin-top: 50px;">

        <h1 class="text-center">Our Team Members</h1>
        <div class="container tes">
          <div class="card text-dark  mb-3 test " style="max-width: 18rem;">
            <div class="card-header"><img src="images/shreya.jpg" height="100px" width="100px" style="border-radius: 50%;">
            </div>
            <div class="card-body">
              <p class="card-text text-warning"><i class="fa fa-quote-left"></i></p>
              <h5 class="card-title">Shreya</h5>
              <p class="card-text text-dark">"As a volunteer leader, it’s you who can change. You can encourage your
                volunteers,engage them,motivate them to grow" </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">At your service !</small>
            </div>
          </div>
          <div class="card text-dark  mb-3 test" style="max-width: 18rem;">
            <div class="card-header"><img src="images/sayali.jpg" height="100px" width="100px" style="border-radius: 50%;">
            </div>
            <div class="card-body">
              <p class="card-text text-warning"><i class="fa fa-quote-left"></i></p>
              <h5 class="card-title">Sayali</h5>
              <p class="card-text text-dark">"As you grow older, you will discover that you have two hands — one for
                helping yourself, and the other for helping others."</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">At your service !</small>
            </div>
          </div>
          <div class="card text-dark  mb-3 test" style="max-width: 18rem;">
            <div class="card-header"><img src="images/omkar.jpg" height="100px" width="100px" style="border-radius: 50%;">
            </div>
            <div class="card-body">
              <p class="card-text text-warning"><i class="fa fa-quote-left"></i></p>
              <h5 class="card-title">Omkar</h5>
              <p class="card-text text-dark">"Do everything you can to create an amazing, inspiring experience for
                yourself and your friends– and you won’t regret it."</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">At your service !</small>
            </div>
          </div>
          <div class="card text-dark  mb-3 test" style="max-width: 18rem;">
            <div class="card-header"><img src="images/tanisha.jpg" height="100px" width="100px" style="border-radius: 50%;">
            </div>
            <div class="card-body">
              <p class="card-text text-warning"><i class="fa fa-quote-left"></i></p>
              <h5 class="card-title">Tanisha</h5>
              <p class="card-text text-dark">"Volunteerism is the voice of the people put into action. These actions
                shape and mold the present into a future of which we can all be proud"</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">At your service !</small>
            </div>
          </div>
          <div class="card text-dark  mb-3 test" style="max-width: 18rem;">
            <div class="card-header"><img src="images/kirti.jpg" height="100px" width="100px" style="border-radius: 50%;">
            </div>
            <div class="card-body">
              <p class="card-text text-warning"><i class="fa fa-quote-left"></i></p>
              <h5 class="card-title">Kirti</h5>
              <p class="card-text text-dark">“ Bringing a smile on a child’s face gives a deep satisfaction, which
                cannot be expressed in words, only experienced and felt .”</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">At your service !</small>
            </div>
          </div>

         </div>
        </div>
      </div>
        

   




    


    <footer id="cont" class="page-footer  font-small bg-dark text-light pt-4 ">
      
      <div class="container-fluid text-center text-md-left ">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3 ">
          <h5 class="text-uppercase">DONATOPEDIA</h5>
            <p>Give A Helping Hand.</p>
            
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Contact Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">020-1234567</a>
              </li>
              <li>
                <a href="#!"></a>
              </li>
              <li>
                <a href="#!">912345678</a>
              </li>
              <li>
                <a href="#!"></a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Join Us</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Facebook-Donoatopedia</a>
              </li>
              <li>
                <a href="#!">Instagram-Donoatopedia</a>
              </li>
              <li>
                <a href="#!">Twitter-Donoatopedia</a>
              </li>
              <li>
                <a href="#!"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> DONATOPEDIA</a>
      </div>
          </footer>




    <script>
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });




    </script>
</body>

</html>