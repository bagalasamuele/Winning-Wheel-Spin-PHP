<?php

#Author: Samuele Bagalà, Septiember 2021
#Email: samuele@box2box.es
#Github @bagalasamuele



//for mask error
error_reporting (0);
ini_set('display_error', '0');

if (isset($_SERVER['HTTP_REFERER']) != '/event/app') {
  header("refresh:1;url='/'");
  die('No puedes aceder directamente a este url');
} 


$name = $_POST['name'];
$email = $_POST['email'];
$checkbox = $_POST['checkbox'];



//data for dabase

$data = array(
  'first_name'=> $name,
  'last_name'=> $name,
  'email'=> $email,
  'checkbox' => $checkbox,
);

//we need to convert in json for sending
$personJSON=json_encode($data);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://eventapi.devbox2box.es/users/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $personJSON,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



$mail = "<br><br>
Nombre: " . $name . "<br><br>
Email: " . $email . "";



//footer
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Sender email
$headers .= "From: box2box game <samuele@box2box.es>\r\n";


// Send the message to your_email_address
$title = "Aviso generado por el juego de box2box " . $name . "";
$bool = mail("samuele@box2box.es", $title, $mail, $headers);


header("refresh:0;url='/event/game'");
?>