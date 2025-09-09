    <?php
    //step1
    require('../config/database.php');
    //step2
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $m_number = $_POST['mnumber'];
    $id_number= $_POST['idnumber'];
    $e_mail = $_POST['email'];
    $p_wd = $_POST['passwd'];
    
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
                '$p_wd'
                ) "; 
    //step4
    $res = pg_query($conn,$query);

    //step5
    if($res){
        echo "user has been created successfully !!!";
    }else{
        echo "somenthing wrong!";
    }
    
    ?>
  