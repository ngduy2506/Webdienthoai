<?php
  include "config.php";
  include "autoload.php";
  $obj = new Khachhang();
  $o1 = new Khachhang();
  function checkEmail($string)
  {
  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
   return true;
  return false; 
  }
  if (isset($_POST["sm"]))
  {
    $email= $_POST['email'];
    $ma= $obj->chuoiTuDong();
    $psw = md5($_POST["psw"]);
    $pswr = md5($_POST["psw-repeat"]);
    if($email=="")
    {
      echo "Vui lòng nhập email!";
    }
    else if($psw=="")
    {
      echo "Vui lòng nhập mật khẩu!";
    }
    else if($pswr=="")
    {
      echo "Vui lòng nhập lại mật khẩu!";
    }
    else if ($psw!=$pswr) {
      $message = "Mật khẩu nhập lại không trùng!\\nVui lòng kiểm tra lại!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else if (checkEmail($email)==false){
      //echo "Định dạng email sai!<br>";
            $message = "Định dạng email sai!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
      $q = $o1->getAll();
      foreach($q as $v)
      {
        if($v['Email']==$email)
        {
            //echo "Tài khoản đã tồn tại"
            $message = "Tài khoản đã tồn tại!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        }
        else
          $data = $obj->insert($ma, NULL ,$email, $psw, NULL, NULL, NULL);
        header("location:index.php");
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/style_register.css" rel='stylesheet' type='text/css' />
</head>
<body>
<!-- Button to open the modal
<button onclick="document.getElementById('id01').style.display='block'">Đăng ký</button> -->

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/signup.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Nhập Email" name="email" value="<?php echo '';?>" required>

      <label><b>Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" minlength="6" maxlength="8" name="psw" required>

      <label><b>Nhập Lại Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Lại Mật Khẩu" minlength="6" maxlength="8" name="psw-repeat" required>
      <input type="checkbox" >Remember me
      <p>Bằng việc đăng kí, bạn đã đồng ý với chúng tôi về <a href="#">Điều khoản dịch vụ & Chính sách bảo mật</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
        <button type="submit" name="sm" class="signupbtn">Đăng Ký</button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>