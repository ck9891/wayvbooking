<?php
//declare everything
$gender_slider_male = $gender_slider_female = 
  $add_skipper = $add_hostess = $add_hostess1 = $add_hostess2 = $add_hostess3 = $add_hostess4 = $add_hostess5 = $add_hostess6 = $firstname = $lastname = $dob_month = $dob_day = $dob_year = age = $contact_email = $contact_phone = $email = $phone = $address = $city = $pc-zip = $province = $nationality = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender_slider_male = test_input($_POST["male"]);
  $gender_slider_female = test_input($_POST["female"]);
  $add_skipper = test_input($_POST["add-skipper"]);
  $add_hostess = test_input($_POST["add-hostess"]);
    ///maybe need to get rid of these on bottom of page
   $add_hostess1 = test_input($_POST["add-hostess1"]);
    $add_hostess2 = test_input($_POST["add-hostess2"]);
    $add_hostess3 = test_input($_POST["add-hostess3"]);
    $add_hostess4 = test_input($_POST["add-hostess4"]);
    $add_hostess5 = test_input($_POST["add-hostess5"]);
    $add_hostess6 = test_input($_POST["add-hostess6"]);
   
    //traveller info
    
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $dob_month = test_input($_POST["gMonth2"]);
    $dob_day = test_input($_POST["day"]);
    $dob_year = test_input($_POST["year"]);
    $age = test_input($_POST["age"]);
    $contact_email = test_input($_POST["contact-email"]);
    $contact_phone = test_input($_POST["contact-phone"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["usrtel"]);
    $address = test_input($_POST["address1"]);
    $city = test_input($_POST["city"]);
    $pc-zip = test_input($_POST["pc-zip"]);
    $province = test_input($_POST["province-states"]);
    $nationality = test_input($_POST["nationality"]);
    echo $gender_slider_male;
echo $gender_slider_female;
echo $add_skipper; 
echo $add_hostess;
echo $add_hostess1; 
echo $add_hostess2; 
echo $add_hostess3;
echo $add_hostess4;
echo $add_hostess5; 
echo $add_hostess6; 
echo $firstname;
echo $lastname;
echo $dob_month;
echo $dob_day;
echo $dob_year;
echo age;
echo $contact_email;
echo $contact_phone;
echo $email;
echo $phone;
echo $address;
echo $city;
echo $pc-zip;
echo $province;
echo $nationality;

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>