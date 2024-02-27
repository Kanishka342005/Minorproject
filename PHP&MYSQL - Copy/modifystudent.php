<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';
$sid=$_POST['sid'];
$sna=$_POST['sna'];
$sph=$_POST['sph'];
$sadd=$_POST['sadd'];

$sql="update stud_det set sname='$sna',scon_no='$sph',sadd='$sadd'where sid='$sid'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>