
<?php
include('conn.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];
}
    $sql = mysqli_query($conn, "SELECT * FROM portfolioForm order by 
id desc") or die ("Could not select portfolioForm" .mysqli_error($conn));
$count = 0; // use $count to identify the first value

    //check if something is in the database
    if(mysqli_num_rows($sql)>$count){
    //fetch each array
    while($row= mysqli_fetch_assoc($sql))
    {
        //select whatever is in the table
        $id[] = $row["id"];
        $name[]= $row["name"];
        $email[]= $row['email'];
        $sub[]= $row["subject"];
        $message[]=$row['message'];
        $date[]= date('j, F, Y', strtotime($row['date']));

        $count++;
    }
}
$sn=1;


?>

<!doctype html>

<html>
<head>

</head>

<body>
<table width="300px" style="border:solid 1px black">
<tr>
<td width="85" style="border:solid 1px black">SN </td>
<td width="496" style="border:solid 1px black">Name </td>
<td width="114" style="border:solid 1px black">Email </td>
<td width="114" style="border:solid 1px black">Subject </td>
<td width="500" style="border:solid 1px black">Message </td>
<td width="150" style="border:solid 1px black">date </td>
<td width="150" style="border:solid 1px black">&nbsp; </td>
<td width="150" style="border:solid 1px black">&nbsp; </td>
<td width="150" style="border:solid 1px black">&nbsp; </td>
</tr>
<?php for($s=0; $s<$count; $s++){?>
    
    <tr>
<td style="border:solid 1px black" ><?php echo $sn++ ?></td>
<td style="border:solid 1px black" ><?php echo $name[$s]?> </td>
<td style="border:solid 1px black" ><?php echo $email[$s]?> </td>
<td style="border:solid 1px black" ><?php echo $sub[$s]?> </td>
<td style="border:solid 1px black" ><?php echo $message[$s]?> </td>
<td style="border:solid 1px black" ><?php echo $date[$s]?> </td>



<td style="border:solid 1px black" ><a href="editpage.php?id=<?php echo $id[$s]?>">Edit</a> </td>
<td style="border:solid 1px black" id="del" onClick="alert('DELETED')">
<a href="select.php? id=<?php echo $id[$s]?>">Delete</a> </td>
<td style="border:solid 1px black"><a href="viewPage.php?id=<?php echo $id[$s] ?>">View </a></td>
</tr>
<?php }?>
</table>
</body>
</html>