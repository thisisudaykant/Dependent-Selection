<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1>Result of your submission</h1>
    <table rules="all" frame="box" style="margin-top:-50px;" >
    <th width="130px">Name</th>
    <th width="120px">Email</th>
    <th width="110px">City</th>
    <th width="110px">State</th>
    </tr>
    <?php
if(isset($_POST)){  
    echo '<tr>';
    foreach($_POST as $i){
        echo "<td><p id='result'>".$i. "</p></td><br/>";
    }
    echo '</tr>';
}
?>
</table>
    </center>
</body>
</html>
