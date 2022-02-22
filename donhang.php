<?php
	if (!isset($_SESSION)) session_start();
	if(!isset($_SESSION["loginfront"]))
   		header("location:login.php");
   	else
   	{
	include "config.php";
	include ROOT."/include/function.php";
	include "autoload.php";
	$cart = new Cart();
	$a = new Dh();
}
/*$ac= getIndex("ac");

/*if ($ac=="cash")
{
	$quantity = getIndex("quantity", 1);
	$id = getIndex("id");

	$cart->add($id, $quantity);
	
	/*echo $id."</br>";
	echo $quantity;exit;
}
//Biến $cart được tạo từ trang chủ index.php
/*print_r($_SESSION["cart"]);exit*/		
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title> Smart Store </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="themes/default/default.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider_style.css" rel="stylesheet" type="text/css">
<!--<link href="css/style_nivo.css" rel="stylesheet" type="text/css">-->
<link href="css/style_cart.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/menu_1.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/style_login_second.css" rel='stylesheet' type='text/css' />

<link href="css/style_index.css" rel="stylesheet" type="text/css" />

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 

<!--<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>-->
</head>
<body>
 <div class="container">
  <div class="wrap">
	<div class="header">
		<div class="header_top">
		
			<div class="logo">
				<a href="index.php"><img src="images/logo.png"  /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="giohang.php" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Giỏ hàng(<span id="cart_sumary"><?php echo  $cart->getNumItem();
								?></span>)</span>
							</a>
						</div>
			    </div>
			
			   <?php
					if (!isset($_SESSION["loginfront"]))
					{
				?>
			   <div class="login">
				   <span><a href="login.php"><img src="images/login.png" alt="" title="login"/></a></span>
			   </div>
			  <a href="dangky.php"><button class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Đăng ký</button></a><?php } 
			  else
			  {
			  ?>
			  <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><span><?php  
                                                                                                    	if (isset($_SESSION["loginfront"])) {
                                                                                                    	$kitu = str_word_count($_SESSION["loginfront"]["0"]["TenKH"]);
                                                                                                    	$chuoi = explode(" ", $_SESSION["loginfront"]["0"]["TenKH"]);
                                                                                                    	/*print_r($chuoi);*/
                                                                                                    	$ten = $chuoi[$kitu];

                                                                                                        echo "Xin chào, ".$ten;
                                                                                                    }
                                                                                                        ?>
                                                                                                </span><i class="fa fa-user"></i></a>
	        		<ul class="dropdown-menu">
						
						<li class="dropdown-menu-header text-center">
							<strong>Cài đặt</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
						<li class="m_2"><a href="#"><i class="fa  fa-cog"></i> Đổi mật khẩu</a></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<?php } ?>
	 		</div>
	 	</div>
	  </div>
  </div>
</div>
<div class="container">
	<ul class="ul_menu">
		<li><a href="dienthoai.php">ĐIỆN THOẠI</a>
			<ul class="menu">
				<li><a href="apple.php">Apple</a></li>
				<li><a href="samsung.php">Samsung</a></li>
				<li><a href="oppo.php">Oppo</a></li>
				<li><a href="vivo.php">Vivo</a></li>
				<li><a href="nokia.php">Nokia</a></li>
				<li><a href="sony.php">Sony</a></li>
				<li><a href="asus.php">Asus</a></li>
				<li><a href="htc.php">Htc</a></li>
			</ul>
		</li>
  		<li><a href="pk.php">PHỤ KIỆN</a>
        	<div class="phukien">
        		<div class="content_pk">
        			<h3>Các sản phẩm phụ kiện</h3>                 
                    <ul>  
                    	<li><a href="thenho.php">Thẻ nhớ</a></li>
                        <li><a href="#">Sạc cáp</a></li>
                        <li><a href="#">Phụ kiện Apple</a></li>  
                    	<li><a href="#">Bao da ốp lưng</a></li>        
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="content_pk_2">
                    <ul>  
                    		<li><a href="#">Sạc dự phòng</a></li>                       	
                            <li><a href="#">Tai nghe</a></li>    
                            <li><a href="#">Miếng dán màn hình</a></li>
                            <li><a href="#">Phụ kiện khác</a></li>
                    </ul>
                </div>
                	<div class="content_pk_3">
        			<h3>BÁN CHẠY NHẤT</h3>                 
                    <ul class="menu_pk">  
                    	<li><a href="thenho.php">
                    		<div class="hinh">
							<img src="images/phukien_num.png">
							</div>
							<div class="nd_menu">
								<span>Loa bluetooth Rocky CR-X6</span>
								<p>599.000 ₫</p>
							</div>	
                       </a></li>
                       <li><a href="#">
                    		<div class="hinh_2">
							<img src="images/phukien_head.png">
							</div>
							<div class="nd_menu_2">
								<span>Mic Karaoke kèm loa Bluetooth và SDP </span>
								<p>750.000 ₫</p>
							</div>	
                       		</a> 
						</li>     
                    </ul>
            	</div>
            </div>
        	
        </li>
  		<li><a href="sim.php">THẺ,SIM</a></li>
   		<li><a href="doitra.php">MÁY ĐỔI TRẢ</a></li>
   		<li><a href="hc.php">HÀNG CŨ</a></li>
 		<li><a href="faq.php">KHUYẾN MÃI</a></li>
  		<li><a href="contact.php">TRẢ GÓP</a></li>
	</ul>
</div>
 <div class="container">
<?php
	$nl = date("Y-m-d");
	$ma= $a->chuoiTuDong();
	$cart->saveDonHang($ma,NULL,$_SESSION["loginfront"][0]["MaKH"],$_SESSION["loginfront"][0]["TenKH"],$_SESSION["loginfront"][0]["SDT"],NULL,0,"Chưa duyệt");
	unset($_SESSION["cart"]);
	$cart->destroy();
	echo "<span style='color:red;font-size:30px;'>Đặt hàng thành công!  </span><a href='index.php' style='color:blue;font-size:30px;text-decoration:none;'>Quay về trang chủ</a>"
	?>

</div>
  <div style="clear: both"></div>
  <div class="container">
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>GIỚI THIỆU VỀ CÔNG TY</h4>
						<ul>
						<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
						<li><a href="#">Các chính sách FPT Shop</a></li>
						<li><a href="#">Hệ thống bảo hành</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>TIN TUYỂN DỤNG</h4>
						<ul>
						<li><a href="about.php">Tin khuyến mãi</a></li>
						<li><a href="faq.php">Hướng dẫn mua online</a></li>
						<li><a href="#">Hướng dẫn mua trả góp</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>HỆ THỐNG CỬA HÀNG</h4>
						<ul>
							<li><a href="contact.php">Kiểm tra hàng Apple chính hãng</a></li>
							<li><a href="index.php">Giới thiệu máy đổi trả</a></li>
							<li><a href="#">Giới thiệu xả hàng</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 support_tt">
					<h4>
						Hỗ trợ thanh toán
						<a href="#"><img src="images/icon_visa.png"></a>
						<a href="#"><img src="images/icon_atm.png"></a>
					</h4>
						<ul>
							<li class="footer_pay">Tư vẫn miễn phí (24/7) : <span style="color: #d02c2c;">1800 6601 </span> </li>
						</ul>
						<div class="social-icons">
							<h4>LIKE & SHARE</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"></a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p> ©  2019 - 2022 Smart Store 245 Lê Văn Việt,P.TNPA,Q9,TP.Thủ Đức</p>
		   </div>
     </div>
    </div>
	  </div>

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script> 
</body>
</html>

