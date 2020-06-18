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
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html>
<head>
	<title>Login</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
</head>
<body>
    <?php print $menuHTML; ?>
    <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-header">Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
