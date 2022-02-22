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
<div class="container" style="margin-top: 20px">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 line_left">
			<a href="index.php"><h2>ĐIỆN THOẠI ĐƯỢC QUAN TÂM</h2></a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 line_right">
			<a href="dienthoai.php"><p>Xem tất cả</p></a>
		</div>
	</div>
</div>
<div class="container bg_content" style="margin-top: 35px">
	<div class="row content_1">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="SS_N8.php">
				<img src="images/content_1.jpg" >
				<h3>Samsung Galaxy Note 8</h3>
				<strong class="tien">22.490.000 ₫</strong>
				<div class="coupon">
					<span>Trả góp 0%</span>
				</div>
				<figure class="content_figure">
					<span class="slogan">Samsung Galaxy Note 8</span>
					<strong>5.490.000 ₫</strong>
					<div class="promotion">
						<span>  Cơ hội trúng xe SH150i (áp dụng tại Smart Store 245 Lê Văn Việt,Phường TNPA,TP.Thủ Đức)</span>
					</div>
					<span>Màn hình: 6.3", Quad HD (2K)</span>
					<span>HĐH: Android 7.1</span>
					<span>CPU: Exynos 8895 8 nhân</span>
					<span>RAM: 3 GB, ROM: 32 GB</span>
					<span>Camera: 2 camera 12 MP, Selfie: 8 MP</span>
					<span>PIN: 3600mAh</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="oppo_a57.php">
				<img src="images/content_2.jpg" class="img-responsive">
				<h3 style="margin-top: 20px">OPPO F3 Lite (A57)</h3>
				<strong class="tien">5.490.000 ₫</strong>
				<figure class="content_figure">
					<span class="slogan">OPPO F3 Lite (A57)</span>
					<strong>5.490.000 ₫</strong>
					<span>Màn hình: 5.2", HD</span>
					<span>HĐH: Android 6.0 (Marshmallow)</span>
					<span>CPU: Snapdragon 435 8 nhân</span>
					<span>RAM: 3 GB, ROM: 32 GB</span>
					<span>Camera: 13 MP, Selfie: 16 MP</span>
					<span>PIN: 2900 mAh, SIM: 2 SIM</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="oppo_f1_plus.php">
				<img src="images/content_3.png" class="img-responsive">
				<h3 style="margin-top: 20px">Oppo F1 Plus</h3>
				<strong class="tien">6.490.000 ₫</strong>
				
				<figure class="content_figure">
					<span class="slogan">Oppo F1 Plus</span>
					<strong>6.490.000 ₫</strong>
					<div class="promotion">
						<span>   Cơ hội trúng tiền mặt 50 triệu hoặc Tivi Panasonic 55 từ chủ Store Ngọc Duy</span>
					</div>	
					<span>Màn hình:  5.5 inch (1920 x 1080 pixels)</span>
					<span>HĐH: Android 5.1 (Marshmallow)</span>
					<span>CPU: MediaTek MT6755, 8 Nhân, Octa-core 2.0 GHz</span>
					<span>RAM: 4 GB</span>
					<span>Camera: Chính: 13.0 MP, Phụ: 16.0 MP</span>
					<span>PIN: Li-ion 2850 mAh</span>
				</figure>
			</a>
		</div>
	</div>
</div>
<div class="container bg_content margin_top_50">
	<div class="row content_1">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="IP8.php">
				<img src="images/content_4.png" >
				<h3>iPhone 8 Plus 64GB </h3>
				<strong class="tien">23.990.000 ₫</strong>
				<div class="coupon">
					<span>Trả góp 0%</span>
				</div>
				<figure class="content_figure">
					<span class="slogan">iPhone 8 Plus 64GB </span>
					<strong>23.990.000₫</strong>
					<div class="promotion">
						<span>   Giảm ngay 1.000.000đ khi thanh toán trực tuyến</span>
					</div>
					<span>Màn hình: 5.5", Retina HD</span>
					<span>HĐH: iOS 11</span>
					<span>CPU: Apple A11 Bionic 6 nhân</span>
					<span>RAM: 3 GB, ROM: 64 GB</span>
					<span>Camera: 2 camera 12 MP, Selfie: 7 MP</span>
					<span>PIN: 2691 mAh</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="IP6s_32.php">
				<img src="images/content_5.jpg" class="img-responsive">
				<h3 style="margin-top: 20px">iPhone 6s Plus 32GB</h3>
				<strong class="tien">14.499.000 ₫</strong>
				<div class="coupon">
					<span>Trả góp 0%</span>
				</div>
				<figure class="content_figure">
					<span class="slogan">iPhone 6s Plus 32GB</span>
					<strong>14.499.000 ₫</strong>
					<div class="promotion">
						<span> Cơ hội trúng xe Honda SH150i</span>
					</div>
					<span>Màn Hình: 5.5 inch, 1080 x 1920 pixels</span>
					<span>HĐH: iOS 10</span>
					<span>CPU: Apple A9, 2 Nhân, Dual-core 1.8 GHz</span>
					<span>RAM: 2 GB</span>
					<span>Camera: 12.0 MP/ 5.0MP </span>
					<span>PIN: lithium-ion battery 2750mAh</span>
				</figure>
			</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 content_img">
			<a href="SS_A5.php">
				<img src="images/content_6.jpg" class="img-responsive">
				<h3 style="margin-top: 20px">Samsung Galaxy A5</h3>
				<strong class="tien">7.990.000 ₫</strong>
				<figure class="content_figure">
					<span class="slogan">Samsung Galaxy A5 (2017)</span>
					<strong>7.990.000 ₫</strong>
					<div class="promotion">
						<span> Ốp lưng trong suốt </span>
					</div>
					<span>Màn hình: 5.2 inch (1080 x 1920 pixels) </span>
					<span>HĐH: Android 6.0 (Marshmallow)</span>
					<span>CPU: Exynos 7880, 8 Nhân, 1.9 GHz</span>
					<span>RAM: 4 GB, ROM: 32 GB</span>
					<span>Camera: Chính: 16.0 MP; Phụ: 16.0 MP</span>
					<span>PIN: Pin chuẩn Li-Ion 3000 mAh</span>
				</figure>
			</a>
		</div>
	</div>
</div>
<div class="container bg_phukien " style="margin-top: 10px;">
	<div class="row">
		<div class="phu_kien">
			<div class="nav_phukien">
				<h2>Phụ kiện giá rẻ</h2>
				<a href="#"> Ốp lưng, bao da</a>
				<a href="#">Pin sạc dự phòng</a>
				<a href="#">Cáp sạc</a>
				<a href="#">Thẻ nhớ</a>
				<a href="#">Tai nghe</a>
				<a href="#">Gậy tự sướng</a>
				<a href="#">USB</a>
				<a href="#">Chuột, bàn phím</a>
				<a href="#">Loa</a>
				<a href="#">Phụ kiện khác</a>
			</div>
		</div>
		<ul class="content_pk">
			<li>
				<a href="#">
					<img src="images/phukien_1.png">
					<h3>Combo Sạc dự phòng 5.000 mAh - Cáp Micro USB 20 cm - Thẻ nhớ 16 GB</h3>
					<strong>442.000₫</strong>
					<span>520.000₫</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/phukien_2.png">
					<h3>Pin sạc dự phòng eSaver 10.000 mAh LA Y325</h3>
					<strong style="margin-top: 22px">210.000₫</strong>
					<span>300.000₫</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/phukien_3.png">
					<h3>Loa Bluetooth Fenda W5</h3>
					<strong style="margin-top: 43px">240.000₫</strong>
					<span>400.000₫</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/phukien_4.png">
					<h3>Tai nghe nhét trong Xmobile EP-04 A</h3>
					<strong style="margin-top: 24px">51.000₫</strong>
					<span>100.000₫</span>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="images/phukien_5.png">
					<h3>Thẻ nhớ Micro SD 16 GB Class 10</h3>
					<strong style="margin-top: 24px">168.000₫</strong>
					<span>280.000₫</span>
				</a>
			</li>
			
		</ul>
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

