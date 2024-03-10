<?php
session_start(); 

include "database.php"; // Include the database connection file

if(isset($_POST['email_address']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email_address = validate($_POST['email_address']);
    $password = validate($_POST['password']);

    if (empty($email_address)){
        header('location:login.php?error=Email Address is Required!');
        exit();
    } elseif (empty($password)){
        header('location:login.php?error=Password is Required!');
        exit();
    } else {
        // Query the database to fetch user data based on email
        $query = "SELECT * FROM account_tbl WHERE email_address='$email_address' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['email_address'] === $email_address && $row['password'] === $password){
                echo "Logged in!";
                $_SESSION['email_address'] = $row['email_address'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name']; // Add this line to set last name
                $_SESSION['account_ID'] = $row['account_ID'];
                header('location:contact.php');
                exit();
            } else {
                header('location:login.php?error=Incorrect Email address or Password!');
                exit();
            }
        } else {
            header('location:login.php?error=Incorrect Email Address or Password!');
            exit();
        }
        
    }
} else {
    header('location:login.php');
    exit();
}
?>
