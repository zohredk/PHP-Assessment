<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="headerContent">
            
            <nav>
                <ul>
                    <li class="menu">
                        <a href="index.php">
                            <img src="images/GE-icon.png" alt="Gelos Enterprises" width="47" height="55">
                        </a>
                    </li>
                    <li class="menu"><a href="login.php">LOGIN</a></li>
                    <li class="menu"><a href="register.php">REGISTER</a></li>
                    <li class="menu"><a href="marks.php">MARKS</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner">
        <img src="images/GE-stacked-logo-reverse.png" alt="" width="200" height="106">
    </section>
    <main>
        <h1>Calculation of your marks</h1>
        <?php
// Initialize variables to hold marks
$mark1 = $mark2 = $mark3 = $mark4 = $mark5 = 0;
$isValid = true; // Flag to track if all marks are valid

// Function to check if a mark is valid (between 0 and 100)
function isValidMark($mark) {
    return is_numeric($mark) && $mark >= 0 && $mark <= 100;
}

// Function to display an error message for invalid marks
function displayErrorMessage($mark) {
    echo "<p>Invalid mark: $mark. Marks must be numeric values between 0 and 100.</p>";
}

// Read the 5 marks
if(empty($_POST["mark1"]) || !isValidMark($_POST["mark1"])) {
    if (!empty($_POST["mark1"])) {
        displayErrorMessage($_POST["mark1"]);
    } else {
        echo "<p>Please supply a value for mark 1</p>";
    }
    $isValid = false; // Mark is invalid, set flag to false
} else {
    $mark1 = (int)$_POST["mark1"];
}

if(empty($_POST["mark2"]) || !isValidMark($_POST["mark2"])) {
    if (!empty($_POST["mark2"])) {
        displayErrorMessage($_POST["mark2"]);
    } else {
        echo "<p>Please supply a value for mark 2</p>";
    }
    $isValid = false; // Mark is invalid, set flag to false
} else {
    $mark2 = (int)$_POST["mark2"];
}

if(empty($_POST["mark3"]) || !isValidMark($_POST["mark3"])) {
    if (!empty($_POST["mark3"])) {
        displayErrorMessage($_POST["mark3"]);
    } else {
        echo "<p>Please supply a value for mark 3</p>";
    }
    $isValid = false; // Mark is invalid, set flag to false
} else {
    $mark3 = (int)$_POST["mark3"];
}

if(empty($_POST["mark4"]) || !isValidMark($_POST["mark4"])) {
    if (!empty($_POST["mark4"])) {
        displayErrorMessage($_POST["mark4"]);
    } else {
        echo "<p>Please supply a value for mark 4</p>";
    }
    $isValid = false; // Mark is invalid, set flag to false
} else {
    $mark4 = (int)$_POST["mark4"];
}

if(empty($_POST["mark5"]) || !isValidMark($_POST["mark5"])) {
    if (!empty($_POST["mark5"])) {
        displayErrorMessage($_POST["mark5"]);
    } else {
        echo "<p>Please supply a value for mark 5</p>";
    }
    $isValid = false; // Mark is invalid, set flag to false
} else {
    $mark5 = (int)$_POST["mark5"];
}

// If all marks are valid, proceed to calculate sum and average
if ($isValid) {
    // Create array with valid marks
    $marks = [$mark1, $mark2, $mark3, $mark4, $mark5];

    $total = 0;
    // Display the array and calculate sum
    foreach($marks as $mark) {
        echo "<p>$mark</p>";
        $total += $mark;
    }

    // Calculate the average
    $average = $total / 5;

    // Display sum and average
    echo "<p>The sum of your marks is: $total</p>";
    echo "<p>The average of your marks is: $average</p>";
}
?>
    </main>
    <footer>
        <p>Contact us</p>
        <p>A: 111 Business Avenue, TULITZA NSW 9460<br>
        P: 02 0000 0000<br>
        E: contactus@gelosmail.com.au</p>
    
        <p>Gelos Enterprises would like to pay our respect and acknowledge Aboriginal and Torres Strait Islander Peoples as the Traditional Custodians of the land, rivers and sea. We acknowledge and pay our respect to the Elders, both past and present of all Nations.</p>				
        <p>This site has been developed by TAFE NSW &copy; TAFE NSW <?php echo date("Y") ?></p>
        <p >Please note this is a fictitious organisation and has been created purely for educational purposes only.</p>
    </footer>
</body>
</html>