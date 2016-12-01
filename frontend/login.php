<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
require 'db.php';
    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $pwd=$_POST['password'];
        //连接数据uk
        //var_dump($conn);die;
        if($conn){
          $sql="select * from user where name='$name' and password='$pwd'";
           //sql="insert into good_type values (null,'$name','$pwd');
       //var_dump($sql);die;
             $result = mysql_query($sql,$conn);
             //var_dump($result);die;
             if(mysql_num_rows($result) == 1){
                 header("location: ../index.php");
             }else{
                 echo '登录失败';
             }

        }
    }else{
        require 'login.html';
    }


