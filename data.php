<?php
$conn = mysqli_connect("localhost", "root", "Nandan@2001", "hmsdb");
$result = mysqli_query($conn, "SELECT * FROM exp");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();