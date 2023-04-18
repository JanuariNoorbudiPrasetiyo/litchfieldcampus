<?php
include("../../datafunction/query.php");

$employees = query2('SELECT * FROM teachers_and_staff');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers and Staff</title>
</head>

<body>
    <h1>Teachers and Staff</h1>

    <table border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>IDN</th>
            <th>name</th>
            <th>email</th>
            <th>division</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($employees as $employee): ?>

            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $employee["IDN"]; ?>
                </td>
                <td>
                    <?= $employee["name"]; ?>
                </td>
                <td>
                    <?= $employee["email"]; ?>
                </td>
                <td>
                    <?= $employee["division"]; ?>
                </td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


    <a href="../admin_homepage.php" style="text-decoration: none; color:blue;">Back</a>
</body>

</html>