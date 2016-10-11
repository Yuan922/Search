<?php
    $db_local="140.116.39.153";
    $db_username="PROJECT";
    $db_passwd="12345";
    $db_select="moodle";

    $conn=mysql_connect($db_local,$db_username,$db_passwd);
    mysql_select_db($db_select);

    $query=mysql_query("SELECT * FROM `trans` WHERE `inEnglish` like '" . $_GET['term'] . "%'"); //預設的變數名稱是term
    $i=0;
    while($row=mysql_fetch_array($query)){
        $i++;
        if($i==6) break;
        $name[] = $row['inEnglish'];
    }
    
   
    echo json_encode($name); //輸出的格式必須是json
?>