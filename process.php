<?php

    // Connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

    echo "Processing...";

    if(isset($_GET['name']))
    {
        echo 'GET: Your name is ' . $_GET['name'];
    }

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $name = mysqli_real_escape_string($conn, $name);

        $sql = "INSERT INTO users(name) VALUES('$name');";

        if(mysqli_query($conn, $sql))
        {
            echo "User '$name' added";
        }
        else
        {
            echo "Error: " . mysql_error($conn);
        }

    }


?>
