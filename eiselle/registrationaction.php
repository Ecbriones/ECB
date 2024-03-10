<?php

session_start(); 

include "database.php";

if(isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['contact_num']) && isset($_POST['country']) && isset($_POST['region']) && isset($_POST['province']) && isset($_POST['city']) && isset($_POST['barangay']) && isset($_POST['lot']) && isset($_POST['blk']) && isset($_POST['street']) && isset($_POST['subd']) && isset($_POST['email_address']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function sanitize_contact_num($contact_num) {
        // Remove all characters except digits, plus sign, parentheses, and hyphens
        return preg_replace("/[^0-9+()-]/", "", $contact_num);
    }

    $last_name = validate($_POST['last_name']);
    $first_name = validate($_POST['first_name']);
    $contact_num = sanitize_contact_num($_POST['contact_num']); 
    $country = validate($_POST['country']);
    $region = validate($_POST['region']);
    $province = validate($_POST['province']);
    $city = validate($_POST['city']);
    $barangay = validate($_POST['barangay']);
    $lot = validate($_POST['lot']);
    $blk = validate($_POST['blk']);
    $street = validate($_POST['street']);
    $subd = validate($_POST['subd']);
    $email_address = validate($_POST['email_address']);
    $password = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);

    // Check if email address already exists
    $query = "SELECT * FROM account_tbl WHERE email_address='$email_address'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0 ){
        header('location:registration.php?error=Email address already exists! Please try another');
        exit();
    }

    // Insert data into the database
    $query1 = "INSERT INTO account_tbl (last_name, first_name, contact_num, country, region, province, city, barangay, lot, blk, street, subd, email_address, password) VALUES ('$last_name', '$first_name', '$contact_num', '$country', '$region', '$province', '$city', '$barangay', '$lot', '$blk', '$street', '$subd', '$email_address', '$password')";
    $result1 = mysqli_query($conn, $query1);

    if($result1){
        // Set session message
        $_SESSION['message'] = "Account created successfully!";
        // Redirect the user to login.php with success message
        header('location:login.php?account_created=1');
        exit();
    } else {
        header('location:registration.php?error=Unknown error occurred');
        exit();
    }
} else {
    header('location:registration.php');
    exit();
}
?>
