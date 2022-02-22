<?php
include "config.php";
include "autoload.php";
$obj = new Nhanvien();
$ob = new Khachhang();
session_start();
if(isset($_POST['sm']))
{
	$un = $_POST["un"];
	$pw = md5($_POST["pw"]);
  $un = strip_tags($un);
  $un = addslashes($un);
  $pw = strip_tags($pw);
  $pw = addslashes($pw);
	if($un=="")
	{
      echo "Vui lòng nhập username!";

	}
  else if($pw=="")
  {
     echo "Vui lòng nhập mật khẩu!";
  }
  else
  {
    $o2 = $obj->getByOne($un, $pw);
    $o1 = $ob->getByOne($un, $pw);
    foreach ($o2 as $v) 
    {
		  if($v['UserName']==$un && $v['MatKhau']==$pw)
		  {
		  	$_SESSION["loginback"] = $obj->queryLogin($un, $pw);
		    header("location:index_backend.php");
		  } 
		}

    foreach ($o1 as $v) 
    {
      if($v['Email']==$un && $v['MatKhau']==$pw)
      {
        $_SESSION["loginfront"] = $ob->queryLogin($un, $pw);
        header("location:index.php"); 
      } 
    }

     /*echo "<p style='color:red;'>Thông tin đăng nhập sai</p>";*/
     $message = "Tài khoản hoặc Mật khẩu không đúng!\\nVui lòng kiểm tra lại!";
      echo "<script type='text/javascript'>alert('$message');</script>";     
   }

   /*else
    {
      $o2 = $obj->getByOne($un, $pw);
      foreach ($o2 as $v) 
      {
        if($v['UserName']==$un && $v['MatKhau']==$pw)
        {
          $_SESSION["un"] = $un;
          header("location:index_backend.php");
          echo "<p style='color:red;'>Đăng nhập thành công</p>";
        } 
      }

      echo "<p style='color:red;'>Thông tin đăng nhập sai</p>";     
    }*/
}


?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style_login.css" rel='stylesheet' type='text/css' />
</head>
<body>


<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/login1.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Tài Khoản</b></label>
      <input type="text" placeholder="Nhập Email hoặc UserName" name="un" required>

      <label><b>Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" name="pw" required>
        
      <button type="submit" name="sm">Đăng Nhập</button>
      <input type="checkbox">Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
      <span class="psw"><a href="#">Quên mật khẩu?</a></span>
    </div>
  </form>
</div>

