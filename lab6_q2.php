<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>

<?php
$students = array(
    "Ali" => "BIC",
    "Siti" => "BIT",
    "Ravi" => "BIS"
);
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Course</th>
    </tr>

    <?php
    foreach ($students as $name => $course) {
        echo "<tr><td>$name</td><td>$course</td></tr>";
    }
    ?>

</table>

</body>
</html>
