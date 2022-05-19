<?php

if( $_POST["submit"] == "登录"){       // 判断提交的按钮名称是否为“登录”

 // 使用 echo 语句输出使用 $_POST[] 方法获取的用户名和密码

 echo "用户名为:". $_POST['user'] . "<br >密码为:" . $_POST['pwd'];

}

?>