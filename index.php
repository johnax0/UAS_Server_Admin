<?php
$servername = "172.20.0.2";
$username = "root";
$password = "kali";
$dbname = "trucorp";

//CREDIT : W3 School.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama, alamat, jabatan FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nama: " . $row["nama"]. " - Alamat: " . $row["alamat"]. " - Jabatan: " . $row["jabatan"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
