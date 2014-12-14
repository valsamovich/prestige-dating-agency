<?php
    // PHP Script 1.0 - contact.inc.php
    // Created March 31, 2013
    // Created by Valery Y. Samovich
    // Contact script

    // error_reporting(E_ALL & ~E_NOTICE);
    // print_r($_POST);

    if(isset($_POST['submit'])){

        // Variables declaration
        $name = $_POST['name'];  // Gets the entered name
        $email = $_POST['email']; // Gets the entered email
        $message = $_POST['message']; // Gets the entered message
        $to = "valerysamovich@gmail.com"; // Email address

        // Validating the fields
        if($name != "" && $email != "" && $message != ""){
            // Mail function
            mail($to, $name, $email, $message);
            echo "<p style='margin-top:12px; text-align:center;'>Thank you for contact <span class='lightblue'>Express</span>&nbsp;<span class='boldblue'>Locksmith</span> team!</p>";
            include ("includes/footer.php"); // Pull in the page footer.
            exit(); // Quit the script.
        }else{
            echo "<p>Please fill in all fields and submit again!</p>";
        }
    }
?>
