<?php
require 'connect.php';
$loc = $_POST["localisation"];
$category = $_POST["cat"];
$venOUlou = $_POST["venOUlou"];
$postNom = $_POST["annonce nom"];
$prixMin = $_POST["prixMin"];
$prixMax = $_POST["prixMax"];
if (isset($_GET['nom']) and isset($_GET["prenom"])) {
    header("Location:../search.php?nom=" . $_GET['nom'] . "&prenom=" . $_GET['prenom'] . "&loc=" . $loc . "&cat=" .
        $category . "&venOUlou=" . $venOUlou . "&postName=" . $postNom . "&prixMin=" . $prixMin . "&prixMax=" . $prixMax);

} else {
    header("Location:../search.php?loc=" . $loc . "&cat=" . $category . "&venOUlou=" . $venOUlou .
        "&postName=" . $postNom . "&prixMin=" . $prixMin . "&prixMax=" . $prixMax);
}
