 <?php
    //step1.get batabase connection
    require('../config/database.php');
 ?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketapp - list user </title>
</head>
<body>
        <table border= "1" align= "center">
        <tr>
            <th>fullname</td>
            <th>e-mail</td>
            <th>ide.number</td>
            <th>phone numer</td>
            <th>stastu</td>
            <th>optins</td>
        </tr>
        <?php
            sql_users = ""
         ?>
        <tr>
            <td>joe Doe</td>
            <td>joe@mail.com</td>
            <td>301818515</td>
            <td>1561231853</td>
            <td>active</td>
            <td>
                <a href="#">
                    <img src = "icons/search.png" width = "20">
                </a>
                <a href ="#">update</a>
                <a href ="#">delete</a>
            </td>
    </tr>
</table>
</body>
</html>