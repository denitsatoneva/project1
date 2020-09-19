<?php
$username = "denitsatoneva";
echo $username."<br>";
$age = 13;
echo $age."<br>";
$istrue = true;
echo $istrue."<br>";
echo "My name is $username.<br>";
$usernamearray = ["denitsa", "elmira"];
echo $usernamearray[0];
$usernameAssocArray = ["username" => "denitsatoneva"];
echo $usernameAssocArray["username"];
$usernameAssocArray = ["username" => "denitsatoneva", "age" => 22];
echo $usernameAssocArray["age"];
for($i=0; $i<2; $i++)
{
    echo $usernamearray[$i];  // izlizat ni dvete promenlivi ot masiva
}

foreach($usernameAssocArray as $key => $item)  //ciklenena sociativem masiv; suzdavame promenliva item
{
    echo $key." ".$item."<br>";
}