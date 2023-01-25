<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Acidus</title>
  </head>
  <body>
    
  <header class="header p-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
            <button class="navbar-toggler border-0 bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="bi bi-list"></i>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-uppercase">
                  <li class="nav-item">
                      <a class="nav-link ml-3" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link ml-3" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link ml-3" href="work.php">Work</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link ml-3" href="contact.php">Contact</a>
                  </li>
                </ul>
            </div>
        </nav>
    </div>
  </header>

<script>

    var myFun= function (){
        const items = document.querySelectorAll('.header .navbar .nav-item .nav-link');
        const W__href = window.location.href;

        items.forEach(e=>{

        const links = e.href;

        if(W__href === links) {
            e.classList.add("active");
        }
        else {
            e.classList.remove("active");
        }
        });
    };

    myFun();

</script>