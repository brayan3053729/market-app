    <?php
    //step1.get batabase connection
    require('../config/database.php');

    //step2.get 
    $f_name = trim ($_POST['fname']);
    $l_name = trim ($_POST['lname']);
    $m_number = trim ($_POST['mnumber']);
    $id_number= trim ($_POST['idnumber']);
    $e_mail = trim ($_POST['email']);
    $p_wd = trim ($_POST['passwd']);

    //$enc_pass = password_hash($p_wd,PASSWORD_DEFAULT);
    $enc_pass = md5($p_wd);
    
    $check_email = "
        select
            u.email 
        FROM
            users u
        WHERE
            email = '$e_mail' or ider_number =' $id_number'
        LIMIT 1            
    ";
     $res_check = pg_query($conn_supa,$check_email);
    if (pg_num_rows($res_check) > 0){
       echo"<script>alert('user already existts !! ')</script>";+
        header ('refresh:0;url=signin.html');  
    }else{
    //step3
        $query = "
            INSERt INTO users (
                firstname,
                lastname,
                mobil_number,
                ider_number,
                email,
                password
                ) VALUES (
                    '$f_name',
                    '$l_name', 
                    '$m_number', 
                    '$id_number', 
                    '$e_mail', 
                    '$enc_pass'
                    
                    ) "; 
        //step4
        $res = pg_query($conn_supa,$query);

        //step5
        if($res){
            //echo "user has been created successfully !!!";
            echo"<script>alert('succes !!! fo to  login')</script>";+
            header ('refresh:0;url=signin.html');
        }else{
            echo "somenthing wrong!";
        }
        }

    
    
    ?>
  