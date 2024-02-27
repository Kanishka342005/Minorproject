<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sna=$_POST['sna'];
$sph=$_POST['sph'];
$sadd=$_POST['sadd'];

$sql="insert into stud_det(sname,scon_no,sadd) values('$sna','$sph','$sadd')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>