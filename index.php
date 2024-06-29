<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>home</title>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/dropdown.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <style>
       @media (max-width: 768px) {
        .navbar {
          flex-direction: column;
          align-items: center;
        }

        .navbar button, .dropdown button {
          margin-bottom: 5px;
          width: 100%;
        }

        .content,
        .general-info {
          width: 100%;
          padding: 0;
          margin: 0;
        }

        .general-info {
          border-left: none;
          padding-top: 20px;
        }
      }

      .question {
        cursor: pointer;
        color: #d32f2f;
        margin: 10px 0;
        font-weight: bold;
      }

      .answer {
        display: none;
        margin-left: 20px;
      }

      .footer {
        background-color: #030241;
        margin-top: 5%;
      }

      .footer .box-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        color: #030241;
      }

      .footer .box {
        flex: 1 1 25%;
        max-width: 20%;
        background: #030241;
      }

      .footer .box h3 {
        color: #fff;
        font-size: 2.5rem;
        padding: 1rem 0;
      }

      .footer .box a {
        color: #fff;
        font-size: 2.5rem;
        padding: 1rem 0;
        display: block;
      }

      .footer .box a:hover {
        color: #ef4b3f;
        text-decoration: underline;
      }

      .footer .box img {
        margin-top: 1rem;
      }

      .footer .credit {
        text-align: center;
        padding: 1.5rem;
        margin-top: 1.5rem;
        padding-top: 2.5rem;
        font-size: 2rem;
        color: #fff;
        border-top: 0.1rem solid rgba(0, 0, 0, 0.2);
      }

      .footer .credit span {
        color: #ef4b3f;
      }

      .footer .box a {
        font-size: small;
      }

      .footer .box h3 {
        font-size: 1.8rem;
        margin: 0;
      }

      .footer .box a {
        padding: 0.5rem 0;
        text-decoration: none;
        transition: color 0.3s;
      }

      .footer .credit {
        font-size: 1.6rem;
        padding: 1.5rem;
        margin-top: 1.5rem;
        color: #555555;
        border-top: 0.1rem solid rgba(0, 0, 0, 0.2);
      }

      .footer .credit span {
        color: #ef4b3f;
      }
</style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./images/Autowingslogo.png" width="200" height="100"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navigation" id="navbarNavAltMarkup">
        <div class="navbar-nav"> <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="countries.php">Countries</a>
          <a class="nav-link" href="process.php">Process</a>
          <a class="nav-link" href="news.php">News</a>
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
      <a href="contactus.php"> <button class="nav-button">Contact Us</button></a>
    </div>
  </nav>
  <header class="main-header">
    <img class="head-img" src="./images/headl.jpg" />
    <div class="top-left">
      <h1><strong>Ready to Export</strong></h1>
      <p>

        AutoWings are a global car exporter, specialising in
        <br />exporting vehicles from the UK, to destinations
        <br />worldwide at competitive rates. Established in 2009,<br />
        the business has sourced and exported luxury vehicles<br />
        for exclusive customers globally.

      </p>

      <div class="second-section">
        <div class="second1">
          <h4><img src="./images/usp-icon-star.svg" width="30" height="30">Experienced Service</h4>
          <p>
            Experienced service with over two decades of experience combined, our
            team can deal with your every need.
          </p>
        </div>
        <div class="second2">
          <h4><img src="./images/usp-icon-star.svg" width="30" height="30">Global vehicle export</h4>
          <p>
            Global vehicle export - we have trusted logistical partners to serve
            your needs internationally.
          </p>
        </div>
        <div class="second3">
          <h4><img src="./images/usp-icon-star.svg" width="30" height="30">Reputable source</h4>
          <p>
            Reputable source - we have satisfied customers globally that we have
            worked with for a decade.
          </p>
        </div>
        <div class="second4">
          <h4><img src="./images/usp-icon-star.svg" width="30" height="30">Quality Cars</h4>
          <p>
            Quality cars - We specialise in  Quality 
            vehicles
          </p>
        </div>
      </div>
    </div>
  </header>

  <!-- 4 blockes in a row  recent exports -->
  <br> <br>
  <h1><strong> Our Recent Exports </strong></h1>
  <div class="container-fluid">
    <div class="row mt-4 pb-4 pt-2 slider">
      <div class="col-5">
        <div class="card card-block card-5">
          <img width="400" height="500" src="./images/node_page.jpg">
          <p class="centered">
            <b>Mercedes Benz AMG G63</b>
          </p>
        </div>
      </div>
      <div class="col-5">
        <div class="card card-block card-4">
          <img width="400" height="500" src="./images/nodepage_2.jpg">
          <p class="centered">
            <b>Lamborghini Urus</b>
          </p>
        </div>
      </div>
      <div class="col-5">
        <div class="card card-block card-3">
          <img width="400" height="500" src="./images/nodepage_3.jpg">
          <p class="centered">
            <b> Audi RS 3</b>
          </p>
        </div>
      </div>
      <div class="col-5">
        <div class="card card-block card-2">
          <img width="400" height="500" src="./images/nodepage_4.jpg">
          <p class="centered">
            <b> Honda Vezel</b>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- 3 blocks in a row for view all export -->
  <div class="third-section">
    <div class="third1"><img class="box-img" src="./images/nodenext1.jpg"></div>
    <div class="third2"><img class="box-img" src="./images/nodenext2.jpg"></div>
    <div class="third3"><img class="box-img" src="./images/nodenext3.jpg"></div>

  </div>

  <div class="forth">
    <div class="about-us">
      <h1><b><br />About us</b></h1>
      <p>
        AutoWings International Ltd has traded in various aspects of the Motor Industry <br />over
        the last 12 years. We have built an enviable reputation in <br />vehicle
        acquisition and sales to clients around the world.<br />
        <br />
        Our team have extensive knowledge of experience in the industry<br /> enabling us to offer
        expert advice on all areas of the international<br /> motor vehicle market.
        We specialize in the supply of new and used<br /> cars from all leading
        manufacturers and we have a well<br /> established association with
        suppliers, dealers and freight<br /> forwarding companies.
      </p>
    </div>
    <div class="testimonals">
      <h1><b><br />Testimonals</b></h1>
      <p>I will only use AutoWings for importing my vehicles. No one else.</p>
    </div>
  </div>

  <div class="fifth">
    <img class="getintouch" src="./images/get in touch1.jpg">
    <div class="centertextgetintouch">
      <h1><strong>Get In Touch With Us Today</strong></h1>
    </div>
    <div class="container">
      <button type="GetinTouch"><b>GET IN TOUCH</b></button>
    </div>
  </div>
  <h1 class="latest">Our Latest News</h1>

  <div class="sixth">
    <div class="box-1"><img class="box-img" src="./images/div4.jpg">
      <h5>Mercedes-Benz V-Class: Luxury, <br>Features, and Seating Options</h5>
      <p>In the world of luxury vehicles, the <br> Mercedes-Benz V-Class stands as a true <br> gem.<br></p>

      <button class="readmore"><b>READ MORE</b></button><br>
    </div>
    <div class="box-2"><img class="box-img" src="./images/3div.jpg">
      <h5>Mercedes Benz AMG S 63 E- Most<br> Powerful S Class of all time</h5>
      <p>Get ready for the new Mercedes AMG S 63E <br>which is the first hybrid S class to be introduced.<br></p><br>

      <button class="readmore"><b>READ MORE</b></button><br>
    </div>
    <div class="box-3"><img class="box-img" src="./images/5div.jpg">
      <h5>New Baby Land Rover Defender</h5>
      <p> Watch as we explore AI's predicitions of <br> what the 2027 baby Land Rover Defender<br> will look like!<br>
      </p><br>

      <button class="readmore"><b>READ MORE</b></button><br>
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

    

<div class="footer">
  <div class="box-container">
    <div class="box">
      <h3a class="navbar-brand" href="#"><img src="./images/Autowings logo1.png" width="300" height="300"/></a>>AutoWings Ltd</h3>
    </div>
    <div class="box">
      <h3>Contact Us</h3>
      <a href="index.php">Home</a>
      <a href="Faq.html">FAQ</a>
      <a href="recent-export.php">Recent Stocks</a>
    </div>
    <div class="box">
      <h3>Location</h3>
      <a href="#">Trinidad</a>
      <a href="#">Africa</a>
      <a href="#">Guyana</a>
      <a href="#">Jamaica</a>
      <a href="#">Bahamas</a>
      <a href="#">Barbados</a>
    </div>
    <div class="box">
      <h3>Contact Us</h3>
      <a href="#">info@autowingsint.com</a>
      <a href="#">+1234567890</a>
      <a href="#">UK</a>
    </div>
  </div>
  <div class="credit">
    <p>© 2023 AutoWings International Ltd. All rights reserved. | Designed by <span>AutoWings</span></p>
  </div>
</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>