<?php

	// A user has to have logged in order to have this 'username' cookie
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	// If the cookie isn't there, send them back to the login
	if (!$username) {
		header("Location: login.php");
		exit;
	}

    // Require the MenuComponent class
    require_once("template/MenuComponent.php");

    // Create an array of menu items and their links
    $menuItems = array();
    $menuItems[] = array('label' => 'Home', 'link' => 'home.php');
    $menuItems[] = array('label' => 'Aerial Photos', 'link' => 'photography.php');
    $menuItems[] = array('label' => 'Ouiz', 'link' => 'quiz.php');
    $menuItems[] = array('label' => 'Video', 'link' => 'video.php');
    $menuItems[] = array('label' => 'Logout', 'link' => 'logout.php');

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
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php print $menuHTML; ?>
        <div class="aboutMe">
            <h1>WELCOME MEMBERS ONLY</h1>
            <p class="paragraph">Explore our beautiful planet from up above</p>
        <p class="words">Photo of the Week</p>
            <hr>
            <div class="column">
                <img class="arielPhotos" alt="Huricane" type="image" src="css/images/Africastheewaterskloof.jpg">
            </div>
            <div id="displayBox">
            </div>
            <button class="buttons" type="button" onclick="getPictureInfo()">Click to see where I am located!</button>
        </div> 
        <script src="js/homeAJAX.js"></script>
    </body>
</html>