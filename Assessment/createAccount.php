<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelos Enterprises</title>
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
        <h1>Create account</h1>
             <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 $username = $_POST["username"];
                 $password = $_POST["password"];
             
                 // Check if the password meets minimum length requirements
                 if (strlen($password) < 10) {
                     echo "Password must be at least 10 characters long.";
                     exit;
                 }
             
                 // Check if the username already exists
                 $accounts = file("accounts.txt", FILE_IGNORE_NEW_LINES);
                 foreach ($accounts as $account) {
                     list($existingUsername, $existingPassword) = explode(" ", $account);
                     if ($username === $existingUsername) {
                         echo "Username already exists. Please choose a different username.";
                         exit;
                     }
                 }
             
                 // Append the new username and password to the accounts file
                 file_put_contents("accounts.txt", "$username $password\n", FILE_APPEND);
                 echo "Account created successfully.";
             }
             ?>    
    </main>
    <footer>
        <p>Contact us</p>
        <p>A: 111 Business Avenue, TULITZA NSW 9460<br>
        P: 02 0000 0000<br>
        E: contactus@gelosmail.com.au</p>
    
        <p>Gelos Enterprises would like to pay our respect and acknowledge Aboriginal and Torres Strait Islander Peoples as the Traditional Custodians of the land, rivers and sea. We acknowledge and pay our respect to the Elders, both past and present of all Nations.</p>				
        <p>This site has been developed by TAFE NSW &copy TAFE NSW <?php echo date("Y") ?></p>
        <p >Please note this is a fictitious organisation and has been created purely for educational purposes only.</p>
    </footer>

</body>
</html>