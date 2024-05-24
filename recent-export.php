<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recent</title>
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/dropdown.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navigation" id="navbarNavAltMarkup">
        <div class="navbar-nav"> <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="countries.php">Countries</a>
          <a class="nav-link" href="process.php">Process</a>
          <a class="nav-link" href="news.php">news</a>
          <a class="nav-link" href="recent-export.php">Recent </a>

          <div class="dropdown nav-link">
            <button class="dropbtn">How to Buy</button>
            <div class="dropdown-content">
              <a class="nav-link" href="howtobuy.php">How To Buy </a>
              <a class="nav-link" href="paybypaypal.php">Pay by Paypal </a>
              <a class="nav-link" href="Faq.html">FAQ </a>
              <a class="nav-link" href="Bank details.html">Bank Details </a>

            </div>
          </div>


        </div>

      </div>
      <a href="contactus.php"> <button class="nav-button">contact us</button></a>
    </div>
  </nav>
  <header class="main-header">
    <img class="head-img" src="./picture/recent-export-background.jpg" />
    <div class="top-center">
      <p>Recent export </p>
    </div>
  </header>
  <div>
    <div class="exporting">
      <h1 style="font-size: 60px;"> Recently Exported Vehicles </h1>
      <img class="imageline" src="./images/Line.png">
      <p class="para" style="font-size: 22px;">
        Browse through this gallery showing a selection of <br>
        vehicles we have exported recently, we have <br>
        exported thousands of cars over the years, feel free<br>
        to contact us, as we can source any vehicle for you. </p>
    </div>
  </div>
  <?php
  include "config.php";
  session_start();
  $mysql = "SELECT * from car";
  $result = mysqli_query($conn, $mysql);

  ?>
  <div class="">
    <div class="container-fluid">
      <div class="row mt-4 pb-4 pt-2 slider">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
          $arr = explode(",", $row['car_image']);
        ?>
          <div class="col-5 m-1">
            <div class="card card-block card-5">
              <a href="contactus.php">
                <img src="uploads/<?php echo $arr[0] ?>" class="card-img-top" alt="...">
              </a>
              <p class="centered">
                <b class="card-title"><?php echo $row["car_name"] ?></b>
              </p>

            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </div>


  <footer>
    <div class="zindex">
      <div class="one">

        <h4><strong>Experienced Service </strong></h4>
        <div class="last-three"> <img src="./images/usp-icon-star.svg" class="imagecenter">&nbsp;&nbsp;&nbsp;
          <p> Experienced service with over two<br> decades of experience
            combined,<br> our team can deal with your every<br> need.</p>
        </div>
      </div>
      <div class="two">
        <h4><strong>Global Vehicle Export</strong></h4>
        <div class="last-three"><img src="./images/usp-icon-star.svg" class="imagecenter">&nbsp;&nbsp;&nbsp;
          <p> Global vehicle export – we <br>have trusted logistical
            <br>partners to serve your needs<br> internationally.
          </p>
        </div>
      </div>
      <div class="three">
        <h4><strong>Reputable Source </strong> </h4>
        <div class="last-three"><img class="imagecenter" src="./images/usp-icon-star.svg">&nbsp;&nbsp;&nbsp;
          <p>Reputable source – we have<br> satisfied customers
            globally<br> that we have worked with for<br> a decade.</p>
        </div>
      </div>
    </div>

    <div class=footerwork>
      <img src="./images/logo.png" width="300" height="300">
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>