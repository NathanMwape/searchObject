<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">  
  <!-- style  -->
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
      <title>Contact</title>
</head>

<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
      <h2 class="heading-section">Website menu #06</h2>
    </div>
  </div>
</div>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark headroom" >
    <div class="container">
      <a class="navbar-brand" href="#"><span>Objet</span>Trouve</a>
      <form action="" class="searchform order-sm-start order-lg-last"></form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorie</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Apropos</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
          <li><a class="btn btn-primary" href="connexion1.php">SIGN IN / SIGN UP</a></li>
      </div>
    </div>
  </nav>
  
  </header><!-- End Header -->

  <main id="main">

    <section id="contact" class="contact">
        <div class="container">
          <div class="row">
              <ol class="breadcrumb" id="head_contact">
                <li><a href="index.html">Home</a>/</li>
                <li class="active">Contact</li>
              </ol>
          </div>
          
				<header class="page-header" >
					<h1 class="page-title">Information de contact</h1>
				</header>
        <hr>

        <div class="row mt-5 justify-content-center " data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-floating">
                  <input type="text" name="name" class="form-control" id="name" required>
                  <label class="form-label"> Your Name</label>
                </div>
                <div class="col-md-6 mt-3 mt-md-0 form-floating">
                  <input type="email" class="form-control" name="email" id="email" required>
                  <label class="form-label">Your Email</label>
                </div>
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="subject" id="subject" required>
                <label class="form-label">Subject</label>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"  required></textarea>
              </div>
              <div class="my-3">
              </div>
              <div class="text-center"><input value="Send message" class="btn btn-warning"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'footer.php' ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="css/Jquery3.6.0 .min.js"></script>

</body>

</html>