<?php

include "config.php";

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM signup WHERE id = '$user_id' ";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record deleted successfully.";

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p></p>
</body>

</html>