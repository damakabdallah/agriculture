<!DOCTYPE html>
<html lang="en">

<head>
    <title>projet Atast</title>


</head>

<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <header class="site-navbar py-1" role="banner">

        <div class="container">
            <div class="row align-items-center">
                <?php require("weneed.php");
                if (isset ($_GET["prenom"]) && isset($_GET["nom"])) {
                    echo "<div class='col-6 col-xl-2'><h1 class='mb-0'><a class='text-black h2 mb-0' href='index.php?nom=" . $_GET['nom'] . "&prenom=" . $_GET['prenom'] . "' >Job<strong>start</strong></a></h1></div>";
                } else {
                    echo "<div class='col-6 col-xl-2'> <h1 class='mb-0'><a class='text-black h2 mb-0' href='index.php'>Job<strong>start</strong></a></h1></div>";
                }
                ?>
                <div class="col-10 col-xl-10 d-none d-xl-block">
                    <nav class="site-navigation text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="has-children">
                                <a href="category.php">Category</a>
                                <ul class="dropdown">
                                    <li><a href="#">Full Time</a></li>
                                    <li><a href="#"></a></li>
                                    /*categorie head*/
                                </ul>
                            </li>
                            <?php
                            if (isset ($_GET["prenom"]) && isset($_GET["nom"]))
                                echo "<li><a href='about.php?nom=" . $_GET["nom"] . "&prenom=" . $_GET["prenom"] . "'>About</a></li>";
                            else
                                echo "<li><a href='about.php'>About</a></li>";

                            ?>
                            <?php
                            if (isset ($_GET["prenom"]) && isset($_GET["nom"]))
                                echo "<li><a href='contact.php?nom=" . $_GET["nom"] . "&prenom=" . $_GET["prenom"] . "'>Contact</a></li>";
                            else
                                echo "<li><a href='contact.php'>Contact</a></li>";

                            ?>


                            <li><a id="post annonce" href=""><span class="rounded bg-primary py-2 px-3 text-white"><span
                                                class="h5 mr-2">+</span> Post annonce</span></a></li>
                            <li><a href="new-post.php"><span class="rounded bg-primary py-2 px-3 text-white"><span
                                                class="h5 mr-2"></span> Corporation</span></a></li>
                            <?php
                            require("weneed.php");
                            if (isset ($_GET["prenom"]) && isset($_GET["nom"])) {

                                echo "<i class='fas fa-user'></i>  <li class='has-children'>" . $_GET['prenom'] . "  " . $_GET["nom"] . "<ul class='dropdown'><li><a href='startbootstrap-simple-sidebar-gh-pages/index.html'><span class='rounded bg-primary py-2 px-3 text-white'><span class='h5 mr-2'></span> Account</span></a></li><li> <a href='index.php'><span id='sign out' class='rounded bg-danger py-2 px-3 text-white'><span class='h5 mr-2'></span> Sign Out</span></a></li></ul></li>";
                            } else {


                                echo "<li><a href='Login_v4/login.php'><span class='rounded bg-primary py-2 px-3 text-white'><span class='h5 mr-2'></span> login</span></a></li><li><a href='inscription/inscrit.php'><span class='rounded bg-primary py-2 px-3 text-white'><span class='h5 mr-2'></span> Sign In</span></a></li></ul></nav> </div>";
                            }
                            ?>
                            <div class="col-6 col-xl-2 text-right d-block">

                                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"
                                     style="position: relative; top: 3px;"><a href="#"
                                                                              class="site-menu-toggle js-menu-toggle text-black"><span
                                                class="icon-menu h3"></span></a></div>

                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row row-custom align-items-center">
                <div class="col-md-10">
                    <h1 class="mb-2 text-black w-75"><span class="font-weight-bold">Largest Job</span> Site On The Net
                    </h1>
                    <div class="job-search">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job"
                                   role="tab" aria-controls="pills-job" aria-selected="true">Affaire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill"
                                   href="#pills-candidate" role="tab" aria-controls="pills-candidate"
                                   aria-selected="false">Corporation</a>
                            </li>
                        </ul>
                        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-job" role="tabpanel"
                                 aria-labelledby="pills-job-tab">
                                <?php if (isset ($_GET['nom']) OR isset ($_GET['prenom'])) {
                                    $nom = $_GET['nom'];
                                    $prenom = $_GET['prenom'];
                                    echo "<form method='POST' id='form' class='p-5 bg-white' enctype='multipart/form-data' action='php/rechercher.php?nom=$nom&prenom=$prenom' >";
                                } else {
                                    echo "<form method='POST' id='form' class='p-5 bg-white' enctype='multipart/form-data' action='php/rechercher.php' >";
                                }
                                ?>
                                <div class="row">

                                    <div class="col-md-8 col-lg-3 mb-3 mb-lg-0">
                                        <div class="select-wrap">
                                            <span class="icon-keyboard_arrow_down arrow-down"></span>
                                            <select name="cat" id="" class="form-control" required>
                                                <option selected value  disabled>Category</option>
                                                <option>Terrain</option>
                                                <option>Materiaux</option>
                                                <option> Engrais</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="select-wrap">
                                            <span class="icon-keyboard_arrow_down arrow-down"></span>
                                            <select name="localisation" id="" class="form-control" required>
                                                <option selected value disabled >Localisation</option>
                                                <option value="ariana">Ariana</option>
                                                <option value="ben_arous">Ben Arous</option>
                                                <option value="beja">Béja</option>
                                                <option value="gabes">Gabés</option>
                                                <option value="gafsa">Gafsa</option>
                                                <option value="jendouba">Jandouba</option>
                                                <option value="kairouan">Kairouan</option>
                                                <option value="kebili">Kébili</option>
                                                <option value="manouba">Manouba</option>
                                                <option value="kef">Kef</option>
                                                <option value="mahdia">Mahdia</option>
                                                <option value="monastir">Monastir</option>
                                                <option value="mednine">Médenine</option>
                                                <option value="nabeul">Nabeul</option>
                                                <option value="sfax">Sfax</option>
                                                <option value="sidi-bouzid">Sidi Bouzid</option>
                                                <option value="siliana">Siliana</option>
                                                <option value="sousse">Sousse</option>
                                                <option value="tataouine">Tataouine</option>
                                                <option value="tunis">Tunis</option>
                                                <option value="tozeur">Tozeur</option>
                                                <option value="zaghouan">Zaghouan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-candidate" role="tabpanel"
                                 aria-labelledby="pills-candidate-tab">


                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                            <input type="text" class="form-control" placeholder="eg. Carl Smith">
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                            <div class="select-wrap">
                                                <span class="icon-keyboard_arrow_down arrow-down"></span>
                                                <select name="Localisation" id="" class="form-control">
                                                    <option value="" selected disabled hidden>Localisation</option>
                                                    <option value="ariana">Ariana</option>
                                                    <option value="ben_arous">Ben Arous</option>
                                                    <option value="beja">Béja</option>
                                                    <option value="gabes">Gabés</option>
                                                    <option value="gafsa">Gafsa</option>
                                                    <option value="jendouba">Jandouba</option>
                                                    <option value="kairouan">Kairouan</option>
                                                    <option value="kebili">Kébili</option>
                                                    <option value="manouba">Manouba</option>
                                                    <option value="kef">Kef</option>
                                                    <option value="mahdia">Mahdia</option>
                                                    <option value="monastir">Monastir</option>
                                                    <option value="mednine">Médenine</option>
                                                    <option value="nabeul">Nabeul</option>
                                                    <option value="sfax">Sfax</option>
                                                    <option value="sidi-bouzid">Sidi Bouzid</option>
                                                    <option value="siliana">Siliana</option>
                                                    <option value="sousse">Sousse</option>
                                                    <option value="tataouine">Tataouine</option>
                                                    <option value="tunis">Tunis</option>
                                                    <option value="tozeur">Tozeur</option>
                                                    <option value="zaghouan">Zaghouan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                            <input type="submit" class="btn btn-primary btn-block" value="Search"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-start text-left mb-5">
                <div class="col-md-9" data-aos="fade">
                    <h2 class="font-weight-bold text-black">Recent Jobs</h2>
                </div>
                <div class="col-md-3" data-aos="fade" data-aos-delay="200">
                    <a href="" id="post annonce" class="btn btn-primary py-3 btn-block"><span class="h5">+</span> Post
                        annonce</a>
                </div>
            </div>
            <div class="row hosting">

                <div class="col-md-12">

                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                        <div class='mb-4 mb-md-0 mr-5'>


                            <?php
                            require 'php/connect.php';
                            $aad = mysqli_query($connect, 'select id from annonce');
                            $rowcount = mysqli_num_rows($aad);
                            $rowSQL = mysqli_query($connect, "SELECT MAX( id ) AS max FROM annonce;");
                            $row = mysqli_fetch_array($rowSQL);
                            $largestNumber = $row['max'];


                            echo "<table><tr>";
                            $j = 0;
                            for ($i = $largestNumber; $i > $largestNumber - $rowcount; $i--) {


                                echo "<td> <div class='col-md-12'>  <div class='job-post-item bg-white p-4 d-block d-md-flex align-items-center'>   
							<div class='mb-3 mb-md-10 mr-10'>";


                                $query = mysqli_query($connect, "SELECT * FROM  annonce ORDER BY id='$i' DESC limit 1;");
                                $row = mysqli_fetch_array($query);
                                echo '<img src="images/' . $row['image 1'] . '" alt="" width="250" height="250">';
                                echo '<div class="job-post-item-header d-flex align-items-center"><h2 class="mr-3 text-black h4">' . $row["titre_de_annonce"] . '</h2><div class="badge-wrap"></div></div>';
                                echo " <div class='job-post-item-body d-block d-md-flex'>
                                        <div class='mr-3'><span class='fl-bigmug-line-portfolio23'></span>
                                            <a href='#'>" . $row['categorie'] . "</a></div>
                                            <div><span class='fl-bigmug-line-big104'></span> <span>" . $row["ville"] . "</span>
                                            </div>
                                        </div>
                                        
                                        </div>
										</div>
										</div></td>";
                                $j++;
                                if ($j%3==0) {
                                    echo "</tr><tr>";
                                }
                            }


                            echo "</tr></table>";


                            ?>

                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>


    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-6" data-aos="fade">
                    <h2 class="text-black">Why Job<strong>start</strong></h2>
                </div>
            </div>

            <div class="row hosting">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

                    <div class="unit-3 h-100 bg-white">

                        <div class="d-flex align-items-center mb-3 unit-3-heading">
                            <div class="unit-3-icon-wrap mr-4">
                                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px"
                                     height="68px">
                                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt"
                                          stroke-linejoin="miter" fill="none"
                                          d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                                </svg>
                                <span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                            </div>
                            <h2 class="h5">Search Millions of Jobs</h2>
                        </div>
                        <div class="unit-3-body">
                            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a
                                similique perferendis dolorem eos.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">

                    <div class="unit-3 h-100 bg-white">

                        <div class="d-flex align-items-center mb-3 unit-3-heading">
                            <div class="unit-3-icon-wrap mr-4">
                                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px"
                                     height="68px">
                                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt"
                                          stroke-linejoin="miter" fill="none"
                                          d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                                </svg>
                                <span class="unit-3-icon icon fl-bigmug-line-big104"></span>
                            </div>
                            <h2 class="h5">Location Search</h2>
                        </div>
                        <div class="unit-3-body">
                            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a
                                similique perferendis dolorem eos.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">

                    <div class="unit-3 h-100 bg-white">

                        <div class="d-flex align-items-center mb-3 unit-3-heading">
                            <div class="unit-3-icon-wrap mr-4">
                                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px"
                                     height="68px">
                                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt"
                                          stroke-linejoin="miter" fill="none"
                                          d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                                </svg>
                                <span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
                            </div>
                            <h2 class="h5">Top Careers</h2>
                        </div>
                        <div class="unit-3-body">
                            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a
                                similique perferendis dolorem eos.</p>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>


    <footer class="site-footer " style="width:100%">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-9 col-md-6 col-lg-3 mb-5 mb-lg-0">
                                <h3 class="footer-heading mb-6">For Candidates</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Find Jobs</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Search Jobs</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                                <h3 class="footer-heading mb-4">For Employers</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Employer Account</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Find Candidates</a></li>
                                    <li><a href="#">Terms &amp; Policies</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                                <h3 class="footer-heading mb-4">Archives</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">January 2018</a></li>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">March 2018</a></li>
                                    <li><a href="#">April 2018</a></li>
                                    <li><a href="#">May 2018</a></li>
                                    <li><a href="#">June 2918</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                                <h3 class="footer-heading mb-4">Company</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Terms &amp; Policies</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
<script src="js/test-login.js"></script>

</body>

</html>
