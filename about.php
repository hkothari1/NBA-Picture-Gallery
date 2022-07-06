<!-- this php file connects my form to my database -->
<?php
    $con = mysqli_connect('localhost', 'root');

    if($con){
        echo "Connection Successful";
    }
    else {
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'nbaphotography');  // connect to database

    $name = $_POST['name'];   // name variable to store the inputted name 
    $email = $_POST['email'];  // email variable to store the inputted email
    $number = $_POST['number'];  // number variable to store the inputted number

    $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";  // insert inputted name, email, and number into our users table

    mysqli_query($con, $query);  // execute the query 
    header('location:index.php#contact');   // once submit button is pressed it stays at the contact us section 
?>


