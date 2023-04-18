<?php
include("../../datafunction/query.php");

$students = query1('SELECT * FROM students');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Students</title>
    <!-- <link rel="stylesheet" href="../../css/student_db_admin.css type="css/text"> -->
</head>

<body>
    <h1>Current Student at Litchfield University</h1>

    <a href="addstudent.php" style="text-decoration: none; color:blue;">Add new student?</a>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>id</th>
            <th>SIDN</th>
            <th>name</th>
            <th>birth</th>
            <th>department</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($students as $student): ?>

            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $student["SIDN"]; ?>
                </td>
                <td>
                    <?= $student["name"]; ?>
                </td>
                <td>
                    <?= $student["birth"]; ?>
                </td>
                <td>
                    <?= $student["department"]; ?>
                </td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

    <a href="../admin_homepage.php" style="text-decoration: none; color:blue;">Back</a>
</body>

</html>