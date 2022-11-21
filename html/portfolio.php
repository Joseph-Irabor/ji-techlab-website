<!DOCTYPE html>
<html lang="en">

<!--  ===== CTRL+SHIFT+I ======== to format css codes  -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SCRIPT FOR AWESOME FONTS -->
    <script src="https://kit.fontawesome.com/72dad66e89.js" crossorigin="anonymous"></script>
    <!-- ==================================== -->

    <!-- SCRIPT FOR JQUERY -->
    <Script src="/js/jquery-3.6.0.min.js" ></Script>
    <!-- ==================================== -->

     <!-- MY SCRIPTS-->
     <Script src="/js/anime.js" ></Script>
     <!-- <script src="../disabler-click.js" ></script> -->
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
    <link rel="stylesheet" href="../css/portfolio.css">
    <!-- ======================================================= -->

    <!-- TITLE REFERENCES -->
    <link rel="icon" href="/media/images/jitechLAB-title-icon.png">
    <title>Joseph's Portfolio | JI-TechLAB</title>
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
                <a class="nav-link active" href="#">My Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services">My Services</a>
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
                <a class="nav-link" href="contact">Contact Me</a>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>
     <!-- ==================== END OF NAVIGATION BAR ============================= -->
    
   
    <div class="portfolio-container">
      <h1 style="text-align:center; color: white;">MY PORTFOLIO</h1>
      <section class="bg-layout">

        <!-- LEFT PORTFLOIO SECTION  -->
        <div class="profile left">

          <section class=" left-inner-section up">
            <img src="../media/images/profileImagePortfolioPage (3).png" alt="">
          </section>

          <section class=" left-inner-section down">
            <h4>Irabor Joseph</h4>
            <p style="color:#654aff;">Web Developer <span style="color: black;">and</span> IT trainer </p>
                       <span class="social-media-links" >
              <a href="https://web.facebook.com/jitechlab" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.youtube.com/channel/UCIUfdDdGr_9_ZMdRZksO_BQ" target="_blank"><i class="fa-brands fa-youtube"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a> 
              <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
              
            </span>

            <div class="profile-bottom">
             
              <a href="../files/IraborJosephResume.pdf" class="bottom-links" target="_blank">DOWNLOAD CV</a>
              
              <a href="contact.html" class="bottom-links" style=" border-left:1px solid rgba(154, 154, 154, 0.444);" >CONTACT ME</a>
            </div>
          </section>
          
        </div>
          
        <!-- RIGHT PORTFLOIO SECTION -->
        <div class="right">
          <!-- About Me -->
          <section class="about-me">
            <h3>About <span class="text-color-separation">Me</span> </h3>
            <hr>
            <p class="about-me-text">
              I am a computer tech specialist. I have vast knoledge in Web development, software programming, networking, graphics illustration, also I am data anlyst with a rich experience in programming, prototyping and usuage of other anylitcaltools.
            </p>

            <p class="about-me-text">
              As  a technology enthusiast with a strong zeal to profer solutions to challenges that may arise from the use of technology, I founded this JI-TechLAB as freelancer with the sole purpose of helping people solve technical problems that emanates from the use this digital tools. As a result, JI-TechLAB was founded.
            </p>
          </section>

            <!-- Accomplishments -->
            <section class="accomplishments">
              <h3>P<span class="text-color-separation">rojects</span> </h3>
              <hr>
              <ul>
                <li class="accomplishment-list">Setup a fully functional network lab to help student understand networking fundamentals. Carita University, Amorji-Nike Enugu, Nigeria.</li>
                <li class="accomplishment-list"> Designed a problem loggin system code-name "Plog system" <a href="#" class="snippet-link">view snippet</a></li>
                <li class="accomplishment-list">Design of a financial transaction software. A case study of Babcock university High School. <a href="#" class="snippet-link">view snippet</a></li>
                <li class="accomplishment-list">Latestest news app. In-view. A case study of Babcock university High School.</li>
                <li class="accomplishment-list">Layout design team member for Babcock university High School's website. <a href="https://buhs.edu.ng" target="_blank" class="snippet-link">visit website</a></li>
               
              </ul>
            </section>
          
          
          <!-- My Services -->
          <section class="my-services">
            <h3>My <span class="text-color-separation">Services</span> </h3>
            <hr>
                
            <p class="services-text">
              I offer services in;
              <ul>
                <li class="services-list">Web development</li>
                <li class="services-list">Computer Hardware repair and maintenance</li>
                <li class="services-list">Software design and programming</li>
                <li class="services-list">Graphic Designs</li>
                <li class="services-list">Consultancy in IT and business</li>
                <li class="services-list">Preparing prospective candidates for IT certification exams</li>
                <li class="services-list">  Online helpDesk support free <a href="tel:+2348161649497">call now </a></li>
              </ul>
              <button class="btn-generic-2">Read more</button> 
            </p>
            
          </section>
          
           <!-- Feats and achievements -->
           <section class="feats">
            <h3>A<span class="text-color-separation">chievements</span> </h3>
            <hr>
            <ul>
              <li class="feats-list">COMPTIA N+</li>
              <li class="feats-list">FRONTEND FUNDAMENTALS (HTML, CSS AND JAVASCRIPT)</li>
              <li class="feats-list">PROGRAMMING IN MICROSOFT C#</li>
              <li class="feats-list">CCNA</li>
            </ul>
          </section>


        
          
          
                      
           <!-- Driving Force -->
          <section class="driving-force">
            
            <p class="fav-sayings">

              "  Believe in Yourself. <span >NEVER</span> give up and NEVER settle.  " 
            </p>
          </section>

        </div>
      </section>
    </div>
    
  



    <!-- SCRIPT FOR JS AND POPPER.... Do not write any code afer this script -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- ======================================================= -->
</body>

</html>