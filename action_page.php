<?php
$conn = new mysqli("localhost","root","","ip_db");
if($conn)
{
    
}
else
{
echo "sorry connection not connected successfully";
}
if(isset($_REQUEST['signup']))
{
    echo "Hii";
    $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];

    $sql="INSERT INTO ip_tb(name,Password)
         values('$name','$password')";
    $conn->query($sql);
    echo "<script>location.href='index.php'</script>";
}

?>
