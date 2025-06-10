<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

<?php
    $name = "Muhammad Aslam Bin Ador";
    $matric = "CI240006";
    $course = "Software Engineering";
    $year = "1";
    $address = "No12, Jln Aikka 8, Tmn Aikka, 83200, Senggarang, Batu Pahat, Johor";
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Label</th>
        <th>Value</th>
    </tr>
    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
    <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
    <tr><td>Course</td><td><?php echo $course; ?></td></tr>
    <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
</table>

</body>
</html>
