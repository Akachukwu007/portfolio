<?php
include("connect.php");

//get the tansferred ID
$a= $_GET['id'];

//select a particular profiles

$sql= "SELECT * FROM portfolioForm where id = '$a'";
$result=mysqli_query($conn, $sql) or die("Could not select" .mysqli_error($conn));
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result))
    {
        $id[] = $row["id"];
        $name[]= $row["name"];
        $email[]= $row['email'];
        $sub[]= $row["subject"];
        $message[]=$row['message'];
        $date[]= date('j, F, Y', strtotime($row['date']));

    }
}

?>

 
<!doctype html>

<html>
<head>

</head>

<body>
<table width="300px" style="border:solid 1px black">
<tr>

<td width="150" style="border:solid 1px black"><h3>Name</h3> </td>
<td width="100" style="border:solid 1px black"><h3>Email</h3> </td>
<td width="100" style="border:solid 1px black"><h3>Subject</h3></td>
<td width="100" style="border:solid 1px black"><h3>Message</h3></td>
<td width="100" style="border:solid 1px black"><h3>Date</h3></td>
</tr>
<tr>
<td style="border:solid 1px black" ><?php echo $name.' '.$firstname?></td>
<td style="border:solid 1px black" ><?php echo $email?> </td>
<td style="border:solid 1px black" ><?php echo $sub ?></td>
<td style="border:solid 1px black" ><?php echo $message ?>  </td>
<td style="border:solid 1px black" ><?php echo $date ?>  </td>
</tr>
</table>
</body>

</html>