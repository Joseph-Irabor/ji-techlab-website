<!DOCTYPE html>
<html lang="en">

<!--  ===== CTRL+SHIFT+I ======== to format css codes  -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SCRIPT FOR AWESOME FONTS -->
    <!-- <script src="https://kit.fontawesome.com/72dad66e89.js" crossorigin="anonymous"></script> -->
    <!-- ==================================== -->

    <!-- SCRIPT FOR JQUERY -->
    <Script src="/js/jquery-3.6.0.min.js" ></Script>
    <!-- ==================================== -->

     <!-- MY SCRIPTS-->
     <Script src="/js/anime.js" ></Script>
     <!-- ==================================== -->
    <!-- FONTS FOR HEADING, SUB HEADING AND BODY CONTENS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Quicksand:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- ======================================================= -->

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ======================================================= -->

    <!-- MY CSS FILE -->
    <link rel="stylesheet" href="../css/headerfooter.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- ======================================================= -->

    <!-- TITLE REFERENCES -->
    <link rel="icon" href="/media/images/jitechLAB-title-icon.png">
    <title>Services | JI-TechLAB</title>
    <!-- ======================================================= -->
    
</head>

<body>

     <!-- NAVIGATION BAR -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="" style="font-family: 'Oswald', sans-serif;" >JI-TechLAB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="portfolio">My Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="services">My Services</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="training.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Training
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Online module</a></li>
                  <li><a class="dropdown-item" href="#">Offline module</a></li>
                  <li><a class="dropdown-item" href="#">Self-paced</a></li>
                  <li><a class="dropdown-item" href="#">Choose your style</a></li>
                  <li><a class="dropdown-item" href="#">Let us pick for you</a></li>
                </ul>
              </li> -->
              
              <li class="nav-item">
                <a class="nav-link active " href="#">Contact Me</a>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>
     <!-- ==================== END OF NAVIGATION BAR ============================= -->
    
     <!-- CONTACT US FORM -->
     <div class="contact-container">
      <div class="contact-img">
        <img src="../media/images/jitechlablogoLight.png" alt="ji-TechLAB-logo">
      </div>
     
      <form action="">
        <h2 style="text-align: center; margin-bottom: 30px;" >SEND US A FEEDBACK</h2>
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-2" id="floatingInput" >
          <label for="floatingInput">Name </label>
        </div>
  
        <div class="form-floating mb-3">
          <input type="email" class="form-control form-control-2" id="floatingInput" required >
          <label for="floatingInput">Email address <span style="color:red;">*</span></label>
        </div>
  
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-2" id="floatingInput" required>
          <label for="floatingInput">Subject <span style="color:red;">*</span></label>
        </div>
  
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Enter your message here</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required ></textarea>
        </div>
  
          <div class="col-12">
            <input type="submit" class="btn-generic-2" value="Send message" >
    
          </div>

      </form>

      <div class="contact-bottom">
        <div class="inner">
          <i class="fa fa-phone" aria-hidden="true" > </i> <a href="tel:+2348161649497">  +2348161649497</a>
        </div>
                <div class="inner">
          <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:jitechlab@gmail.com">jitechlab@gmail.com</a>
        
        </div>
      </div>

    </div>

    <!-- SCRIPT FOR JS AND POPPER.... Do not write any code afer this script -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- ======================================================= -->
</body>

</html>
