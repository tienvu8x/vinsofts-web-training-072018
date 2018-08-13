<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- CSS Above -->
    <style>
        <?php echo file_get_contents("css/cssrun/above.min.css");
        ?>
    </style>

    <!-- CSS Below -->
    <link rel="stylesheet" href="css/cssrun/below.min.css">


    <title>Demo giao diện web</title>
</head>

<body>

    <header class="header-page">
        <div class="logo-slogan">
            <div class="logo">
                <img src="img/logo.png" alt="Logo Vinsofts">
            </div>
            <div class="slogan">
                <p>
                    You Success, our pride!</p>
            </div>
        </div>

        <div class="mini-menu">
            <button type="button" class="btn" data-toggle="collapse" data-target="#menu">Menu</button>
            <div class="collapse" id="menu">
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">Protfolio</a>
                <a class="dropdown-item" href="#">Services</a>
                <a class="dropdown-item" href="#">Gallery</a>
                <a class="dropdown-item" href="#">Contact</a>
                <a class="dropdown-item" href="#">Recruiment</a>
            </div>
        </div>

        <div class="contact-menu">
            <div class="contact">
                <ul>

                    <li>
                        <p>
                            <img src="img/icon-sk.png" alt="Skype Vinsofts">Skype:
                            <a href="">Vinsofts.com</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <img src="img/icon-gm.png" alt="Skype Vinsofts">Gmail:
                            <a href="">Contact@vinsofts.com</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <img src="img/icon-ct.png" alt="Skype Vinsofts">Contact:
                            <a href="">0988 988 988</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="menu">
                <div class="left-menu">
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Protfolio</a>
                        </li>
                        <li>
                            <a href="">Services</a>
                        </li>
                        <li>
                            <a href="">Gallery</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li>
                            <a href="">Recruiment</a>
                        </li>
                    </ul>
                </div>
                <div class="right-menu">
                    <ul>
                        <li>
                            <a href="">
                                <img src="img/icon-fb.png" alt="Facebok Vinsofts">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon-tw.png" alt="Facebok Vinsofts">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon-ln.png" alt="Facebok Vinsofts">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon-gg.png" alt="Facebok Vinsofts">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <aside class="slide">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" alt="Slide1">
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.jpg" alt="Slide2">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </aside>

    <section>

        <section class="our-services">
            <h2>OUR SERVICES</h2>
            <div class="content-our-services">
                <div class="item-content-our-services">
                    <img src="img/mobile-app.jpg" alt="">
                    <h5>Mobile App Development</h5>
                    <p>We are experts in mobile development industry for years. We have a team with 10 skilled developers that
                        have been in this field for at least 5 years so far.</p>
                    <button class="btn btn-primary">Explore more >></button>
                </div>
                <div class="item-content-our-services">
                    <img src="img/web-app.png" alt="">
                    <h5>Website Development</h5>
                    <p>We provide website development services. We are experts in below fields: WordPress development Magento
                        development
                    </p>
                    <button class="btn btn-primary">Explore more >></button>
                </div>
                <div class="item-content-our-services">
                    <img src="img/mobilyne.png" alt="">
                    <h5>Custom IT & Software Services</h5>
                    <p>We provide other IT and software services too.We have a team of experts in many fields of software development,coding
                        as well as IT related technologies.</p>
                    <button class="btn btn-primary">Explore more >></button>
                </div>
            </div>
        </section>

        <section class="our-clients">
            <h2>OUR CLIENTS</h2>
            <div class="content-our-clients">
                <div>
                    <img src="img/oc-1.png" alt="Our Clients">
                </div>
                <div>
                    <img src="img/oc-2.png" alt="Our Clients">
                </div>
                <div>
                    <img src="img/oc-3.png" alt="Our Clients">
                </div>
                <div>
                    <img src="img/oc-4.png" alt="Our Clients">
                </div>
                <div>
                    <img src="img/oc-5.png" alt="Our Clients">
                </div>
            </div>
        </section>

        <section class="our-articles">
            <h2>OUR ARTICLES</h2>
            <div class="content-our-articles">
                <div class="item-content-our-articles">
                    <img src="img/oa-1.jpg" alt="">
                    <h5>Vestibulum Ipsums Eros</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </div>
                <div class="item-content-our-articles">
                    <img src="img/oa-2.jpg" alt="">
                    <h5>Vestibulum Ipsums Eros</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </div>
                <div class="item-content-our-articles">
                    <img src="img/oa-3.jpg" alt="">
                    <h5>Mobile App Development</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam ....</p>
                </div>
            </div>
        </section>

    </section>

    <footer>

        <div class="item-footer">
            <h4>ABOUT VINSOFTS</h4>
            <img src="img/line.jpg" alt="line">
            <div>
                <p>Vinsofts Co., Ltd is software innovation and outsourcing company based in Hanoi, Vietnam. We provide top
                    quality outsourcing services to global clients from USA to Australia, from Japan to EU countries.</p>
            </div>
        </div>
        <div class="item-footer">
            <h4>CONTACT US</h4>
            <img src="img/line.jpg" alt="line">
            <dir>
                <form action="">
                    <div class="form-group">
                        <label>Name:</label>
                        <div class="firstlastname">
                            <input type="text" class="form-control" id="firstname" placeholder="First">
                            <input type="text" class="form-control" id="lastname" placeholder="Last">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea type="text" class="form-control" rows="3" id="comment"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </dir>
        </div>
        <div class="item-footer">
            <h4>OUR INFO</h4>
            <img src="img/line.jpg" alt="line">
            <img class="map-info" src="img/our-info.jpg" alt="Vị trí Vinsofts">
            <div>
                <p>Ki ốt số 3 Nhà N9, Khu 212, Học Viện Kỹ Thuật Quân Sự, Đường Tân Xuân, Phường Xuân Đỉnh, Quận Bắc Từ Liêm,
                    Hà Nội
                </p>
            </div>
        </div>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </footer>
</body>

</html>