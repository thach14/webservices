<?php
$gmail = $_GET["gmail"];
$pass = $_GET["password"];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lab04-webservices";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM sinhvien";
$result = $conn->query($sql);

/*if(isset($_GET['gmail']) && isset($_GET['password']))
{
    $pass = $_GET['password'];
    $gmail = $_GET['gmail'];

    if ($gmail) 
}*/

if ($result->num_rows > 0) {
  // output data of each row
  $i = 0;
  while($row = $result->fetch_assoc()) {
     
    $arr_gmail [$i]= $row['gmail'];
    $arr_pass [$i]= $row['pass'];
    $arr_hoten [$i] = $row['name'];
    $arr_diem [$i] = $row['diem'];
    $i++;
    
  }
  for ($i = 0; $i < count($arr_gmail);$i++){
    if ($gmail == $arr_gmail[$i] && $pass==$arr_pass[$i])
        echo "Ho ten: ".$arr_hoten[$i]."<br>Diem: ".$arr_diem[$i];
            
  }
  
} 

