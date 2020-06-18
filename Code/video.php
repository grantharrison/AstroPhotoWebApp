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
        <title>Video</title>
        <link rel="stylesheet" type="text/css" href="css/video.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php print $menuHTML; ?>
        <div class="aboutMe">
            <div id="iframeDiv">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/EPyl1LgNtoQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h1>This video shows the beautiful world from space!</h1>
        </div> 
        <script src="js/homeAJAX.js"></script>
    </body>
</html>