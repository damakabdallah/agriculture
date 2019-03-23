<!DOCTYPE html>
<html lang="en">

<head>
    <title>projet Atast</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>

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

    <div class="s007">
        <?php if (isset ($_GET['nom']) OR isset ($_GET['prenom'])) {
            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            echo "<form method='POST' id='form' class='p-5 bg-white' enctype='multipart/form-data' action='php/rechercher.php?nom=$nom&prenom=$prenom' >";
        } else {
            echo "<form method='POST' id='form' class='p-5 bg-white' enctype='multipart/form-data' action='php/rechercher.php' >";
        }
        ?>
        <div class="inner-form">
            <div class="basic-search">
                <div class="input-field">
                    <div class="icon-wrap">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="20" height="20" viewBox="0 0 20 20">
                            <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                        </svg>
                    </div>
                    <input id="search" type="text" placeholder="Search..."/>

                </div>
            </div>
            <div class="advance-search">
                <span class="desc">Advanced Search</span>
                <div class="row">

                    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                        <input type="text" class="form-control" name="annonce nom" placeholder="Titre de l'annonce ">
                    </div>

                    <div class="input-field">
                        <div class="input-select">
                            <select name="cat" class="form-control" required>
                                <option disabled selected value>Category</option>
                                <option value="All" style="color:#00b000">ALL</option>
                                <option value="engrais"> Engrais</option>
                                <option value="terrain">Terrain</option>
                                <option value="materiaux">Materiaux</option>
                            </select>

                        </div>
                    </div>

                    <div class="input-field">
                        <div class="input-select">
                            <select name="localisation" id="" class="form-control" required>
                                <option disabled selected value>Localisation</option>
                                <option value="All" style="color:#00b000">ALL</option>
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
                </div>
                <div class="row second">

                    <div class="col-md-3 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" name="prixMin" placeholder="prix minimale"
                               pattern="[0-9]{3,}" title="3 or more numbers">
                    </div>


                    <div class="col-md-3 col-lg-3 mb-2 ">
                        <input type="text" class="form-control" name="prixMax" placeholder="prix maximale"
                               pattern="[0-9]{3,}" title="3 or more numbers">
                    </div>
                    <div class="input-field">
                        <div class="input-select">
                            <select name="venOUlou" id="" class="form-control" required>
                                <option disabled selected value>vendre&louer</option>
                                <option style="color:#00b000">ALL</option>
                                <option>Vendre</option>
                                <option>Louer</option>


                            </select>

                        </div>
                    </div>


                </div>
                <div class="row third">
                    <div class="input-field">
                        <table>
                            <tr>
                                <td>
                                    <input class="btn-search" type="submit" value="Search"/></td>
                                <td>

                                    <button class="btn-delete" id="delete">Delete</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-start text-left mb-5">
                <div class="col-md-9" data-aos="fade">
                    <h2 class="font-weight-bold text-black">Recent Jobs</h2>
                </div>
            </div>
            <div class="row hosting">

                <div class="col-md-12">

                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                        <div class='mb-4 mb-md-0 mr-5'>


                            <?php
                            require 'php/connect.php';

                            $loc = $_GET["loc"];
                            $category = $_GET["cat"];
                            $VenOUlou = $_GET["venOUlou"];
                            $title = $_GET["postName"];
                            $prixMin = $_GET["prixMin"];
                            $prixMax = $_GET["prixMax"];
                            echo "<table><tr>";
                            $j = 0;


                            $query = mysqli_query($connect, "SELECT * FROM  annonce WHERE ville='$loc' and categorie='$category' 
                         and  venOUlou='$VenOUlou' and  (titre_de_annonce='$title'and $title is not null) 
                         and  (prix between '$prixMin' and '$prixMax' and  $prixMin is not  null and $prixMax is not null );");


                            $rowcount = mysqli_num_rows($query);
                            if ($rowcount == 0) {
                                echo "<h2 align='center' style='color:red'>There is no annonce found </h2>";
                            } else {
                                for ($i = 0; $i < $rowcount; $i++) {


                                    echo "<td> <div class='col-md-12'>  <div class='job-post-item bg-white p-4 d-block d-md-flex align-items-center'>   
							<div class='mb-3 mb-md-10 mr-10'>";

                                    // $nom = $_GET["nom"] . $_GET["prenom"];

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
                                    if ($j % 3 == 0) {
                                        echo "</tr><tr>";
                                    }
                                }


                                echo "</tr></table>";
                            }


                            ?>

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
    <script src="js/extention/choices.js"></script>
    <script>
        const customSelects = document.querySelectorAll("select");
        const deleteBtn = document.getElementById('delete');
        //const choices = new Choices('select',
        //  {
        //   searchEnabled: false,
        //    removeItemButton: true,
        //    itemSelectText: '',
        // });
        for (let i = 0; i < customSelects.length; i++) {
            customSelects[i].addEventListener('addItem', function (event) {
                if (event.detail.value) {
                    let parent = this.parentNode.parentNode;
                    parent.classList.add('valid');
                    parent.classList.remove('invalid');
                } else {
                    let parent = this.parentNode.parentNode;
                    parent.classList.add('invalid');
                    parent.classList.remove('valid');
                }
            }, false);
        }
        deleteBtn.addEventListener("click", function (e) {
            e.preventDefault()
            const deleteAll = document.querySelectorAll('.choices__button');
            for (let i = 0; i < deleteAll.length; i++) {
                deleteAll[i].click();
            }
        });

    </script>
</body>

</html>
