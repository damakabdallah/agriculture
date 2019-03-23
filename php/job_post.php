<?php

include "connect.php";

$annoceTitre = $_POST["annonce"];
$description = $_POST["description"];
$ville = $_POST["Ville"];
$venOUlou = $_POST["venOUlou"];
//bloc de la categorie
$categorie = $_POST["annonce-type"];
$categorie_to_DB = "";
for ($i = 0; $i < count($categorie); $i++) {
    $categorie_to_DB .= $categorie[$i] . "+";
}
$categorie_to_DB = rtrim($categorie_to_DB, '+');
//fin bloc

$prix = $_POST["prix"];
$image = $_FILES["images"];
$img1 = UploadImage($image, 0);

if(isset($image['name'][1]))
{
$img2 = UploadImage($image, 1);
}
else
{$img2='';}


if(isset($image['name'][2]))
{
$img3 = UploadImage($image, 2);
}
else
{$img3='';}
if(isset($image['name'][3]))
{
$img4 = UploadImage($image, 3);
}
else
{$img4='';}
if(isset($image['name'][4]))
{
$img5 = UploadImage($image, 4);
}
else
{$img5='';}
$nom=$_GET["nom"]." ".$_GET["prenom"];
$addToDB = "INSERT INTO annonce (
                                 titre_de_annonce,
                                 description,
                                 ville,
                                 categorie,
                                 prix,
                                 `image 1`,
                                 `image 2`,
                                 `image 3`,
                                 `image 4`,
                                 `image 5`,
							      nom,
                                  venOUlou
                                  ) VALUES (
                                                    '$annoceTitre',
                                                    '$description',
                                                    '$ville',
                                                    '$categorie_to_DB',
                                                    '$prix',
                                                    '$img1',
                                                    '$img2',
                                                    '$img3',
                                                    '$img4',
                                                    '$img5',
													'$nom',
                                                    '$venOUlou'     
                                            )";
mysqli_query($connect, $addToDB);
header("Location:../index.php?nom=".$_GET['nom']."&prenom=".$_GET['prenom']."");

function UploadImage(array $img, int $i)
{
    // all information about the image that uploaded
    $fileName = $img['name'][$i];
    $fileTmpName = $img['tmp_name'][$i];
    $fileDestination = '../images/' . $fileName;
    move_uploaded_file($fileTmpName, $fileDestination);

    return $fileName;
}


