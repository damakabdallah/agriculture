<?php
$conn = new PDO('mysql:host=localhost;dbname=b-tech', 'root', '');
require "../php/connect.php";

if (isset($_POST['submit'])) {
    if ($_POST['name'] || $_POST['password'] || $_POST['email'] || $_POST['re_password']) {
        if ($_POST['password'] == $_POST['re_password']) {
            /*$stmt = $conn->prepare("SELECT email FROM registre WHERE user = ".$_POST['email'].";");
            $stmt->execute();
            $user = $stmt->fetch();*/
            $email = $_POST["email"];
            $query = mysqli_query($connect,"select * from registre where  email='$email'");

            if (mysqli_num_rows($query) > 0) {
                echo "user exist";
                header('Location: inscrit.php');
            } else {
                $pdostat = $conn->prepare('INSERT INTO registre (user,email,password) VALUES (:nom, :email , :pass)');
                $pdostat->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);
                $pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                $pdostat->bindValue(':pass', $_POST['password'], PDO::PARAM_STR);
                $ok = $pdostat->execute();

                if ($ok) {
                    echo "<script>alert('le contact a ete ajoute dans la bd')</script>";
                    header('Location:..\Login_v4\login.php');
                } else {
                    echo "<script>alert('echec de l insertion')</script>";
                }
            }
        } else {
            echo "<script>alert('mdp incorrect')</script>";
        }
    } else {
        echo "<script>alert('veuille saisier tout les chapms')</script>";
    }
}

