<?php
    include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);

    // Only execute when there are results
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        // store each row in the $row-array
        while ($row = mysqli_fetch_assoc($result)) {
            // access by passing the name of the column
            echo $row['user_uid'] . "<br />";
        }
    }
?>

</body>
</html>