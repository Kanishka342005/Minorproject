<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: black;
        }

        #hd {
            background-color: lightgreen;
            color: black;
        }
    </style>
</head>
<body>

 <div id="hd">
        <h3>STUDENT DETAILS
            <hr>
        </h3>

        <div id="nav">
            <a  href="studenthome.html">Home</a>
            <a href="newstudent.html">New Student</a>
            <a href="modifystudent.html">Modify Student</a>
            <a href="removestudent.html">Remove Student</a>
            <a href="viewstudent.php">View Student</a>
			
                
            
        </div>
    </div>
	</body>
	
			<h3 align="center">STUDENTS LIST</h3>

			
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from stud_det";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['sid'].'</td>';
      echo '<td>'.$row['sname'].'</td>';
      echo '<td>'.$row['scon_no'].'</td>';
	  echo '<td>'.$row['sadd'].'</td>';
	  
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>