<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script>

        function verif(n) {
            if (n.value.length > 5) {
                n.getElementById('hh').innerHTML = "<i class='fa fa-check ' name='hh' ></i>";

            }

        }

        /*function verifForm(f)
        {


           if(f.name.innerHTML=='' || f.password.innerHTML==''||f.name.innerHTML.length<=5)

           {alert("Veuillez remplir correctement tous les champs");}



        };*/
    </script>
</head>
<body>
<form method="POST" onsubmit="verifForm(this)" action="in.php">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required" name="nom">
                        <span class="label-input100">Username</span>
                        <table>
                            <tr>
                                <td><input class="input100 " type="text" name="name" placeholder="Type your username"
                                           onblur="verif(this)">
                                </td>
                                <td>
                                    <div name="hh"><i class="fa fa-times " name="hh"></i></div>
                                </td>
                            </tr>
                        </table>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required" name="mdp">
                        <span class="label-input100">Password</span>
                        <table>
                            <tr>
                                <td>
                                    <input class="input100" type="password" name="password"
                                           placeholder="Type your password">
                                </td>
                                <td><i class="fa fa-check "></i></td>
                            </tr>
                        </table>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name='submit'>
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="txt1 text-center p-t-20 p-b-10">
						<span>
							<h2><b>Or </b></h2>
						</span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button class="login100-form-btn" name='Sign'>

                                Sign Up

                            </button>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

</form>
<div id="dropDownSelect1"></div>


</body>
</html>