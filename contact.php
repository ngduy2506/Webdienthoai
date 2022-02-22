<?php
session_start();
include "config.php";

include ROOT."/include/function.php";

include "autoload.php";
$db= new Db();
$obj = new Dongdt();
$cart = new Cart();
?>

<!--A Design by thuhuong.fpt
Author: thuhuong.fpt

-->
<!DOCTYPE HTML>
<head>
<title> Smart Store </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="themes/default/default.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider_style.css" rel="stylesheet" type="text/css">
<!--<link href="css/style_nivo.css" rel="stylesheet" type="text/css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/menu_1.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/style_login_second.css" rel='stylesheet' type='text/css' />

<link href="css/style_index.css" rel="stylesheet" type="text/css" />

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->


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
	<div id="wrapper" style="margin-top: 10px">
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<img src="images/banner_1.png"  />
				<img src="images/banner_2.png"  />
				<img src="images/banner_3.png"  />
				<img src="images/banner_4.png"  />
			</div>
		</div>
	</div>
</div>	 
<div class="container">
<div class=" bg_icon">
	<div class="row">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" >
			<div class="item active">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
					<img src="images/icon_apple.png" class="img-responsive icon_a">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_samsung.png" class="img-responsive icon_s">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_oppo.png" class="img-responsive icon_o">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_sony.png" class="img-responsive icon_s">
				</div>
			</div>
			<div class="item">
				<div class="col-xs-3">
					<img src="images/icon_nokia.png" class="img-responsive icon_n">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_vivo.png" class="img-responsive icon_v">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_xiao.png" class="img-responsive icon_x">
				</div>
				<div class="col-xs-3">
					<img src="images/icon_asus.png" class="img-responsive icon_as">
				</div>
			</div>
		  </div>
	   </div>		
	</div>
	</div>
</div>
<div class="container bg_content" style="margin-top: 35px">
	<div class="row content_1">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="#">
				<img src="images/12promax.png" >
				<h3>iPhone 12 Pro Max 256GB</h3>
				<strong class="tien">29.990.000 ₫</strong>
				<div class="coupon">
					<span>Lãi suất 3.2%</span>
				</div>
				<figure class="content_figure">
					<span class="slogan">iPhone 12 Pro Max 256GB</span>
					<strong>29.990.000 ₫</strong>
					<div class="promotion">
						<span>Trả góp 12 tháng</span>
					</div>
					<span>Màn hình:6.7", Super Retina XDR, OLED, 2778 x 1284 Pixel </span>
					<span>HĐH: iOS 14</span>
					<span>CPU: A14 Bionic</span>
					<span>RAM: 8 GB</span>
					<span>Camera: chính: 12.0 MP; 2 Camera phụ: 12.0 MP,Cảm biến LiDAR</span>
					<span>PIN:lithium-ion battery 3687 mAh</span>
					<span>PIN: 4000 mAh</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="#">
				<img src="images/samsungzfold3.png" class="img-responsive">
				<h3 style="margin-top: 20px">Samsung Z Fold 3</h3>
				<strong class="tien">50.0000.000 ₫</strong>
				<div class="coupon">
					<span>Lãi suất 1.8%</span>
				</div>
				<figure class="content_figure">
					<span class="slogan">Samsung Z Fold 3</span>
					<strong>50.000.000 ₫</strong>
					<div class="promotion">
						<span>Trả góp 9 tháng</span>
					</div>
					<span>Màn Hình: Dynamic AMOLED, Phụ: Super AMOLEDChính 7.59" & Phụ 6.23"Full HD+</span>
					<span>HĐH: Android 11</span>
					<span>CPU: Snapdragon 865+</span>
					<span>RAM: 16 GB, ROM: 256 GB</span>
					<span>Camera: 3 camera 12 MP, Selfie: 12 MP</span>
					<span>PIN: 4800 mAh,25 W</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="#">
				<img src="images/oppox3.png" class="img-responsive">
				<h3 style="margin-top: 20px">Samsung Note 20</h3>
				<strong class="tien">26.990.000 ₫</strong>
				<div class="coupon">
					<span>Lãi suất 1.2%</span>
				</div>
				<figure class="content_figure">
					<div class="promotion">
					</div>
					<span class="slogan">Oppo X3 Pro</span>
					<strong>26.990.000 ₫</strong>
					<div class="promotion">
						<span> Trả góp 6 tháng</span>
					</div>
					<span>Màn Hình: AMOLED6.7"Quad HD+ (2K+)</span>
					<span>HĐH: Android 11</span>
					<span>CPU: Snapdragon 888</span>
					<span>RAM: 12 GB, ROM: 256 GB</span>
					<span>Camera: chính 50 MP & phụ 50 MP, 13 MP, 3 MP, Selfie: 33 MP</span>
					<span>PIN: 4500 mAh,65 W</span>
				</figure>
			</a>
		</div>
	</div>
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
							<li class="footer_pay">Tư vấn (24/7) : <span style="color: #d02c2c;">0938888485 </span> </li>
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
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script> 
</body>
</html>