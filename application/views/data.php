<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
<h1>Registered Students Table</h1>
<table border=5px;  rules = all;   width=1000px;>
<tr>
<td>id</td>
<td>first_name</td>
<td>last_name</td>
<td>email</td>
<td>phone</td>
<td>password</td>

</tr>
<?php 
foreach($users as $use){
?>
    <tr>
    <td> <?php  echo $use['id']; ?></td>
    <td> <?php  echo $use['first_name']; ?></td>
    <td> <?php  echo $use['last_name']; ?></td>
    <td> <?php  echo $use['email']; ?></td>
    <td> <?php echo $use['phone'];?></td>
    <td> <?php  echo $use['password']; ?></td>
    
    </tr>
<?php } ?>


</table>
</center>
</body>
</html>

