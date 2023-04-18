<?php
//database connection
$conn = mysqli_connect("localhost", "root", "", "litchfield_campus");

//checking database connection
    // if (!$conn > 0) {
    //     mysqli_connect_error();
    //     echo "Database Failed to Connect!";
    // } else {
    //     echo "Database Connected!";
    // }

//show the students database
function query1($query1)
{
    global $conn;
    $result = mysqli_query($conn, $query1);
    $datas = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $datas[] = $data;
    }
    return ($datas);
}

//show the employees databases
function query2($query2)
{
    global $conn;
    $result = mysqli_query($conn, $query2);
    $datas = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $datas[] = $data;
    }
    return ($datas);
}

?>