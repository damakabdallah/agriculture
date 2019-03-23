<?php
$conn = new PDO('mysql:host=localhost;dbname=b-tech', 'root', '');
require  "../php/connect.php";

if (isset($_POST['submit'])) {
    if ($_POST['name'] || $_POST['password']) {
        /*$reppseudo = $bdd->prepare('SELECT pseudo FROM validation WHERE username = '$_POST['username']'');
          $reppseudo->execute(array($pseudo));
          $pseudoexist = $reppseudo->rowcount();*/
        $user = $_POST["name"];
        $password = $_POST["password"];
        $query = mysqli_query($connect,"select * from registre where  user='$user'and password='$password'");
        if (mysqli_num_rows($query)>0) {
            $row =mysqli_fetch_array($query,MYSQLI_NUM);
            print_r($row);
            $nomETprenom = explode(" ",$row[1]);
            $nom =$nomETprenom[1];
            $prenom = $nomETprenom[0];
           // $header = explode(" ",$query[0]);
           // print_r($header[0]);
            header('Location: ../index.php?nom='.$nom.'&prenom='.$prenom);
        } else {
            header('Location:login.php');
        }
       // $pdostat = $conn->prepare('INSERT INTO session (user,password) VALUES ( :nom, :pass)  ');
        //$pdostat->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);
        //$pdostat->bindValue(':pass', $_POST['password'], PDO::PARAM_STR);
        /*if (preg_match('#[A-Za-z0-9]{5}#', $_POST['password'])) {
            $ok = $pdostat->execute();

            if ($ok) {

                header('Location: ../index.php?nom=mohamed&prenom=bahloul');
            } else {
                echo "<script>alert(\"echec de l insertion\")</script>";
            }
        } else {
            header('Location:login.php');

        }*/


    } else {
        header('Location:login.php');
    }

}
if (isset($_POST['Sign']))
    header('Location: ..\inscription\inscrit.php');
