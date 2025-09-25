  <?php
    //step1.get batabase connection
    require('../config/database.php');

    //step2.get  form-data
    $e_mail = $_POST['email'];
    $p_wd = $_POST['password'];

    //Step 3. query
    $sql_check_user = "
     select 
        u.email,
        u.password
    from 
        users u
    where 
        u.email = '$e_mail' and
        u.password = '$p_wd'
    limit 1
    ";
     $res_check = pg_query($conn, $sql_check_user);
      if (pg_num_rows($res_check) > 0){
       echo "user exists. go to mail page !!!!";
      } else {
            echo "verify data";
      }