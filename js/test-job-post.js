//check if there is a checkbox checked
$(document).ready(function () {
    $("form").submit(function () {
        if ($('input:checkbox').filter(':checked').length < 1) {
            var NoCheckbox = document.getElementById("no checkbox");
            NoCheckbox.innerText = "cocher au moins une catégorie";
            NoCheckbox.style.color = "#ff0000";
            document.getElementById("catégorie").scrollIntoView();
            return false;
        }
    });
});


//check if the price is a number

prixID = document.getElementById("prix");
prixTest = false;
prixID.addEventListener("input", function () {
    notAPrix = document.getElementById("not a prix");
    if (isNaN(prixID.value)) {
        notAPrix.innerText = "ce n'est pas un numero";
        notAPrix.style.color = "#ff0000";
        prixTest = false;
    } else {
        document.getElementById("not a prix").innerText = "";
        prixTest = true;
    }

});


//check if there is a file uploaded
fileTest = false;

function testIfImage() {

    testIMG("image1", "image2", true);
    testIMG("image2", "image3", false);
    testIMG("image3", "image4", false);
    testIMG("image4", "image5", false);
    testIMG("image5", null, false);

}

function testIMG(img1, img2, required) {
    var myImage = document.getElementById(img1);
    var noImage = document.getElementById("NO image");

    if (myImage.files.length == 0) {
        if (required == true) {
            noImage.innerText = "télécharger une photo";
            noImage.style.color = "red";
            fileTest = false;
        }
    } else {
        var imgEXT = myImage.value.split('.').pop();
        if (imgEXT === "jpg" || imgEXT === "jpeg" || imgEXT === "gif" || imgEXT === "bmp" || imgEXT === "png") {
            if (myImage.files[0].size <= 1024 * 1024 * 2) {
                noImage.innerText = "";
                fileTest = true;
                if (img2 != null)
                    document.getElementById(img2).type = "file";
            } else {
                noImage.innerText = "votre fichier est supérieur à 2 MB";
                noImage.style.color = "red";
                fileTest = false;
            }

        } else {
            noImage.innerText = "ce n'est pas un type allower.Les types allower sont : jpg , jpeg , gif , bmp , png";
            noImage.style.color = "red";
            fileTest = false;
        }
    }
}

// test everything is ok

function testAll() {
    if (prixTest == false) {
        document.getElementById("prixTxt").scrollIntoView();
    }
    if (fileTest == false) {
        document.getElementById("files").scrollIntoView();
    }
    if (prixTest && fileTest) {
        return true;
    } else {
        return false;
    }
}
setInterval(function () {
    if (prixTest && fileTest) {
        document.getElementById("submit").disabled=false;
    }
},1000/60);
