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

$sql = "INSERT INTO transfer(s_name,s_acc_no,r_name,r_acc_no,amount) 
VALUES ('saira','SRRV0000JC557','rajesh','SRRV0000JC556',1000),
('nila','SRRV0000JC558','suvashi','SRRV0000JC559',1500),
('sankar','SRRV0000JC561','kousi','SRRV0000JC562',3000),
('swetha','SRRV0000JC565','lohesh','SRRV0000JC566',2000),
('Vani','SRRV0000JC568','ram','SRRV0000JC567',1600)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>