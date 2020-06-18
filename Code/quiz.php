<?php

	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
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
        <title>Quiz</title>
        <link rel="stylesheet" type="text/css" href="css/quiz.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/images.css">
    </head>
    <body>
        <?php print $menuHTML; ?>
        <div class="quiz">
            <h1>Geography Quiz</h1>
            <form action="quiz.php" method="get">
            <ol>
                <li>
                    <h3>Where am I?</h3>
                    <img class="images" type="image" alt="sea" src="css/images/AZchukchiSea.jpg">
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Russia </label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) India</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Alaska</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Montana</label>
                    </div>
                </li>
                <li>
                    <h3>Where am I?</h3>
                    <img type="image" alt="sea" src="css/images/HawaiiKilauea.jpg"> 
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Fiji</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Mexico</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Japan</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Hawaii</label>
                    </div>
                </li>
                <li>
                    <h3>Where am I?</h3>
                    <img class="images" type="image" alt="sea" src="css/images/campfire.jpg">
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) California</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Utah</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Colorado</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Missouri</label>
                    </div>
                </li>
                <li>
                    <h3>Where am I?</h3>
                    <img class="images" type="image" alt="al" src="css/images/AlaskaYakutat.jpg">
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Ukraine</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Alaska</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Canada</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Maine</label>
                    </div>
                </li>
                <li>
                    <h3>Where am I?</h3>
                    <img class="images" type="image" alt="sea" src="css/images/BangladeshPadma.jpg">
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) India</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Vietnam</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Brazil</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Bangladesh</label>
                    </div>
                </li>
            </ol>
            <div id="submitButton">
                <input type="submit" value="Submit" class="submitbtn" />
            </div>
		</form>
            <?php
            
            $answer1 = $_GET['question-1-answers'];
            $answer2 = $_GET['question-2-answers'];
            $answer3 = $_GET['question-3-answers'];
            $answer4 = $_GET['question-4-answers'];
            $answer5 = $_GET['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
            ?>
        </div>
    </body>
</html>