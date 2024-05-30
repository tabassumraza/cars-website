<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact us</title>
    <link href="css/style-contact.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/dropdown.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        /* footer work */
        footer {
            width: 100%;
            height: 700px;
            background-color: rgb(6, 2, 56);
        }

        .zindex {
            width: 50;
            height: 100px;
            background-color: rgb(255, 255, 255);
            display: flex;
            z-index: 10;

        }

        .zindex h4 {
            text-align: center;
        }

        .one,
        .two,
        .three {
            width: 30%;
            height: 150px;
            margin: auto;
            margin-bottom: 10%;
            background-position: left top;
            background-repeat: repeat;
            border-radius: 10px;
            position: relative;
            box-shadow: 4px 4px 4px rgb(151, 149, 149);
        }

        .imagecenter {
            width: 60px;
            height: 60px;

        }

        .last-three {
            display: flex;
            margin-left: 4%;
            /* background-color: #b65050; */
        }

        .one {
            background-color: rgb(255, 255, 255);

        }

        .two {
            background-color: rgb(255, 255, 255);
        }

        .three {
            background-color: rgb(255, 255, 255);
        }

        .footerwork {
            align-items: center;
            justify-content: left;
            display: flex;
            padding-top: 50pxpx;

        }
    </style>
</head>

<body style="background-color: aliceblue;">
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

    <div class="contact-main">

        <div class="row ">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="con-head-div">
                    <h3 class="contact-heading">
                        Contact Us
                    </h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="deetentry">
                        <div class="imgWrapp">
                            <img src="./images/red-phone-icon.svg" alt="phone icon">
                        </div>
                        <div class="contentEn">
                            <span>Call today</span><br>
                            <a href="tel:+44 7405 336562">+44 7405 336562 </a>
                        </div>
                    </div>
                    <div class="deetentry">
                        <div class="imgWrapp">
                            <img src="./images/red-mail-icon.svg" alt="mail icon">
                        </div>
                        <div class="contentEn">
                            <span>Email Us</span><br>
                            <a href="mailto:info@mmsales.co.uk">
                                info@mmsales.co.uk </a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center p-0 mt-3 mb-2">
                    <div class="card mt-3 mb-3">
                        <form id="msform">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Your Enquiry</h2>
                                            <p class="parafs-title">Thank you very much for choosing us to assist you
                                                with your vehicle export enquiry, please enter your contact details
                                                below and one of our friendly Export Consultants will be in touch with
                                                you soon.</p>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div>
                                        <select class="countrydropdown" aria-required="true" aria-invalid="false" name="menu-country-dropdown">
                                            <option value="">To which country do you want the vehicle to be shipped?
                                            </option>
                                            <option value="UK">UK</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Malayasia">Malayasia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Singapore">Singapore</option>
                                        </select>

                                        <p class="paraStyleasOption">What brand are you interested in? (select below)
                                        </p>

                                        <p><span class="form-control-wrap" data-name="radio-brands">
                                                <span class="form-control-radio">
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Audi" checked="checked">
                                                        <span class="list-item-label">Audi</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Aston Martin">
                                                        <span class="list-item-label">Aston Martin</span>
                                                    </span><span class="list-item"><input type="radio" name="radio-brands" value="Bentley">
                                                        <span class="list-item-label">Bentley</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="BMW">
                                                        <span class="list-item-label">BMW</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Ferrari">
                                                        <span class="list-item-label">Ferrari</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Honda">
                                                        <span class="list-item-label">Honda</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Jaguar">
                                                        <span class="list-item-label">Jaguar</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Lamborghini">
                                                        <span class="list-item-label">Lamborghini</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Lexus">
                                                        <span class="list-item-label">Lexus</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Mercedes Benz">
                                                        <span class="list-item-label">Mercedes Benz</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Mclaren">
                                                        <span class="list-item-label">Mclaren</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Range Rover">
                                                        <span class="list-item-label">Range Rover</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Rolls Royce">
                                                        <span class="list-item-label">Rolls Royce</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Toyota">
                                                        <span class="list-item-label">Toyota</span>
                                                    </span>
                                                    <span class="list-item"><input type="radio" name="radio-brands" value="Volvo">
                                                        <span class="list-item-label">Volvo</span>
                                                    </span>
                                                    <span class="list-item last"><input type="radio" name="radio-brands" value="Other">
                                                        <span class="list-item-label">Other</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                    </div> <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Personal Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div> <label class="fieldlabels">First Name: *</label>
                                    <input type="text" name="fname" placeholder="First Name" />
                                    <label class="fieldlabels">Last Name: *</label>
                                    <input type="text" name="lname" placeholder="Last Name" />
                                    <label class="fieldlabels">Contact No.: *</label>
                                    <input type="text" name="phno" placeholder="Contact No." />
                                    <label class="fieldlabels">Alternate Contact No.: *</label>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                </div> <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Image Upload:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature
                                        Photo:</label> <input type="file" name="pic" accept="image/*">
                                </div> <input type="button" name="next" class="next action-button" value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="location">

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

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
</body>

</html>