<?php

$conn = new mysqli("localhost","root","","userdetails");


$results = $conn->query("SELECT * FROM userInfo");

while($row = $results->fetch_assoc()){
	echo "Name :".$row['uname']."<br/>Surname : ".$row['surname']."<br/> Image : <img width='200' height='100' src='images/".$row['userImage']."' />";
}


@$uname = $_POST['uname'];
@$surname = $_POST['surname'];
@$image = $_POST['img'];


if(isset($uname)){

$conn->query("INSERT INTO userInfo values('','$uname','$surname','$image')");

move_uploaded_file($image, '../images/'.basename($image));
}

?>