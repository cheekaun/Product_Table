<!DOCTYPE html>
<html>
    <body>
        
    <!-- <button id="b1" type="button">cheekaun</button> -->
    <!--<button type="button" onclick="showProduct(products)">Click me to Show Product</button>-->
    
<?php

function P($word){
    echo "$word<br/>";
}

function showproductTable($id, $name, $price, $image, $red,$green,$blue){
    echo " <tr> <td><p style = 'color:rgb($red,$green,$blue)'>$id</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$name</td> 
    <td><p style = 'color:rgb($red,$green,$blue)'>$price</td> 
    <td><img src = '$image' alt = 'Testimage'></td></tr>";
}

$arrayofproduct = array(
    array("01", "ASUS 4GB ROG STRIX GTX1050TI O4G GAMING","13275 Baht","productIMG/1050ti.png"),
    array("02", "ZOTAC GAMING GEFORCE GTX 1650 4GB GDDR6","6690 Baht","productIMG/1650.jpg"),
    array("03", "RTX2080TI 11GB GIGABYTE GAMING (OC/D6)","44900 Baht","productIMG/2080ti.png"),
    array("04", "GIGABYTE GEFORCE RTX 3050 GAMING OC 8GB GDDR6","13500 Baht","productIMG/3050.png"),
    array("05", "GIGABYTE GEFORCE RTX 3090 GAMING OC 24GB GDDR6","52900 Baht","productIMG/3090.png"),
    array("06", "VGA GALAX GEFORCE RTX 2060 PLUS OC 12GB GDDR6","10355 Baht","productIMG/206012GB.png"),
    array("07", "ASUS ROG STRIX GEFORCE RTX 3050 8GB OC Edition GDDR6","15900 Baht","productIMG/cover-ASUS-ROG-STRIX-GEFORCE-RTX-3050-OC-Edition-8GB-resize.png"),
    array("08", "MSI GeForce RTX 3070 Gaming Z Trio 8GB GDDR6 (LHR)","27900 Baht","productIMG/MSI_GEFORCE_RTX_3070_GAMING_Z_TRIO_8G_LHR_-_8GB_GDDR6.png"),
    array("09", "ASUS 6GB RTX2060 ROG STRIXO6G","14900 Baht","productIMG/rtx2060_rog_strixo6g_1.jpg"),
    array("10", "ZOTAC GAMING GEFORCE GTX 1660TI 6GB GDDR6","8490 Baht","productIMG/ZOTAC_GAMING_GEFORCE_GTX_1660_TI_-_6GB_GDDR6(192BIT).jpg")
);

    P("<p style='font-size:50px'>Table of Products");
    echo "<table border='1'  width='50%' height='50%' style='font-size:30px'>";
    echo "<tr> <td>ID</td> <td>Name</td> <td>Price</td> <td>Image</td></tr>";
    for($i=0;$i<10;$i++){
        $red = rand(0,256);
        $green = rand(0,256);
        $blue = rand(0,256);      
        showproductTable($arrayofproduct[$i][0],$arrayofproduct[$i][1],$arrayofproduct[$i][2],$arrayofproduct[$i][3],$red,$green,$blue);
    }

?>
           
</body>
</html>