<?php
    // Stemp 1. Get database connection
    require ('../config/database.php');

    //step 2.
    $user_id = $_GET[''];
    //
    $sql_delete_users = "delect from user where id = 1";
    //
    $result = pg_query($conn_local,$sql_delete_users);
    if (!$result) {
        die()
    }
?>