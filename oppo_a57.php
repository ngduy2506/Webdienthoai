<?php
session_start();
include "config.php";

include ROOT."/include/function.php";

include "autoload.php";
$db= new Db();
$cart = new Cart();
?>

<!doctype html>
<html><head>
<meta charset="utf-8">
<title>OPPO F3 Lite (A57)</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="fb:admins" content="1623591834368593"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.wm-zoom-1.0.min.css">


<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/menu_1.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/style_login_second.css" rel='stylesheet' type='text/css' />

<link href="css/style_index.css" rel="stylesheet" type="text/css" />

<!--<link href="css/style_nivo.css">-->

<!--<link rel="stylesheet" href="css/style.css">-->

<link rel="stylesheet" href="css/style_o_a57.css">
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
                                                                                                    	$ten = $chuoi[$kitu-0];

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
<div class="container bg_menu">
	<ul class="ul_menu">
		<li><a href="index.php">ĐIỆN THOẠI</a>
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
                    	<li><a href="#">Thẻ nhớ</a></li>
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
                       <li><a href="thenho.php">
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
	<div class="row">
		<div class="header_1">
			<a href="index.php">Trang chủ /</a>
			<a href="dienthoai.php">Điện thoại /</a>
			<a href="oppo.php">OPPO /</a>
			<span>OPPO F3 Lite (A57)</span>				
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container " style="background-color: white">
	<div class="row">
		<div class="col-xs-12">
			<div class="tieu_de">
				<?php
		        $obj = new Dongdt();
		        $data = $obj->getOne('OP04');
		        foreach ($data as $r) {
		       
				?>
				<h2><?php echo $r['TenDongDT']; ?></h2>
				<span>(No.00338037)</span>
			</div>
		</div>
	
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color: white">
			<div class="image">
				<!--<article class="body">
					<div class="wm-zoom-container my-zoom-1">
						<div class="wm-zoom-box">
							<img src="images/oppo_f3_plus.jpg" class="img-responsive" class="wm-zoom-default-img"  alt="alternative text" data-hight-src="images/oppo_f3_plus.jpg">
						</div>
					</div>
				</article>	-->		
				<img id="img_01" src="images/oppo_f3_plus.jpg" data-zoom-image="images/oppo_f3_plus.jpg" class="img-responsive" />			  			
			</div>
		</div>
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-color: white">
			<div class="mua_hang">
				<h2><?php echo $r['DonGia']; ?> ₫</h2>
			</div>
			<div class="thong_tin margin_top_20">
				<ul type="disc">
					<li>
						<label>Màn Hình:</label>
						<span style="display: inline-block"> 5.2", HD</span>
					</li>
					<li>
						<label>Pin:</label>
						<span> 2900 mAh, SIM: 2 SIM</span>	
					</li>
					<li>
						<label>CPU :</label>
						<span>  Snapdragon 435 8 nhân<br> 2.3 GHz</span>
					</li>
				</ul>
			</div>			
			<div class="thong_tin_2 margin_top_20" style="margin-left: 10px">
				<ul type="disc">
					<li>
						<label>Camera:</label>
						<span style="display: inline-block">13 MP, Selfie: 16 MP</span>
					</li>
					<li>
						<label>Ram:</label>
						<span> 3 GB, ROM: 32 GB</span>	
					</li>
					<li>
						<label>HĐH:</label>
						<span>Android 6.0 (Marshmallow) </span>
					</li>
				</ul>
			</div>					
		</div>
		<div  class="col-lg-5 col-md-5 col-sm-6 col-xs-12 inform " style="margin-left: 15px;">
				<div class="button">
					<p>Khuyến mại đặc biệt (SL có hạn)</p>
				</div>
				<div class="khung_inform">
				<!--	<h3>CHƯƠNG TRÌNH KHUYẾN MẠI ĐẶC BIỆT ĐẾN 22/10:KHÁCH HÀNG CHỌN 1 TRONG 2 KHUYẾN MẠI SAU:</h3>
					<h2>KM1:</h2>-->
					<ul type="disc">
						<li>Trả góp 0% (Trả trước 10%) Hoặc Giảm ngay 1,000,000đ</li>
						<li>Giảm ngay 200,000đ khi mua thẻ nhớ 32GB/Loa nấm</li>
					</ul>
					<!--<div class="clear"></div>
					<h2>KM2:</h2>
					<ul type="disc">
						<li>Trả góp 0% Hoặc 100% trúng PMH Phụ Kiện/ Dịch Vụ từ 150,000đ đến 10,000,000đ <a href="#">Xem chi tiết</a></li>
						<li>Tặng PMH Phụ Kiện 300,000đ</li>
						<li>Tặng PMH Phụ Kiện 100,000đ khi mua Online</li>
						<div class="clear"></div>
						<h2>KHÁCH HÀNG ĐƯỢC THÊM KHUYẾN MẠI:</h2>
						<li>Giảm 35% Phần mềm diệt virus Eset Mobile khi mua <a href="#">Xem chi tiết</a></li>
					</ul>-->
				</div>
				<div id="gallery_01">
					<div class="chon_mau">
						<h3>Chọn màu: </h3>
						<!--<a href="#">
							<div class="mau"></div>
						</a>-->
						<a href="javascript:void(0)" data-image="images/oppoD_f3_plus.jpg" data-zoom-image="images/oppoD_f3_plus.jpg"  width="360px" >
								<div class="mau_1"></div>
						</a>
						<a href="javascript:void(0)" data-image="images/oppoDD_f3_plus.jpg" data-zoom-image="images/oppoDD_f3_plus.jpg"  width="300px" >
							<div class="mau_2"></div>
						</a>	
				<!--		<a href="#">
							<div class="mau_3"></div>
						</a>	-->
					</div>
				</div>
				<div class="so_luong">
					<h2>Số lượng</h2>
					<input type="button" onclick="hamtru()" id="tru" value="-" size="1" >
					<input type="text"  value= "1" id="textBox" />							
					<input type="button" onclick="hamcong()" id="cong"  value="+" size="1">			
				</div>
				<div class="col-lg-12 col-md-12 col-sm-6 col-zs-12 mua_hang_1" style="margin-top: 20px;">
					<div class="dat_hang">
						<!--
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dat_hang_1">
							<button>MUA NGAY<br><span>Giao tận nơi hoặc nhận ở shop</span> 
							</button>
						</div>
						-->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dat_hang_2">
							<button onclick="self.location.href='giohang.php?ac=add&id=<?php echo $r["MaDongDT"];?>'">THÊM VÀO<br><span>GIỎ HÀNG</span>
							</button>
						</div>
						<?php } ?>
					</div>
					<h3> Gọi <span>0938888485</span> để được tư vấn ( miễn phí cuộc gọi )</h3>
				</div>
		</div>

	</div>
</div>
<div style="clear: both"></div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 tab_dt" style="margin-top: 10px">
			<ul class="nav nav-tabs" role="tablist">
				<li ><a href="#home" data-toggle="tab">Điện thoại tương tự</a></li>
			  	<li><a href="#profile" data-toggle="tab">Điện thoại cùng hãng</a></li>
			</ul>
			<div class="tab-content" style="margin-top: 20px">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/ip7_k.png">
							<h5>iPhone 8 64GB</h5>
							<strong>20.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_2.png">
							<h5>Vivo V7 Plus</h5>
							<strong>7.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_3.png">
							<h5>Sony Xperia XA1 Plus</h5>
							<strong>7.190.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_4.png">
							<h5>OPPO F3</h5>
							<strong>6.990.000 ₫</strong>
						</a>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="oppo_a57.php">
							<img src="images/oppoa15p.png">
							<h5>Oppo A57</h5>
							<strong>3.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/oppoa94p.jpg">
							<h5>Oppo A94</h5>
							<strong>7.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/opporeno3p.png">
							<h5>Oppo Reno 3</h5>
							<strong>9.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/opporeno5p.jpg">
							<h5>Oppo Reno 5</h5>
							<strong>8.499.000 ₫</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 thong_so">
			<h3>Thông số kỹ thuật của OPPO F3 Lite (A57)</h3>
			<div class="thong_tin">
				<h4>Bộ nhớ & Lưu trữ</h4>
				<ul class="show_tt">
					<li>
						<label>Chipset :</label>
						<span>	Qualcomm MSM8940</span>
					</li>
					<li>
						<label>RAM :</label>
						<span> 3 GB</span>
					</li>
					<li>
						<label>GPU :</label>
						<span>KAdreno 505</span>
					</li>
					<li>
						<label>Kích thước :</label>
						<span>149.1 x 72.9 x 7.65 mm</span>
					</li>
					<li>
						<label>CPU : </label>
						<span> Octa-core 1.4 GHz</span>
					</li>
					<h4>Kết nối & Cổng giao tiếp</h4>
					<li>
						<label>NFC :</label>
						<span>Có</span>
					</li>
					<li>
						<label>Băng tần 2G :</label>
						<span> 	GSM 850 / 900 / 1800 / 1900</span>
					</li>
				</ul>
			</div>
		</div> 
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 tin_tuc" style="margin-top: 10px">	
			<div class="nd_tt">
				<h2>Bài viết về OPPO F3 Lite (A57)</h2>
				<div class="inform_tt">
					<ul>
						<li>
							<a href="#"><img src="images/oppo_1.jpg" class="img-responsive">
								<h3>Có 13 triệu trong tay, chọn mua smartphone nào là hợp lý nhất?</h3>
							</a>
						</li>
						<li>
							<a href="#"><img src="images/oppo_2.jpg" class="img-responsive h_1">
								<h3>Smartphone màn hình 6”, chip Snapdragon 653, camera selfie kép, ngày cuối cùng giảm giá mạnh</h3>
							</a>							
						</li>
						<li>
							<a href="#"><img src="images/ip7_3.png" class="img-responsive h_1">
								<h3>Apple ngưng bán iPhone 7 256GB để dễ bán iPhone 8 hơn</h3>
							</a>							
						</li>

						<li>
							<a href="#"><img src="images/a5_4.jpg " class="img-responsive h_1">
								<h3>Phải chăng smartphone cao cấp đang ngày càng trở nên mắc tiền hơn?</h3>
							</a>					
							<a href="index.php">Xem tất cả</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="container">
	<div class="fb-comments" data-href="https://www.facebook.com/%C4%90eaniphone-107849617650919"></div>
</div>
<div class="container">
   <div class="footer margin_top_20">
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
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/jquery.wm-zoom-1.0.min.js"></script>
<!--<script type="text/javascript">
	$(document).ready(function()
		{
			$('.my-zoom-1').WMZoom();
		});
</script>-->

<script src="js/jquery-3.2.1.slim.js"></script>
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>

<script>
	//initiate the plugin and pass the id of the div containing gallery images
$("#img_01").elevateZoom({constrainType:"height", constrainSize:360, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#gallery_01").bind("click", function(e) {  
  var ez =   $('#gallery_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1623591834368593';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!---------Số lượng------------->

<script language="javascript">

	function hamcong()
	{
		var t = document.getElementById("textBox").value;
		document.getElementById("textBox").value=parseInt(t)+1;
	}
	function hamtru()
	{
		t =document.getElementById("textBox").value;
		if(t>1)
		{
			document.getElementById("textBox").value=parseInt(t)-1;
		}	
	}
	</script>
</body>
</html>
