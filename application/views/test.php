<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello everyone
        <br>
      MY NAME IS--- <?php  echo $name."<br>";

        echo "<pre>";
        print_r($res)."<br>";
       echo "</pre>";
        
       echo "it's database part";
       echo "<pre>";
       print_r($resum);
       echo "<pre>";
        ?>
        
 

    <table border=1px cellpading=10px>
<tr>
    <th>id</th>
    <th>name</th>
    <th>number</th>
    <th>email</th>
    <th>address</th>

</tr>

<?php

      foreach($resum as $row ){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['number']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>


</tr>
<?php }?>


</table>
</h1>

</body>
</html>