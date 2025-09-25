    <?php
    //step1.get batabase connection
    require('../config/database.php');

    //step2.get 
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $m_number = $_POST['mnumber'];
    $id_number= $_POST['idnumber'];
    $e_mail = $_POST['email'];
    $p_wd = $_POST['passwd'];

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
     $res_check = pg_query($conn,$check_email);
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
                    '$p_wd'
                    
                    ) "; 
        //step4
        $res = pg_query($conn,$query);

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
  