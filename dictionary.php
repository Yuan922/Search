<?php   
 $dbhost = '140.116.39.153';   
 $dbuser = 'PROJECT';   
 $dbpass = '12345';   
 $dbname = 'moodle';
 $conn =  new mysqli($dbhost, $dbuser, $dbpass, $dbname) ;

 if(mysqli_connect_errno($conn)){
  print("error");
  exit();
 }

mysqli_query($conn,"SET NAMES 'utf8'");
$ans = $_POST['English'];
$query = " SELECT  inEnglish,inChinese FROM trans WHERE inEnglish ='$ans' " ;
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));//前面是連線成功的物件,後面是查詢的語法
//mysqli_fetch_row($result);//將符合的結果一次顯示一條;
list($data[0],$data[1]) = mysqli_fetch_row($result);//回傳陣列的值,如果用list($English)會變成陣列的個別元素
//echo $English;
//$str = "ABC";
echo json_encode($data);//這裏不太了解跟list~
//echo $ans;
?>


