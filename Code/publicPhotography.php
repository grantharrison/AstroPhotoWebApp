<?php

// Require the MenuComponent class
require_once("template/MenuComponent.php");

// Create an array of menu items and their links
$menuItems = array();
$menuItems[] = array('label' => 'Home', 'link' => 'index.php');
$menuItems[] = array('label' => 'Aerial Photos', 'link' => 'publicPhotography.php');
$menuItems[] = array('label' => 'Login', 'link' => 'login_form.php');

// Specify the currently selected tab
$currentPage = 'Contacts';

// Create a new MenuComponent object (pass it the menu items and the currently selected one)
$menu = new MenuComponent($menuItems, $currentPage);
// Call MenuComponent's 'generate()' method
$result = $menu->generate();

// generate() returns an array containing a path to a CSS file and the menu's html
$menuCSSFile = $result['cssFile'];
$menuHTML = $result['html'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
        <title>Ariel Photos</title>
        <link rel="stylesheet" type="text/css" href="css/photography.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php print $menuHTML; ?>
        <div class="photos">
            <h1>Aerial Photography</h1>
            <p class="quote">Dont Forget to look Down</p>
            <p id="dji" class="quote"> - DJI</p>
            <hr>
            <div class="row">
                <div class="column">
                    <img onclick="openModal();currentSlide(1)" id="hurricane" class="arielPhotos hover-shadow cursor" alt="Huricane" type="image" src="css/images/hurricaneFlorence.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(2)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/AZchukchiSea.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(3)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/australiaBasin.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(4)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/HawaiiKilauea.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(5)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/AlaskaYakutat.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(6)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/Africastheewaterskloof.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(7)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/campfire.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(8)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/BangladeshPadma.jpg">
                </div>
                <div class="column">
                    <img onclick="openModal();currentSlide(9)" class="arielPhotos hover-shadow cursor" type="image" src="css/images/CAwoolseyFire.jpg">
                </div>
            </div>
        </div> 
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">
            <div class="mySlides">
              <div class="numbertext">1 / 9</div>
              <img src="css/images/hurricaneFlorence.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">2 / 9</div>
              <img src="css/images/AZchukchiSea.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">3 / 9</div>
              <img src="css/images/australiaBasin.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">4 / 9</div>
              <img src="css/images/HawaiiKilauea.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">5 / 9</div>
              <img src="css/images/AlaskaYakutat.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">6 / 9</div>
              <img src="css/images/Africastheewaterskloof.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">7 / 9</div>
              <img src="css/images/campfire.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">8 / 9</div>
              <img src="css/images/BangladeshPadma.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">9 / 9</div>
              <img src="css/images/CAwoolseyFire.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="caption-container">
              <p id="caption"></p>
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/hurricaneFlorence.jpg" onclick="currentSlide(1)" alt="Hurricane Florence">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/AZchukchiSea.jpg" onclick="currentSlide(2)" alt="Alaska's Chukchi Sea">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/australiaBasin.jpg" onclick="currentSlide(3)" alt="Australia's Lake Eyre Basin">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/HawaiiKilauea.jpg" onclick="currentSlide(4)" alt="Hawaii's Kilauea">
            </div>
              <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/AlaskaYakutat.jpg" onclick="currentSlide(5)" alt="Alaska's Yakutat Glacier">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/Africastheewaterskloof.jpg"  onclick="currentSlide(6)" alt="South Africa's Theewaterskloof">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/campfire.jpg" onclick="currentSlide(7)" alt="Camp Fire California">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/BangladeshPadma.jpg" onclick="currentSlide(8)" alt="Bangladesh's Padma River">
            </div>
            <div class="column">
              <img class="arielPhotos demo cursor" src="css/images/CAwoolseyFire.jpg" onclick="currentSlide(8)" alt="California's Woolsey Fire Scar">
            </div>
          </div>
        </div>
        <script src="js/responsiveWebPage.js"></script>
        <script src="js/popUp.js"></script>
    </body>
</html>