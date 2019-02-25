<?php
$password;
$salt;

// var_dump($password);
// var_dump($salt);

// substr($password, strlen($password));


// function password_splice ()

    // echo (floor(6));
    // echo (ceil(6));
   // password_splice($password, 6, 5, $password ('salt'));


// First  proposition but does not work for odd numbers
// $firstpart = substr($password, 0, strlen($password)/2);
// $secondpart = substr($password, strlen($password)/2);
// $saltedPassword = '$firstpart.$salt.$secondpart';

// Second solution
$pos = ceil(strlen($password)/2);
$firstpart = substr($password, 0, strlen($password)/2);
$secondpart = substr($password, strlen($password)/2);
$saltedPassword = '$firstpart.$salt.$secondpart';

// bonus part
$firstval = substr($password,
    0,
    floor(strlen($password)/2)+ (strlen($password)%2)
);

$secondval = substr($password, ceil(strlen($password)/2));

$saltedPassword = $firstval.$salt.$secondval;

// other solution by juseppe bur it's a double floor
$middle = floor (strlen($password)/2);
$saltedpassword = substr($password,0, $middle)
    .$salt
    .substr($password, $middle, strlen($pasword));
