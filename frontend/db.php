<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');
    $host='localhost';
    $db_name='siyinongmu';
    $username='root';
    $password='root';
    $conn= mysql_connect($host, $username, $password);
    mysql_select_db($db_name,$conn);
    mysql_query("set names utf8");
