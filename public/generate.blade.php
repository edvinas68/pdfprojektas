<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit;
}


require_once '/vendor/autoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

echo $fname;


/*$data = [
    'name_field' => $fname . ' ' . $lname,
    'email_field' => $email,
    'phone_field' => $phone,
];

$pdf = new GeneratePDF;
$response = $pdf->generate($data);
*/