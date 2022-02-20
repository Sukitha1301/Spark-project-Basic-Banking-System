<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users(SNo,Name,EmailId,Gender,Balance,Acc_Number)
VALUES (1,'Sukitha','Sukitha@gmail.com','Female',9000,'SRRV000JC556'),
(2,'suvashi','suvashi@yahoo.com','Female',1000,'SRRV000JC557'),
(3,'karthi','karthi@yahoo.com','male',5000,'SRRV000JC558'),
(4,'saira','saira@gmail.com','Female',3000,'SRRV000JC559'),
(5,'sankar','sankar@gmail.com','Male',6600,'SRRV000JC560'),
(6,'Devi','devi@gmail.com','Female',1000,'SRRV000JC561'),
(7,'lohesh','lohesh@gmail.com','Male',4000,'SRRV000JC562'),
(8,'swetha','swetha@gmail.com','Female',7600,'SRRV000JC563'),
(9,'ram','ram@yahoo.com','Male',11000,'SRRV000JC564'),
(10,'kousi','kousi@gmail.com','Female',8600,'SRRV000JC565'),
(11,'Rajesh','rajesh@gmail.com','Male',2500,'SRRV000JC566'),
(12,'Shas','shas@yahoo.com','Female',9700,'SRRV000JC567'),
(13,'Vani','vani@gmail.com','Female',7000,'SRRV000JC568'),
(14,'nila','nila@yahoo.com','Female',9000,'SRRV000JC569')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>