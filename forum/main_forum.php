<!DOCTYPE html>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myforum"; // Database name 
$tbl_name="fquestions"; // Table name 


// Connect to server and select databse.
$conn = mysqli_connect($host,$username,$password)or die("cannot connect"); 
mysqli_select_db($conn,$db_name)or die("cannot select DB");


$sql="SELECT * FROM $tbl_name ORDER BY id DESC";

// OREDER BY id DESC is order result by descending

$result=mysqli_query($conn,$sql);
?>

<style>
    a
    {
        color: #ff6666;
        text-decoration: none;
        font-size: 20px;
    }
    
    body
    {
        background-color: lightpink;
        height: 100%;
        width: 100%;
        font-family: sans-serif;
    }
    
    table
    {
        height: 100%;
        width: 100%;
    }
    
    td
    {
        height: 16%;
        padding-top: 2%;
        padding-bottom: 2%;
        color: #ffaaaa;
    }
    
    td strong
    {
        
    }
    
    .container
    {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    
    .container h1
    {
        font-family: serif;
        text-transform: uppercase;
        color: darkred;
    }
</style>

<div class = "container">
    <h1><strong>Support Forum</strong></h1>
</div>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#ff00ff">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>S.no:</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Title</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php

// Start looping table row
while($rows = mysqli_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
    <td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysqli_close($conn);
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Post a Question</strong> </a></td>
</tr>
</table>