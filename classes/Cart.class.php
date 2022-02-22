<?php
class Cart extends Db{
	private $_cart;
	private $_num_item =0;
	public function  __construct()
	{
		if(!isset($_SESSION["cart"])) $this->_cart= array();
		else $this->_cart = $_SESSION["cart"];
		$this->_num_item = array_sum($this->_cart);
		
	}
	
	public function getNumItem()
	{
		return $this->_num_item;	
	}
	public function __destruct()
	{
		$_SESSION["cart"] = $this->_cart;	
	}

	public function destroy()
	{
		$this->_cart = array();;
		unset($_SESSION["cart"]);
	}
	public function getData()
	{
		return $this->_cart;	
	}


	/*
	Them san pham có mã $id và số lương $quantity vào giỏ hàng
	*/
	
	public function phoneExist($ma)
	{
		$sql="select * from dongdienthoai where MaDongDT = '$ma' ";
		$temp = new Db();
		$temp->queryCart($sql);
		if ($temp->getRowCount()==0)
			//print_r($temp->exeNoneQuery($sql));
		 return false;
		return true;

	}
	public function add($id, $quantity=1)
	{	
		if ($id=="" || $quantity<1) return;
		if (!$this->phoneExist($id))  return;
		
		print_r($this->_cart);		
		if (isset($this->_cart[$id]))
			$this->_cart[$id]+=	$quantity;
		else $this->_cart[$id]=	$quantity;
		$_SESSION["cart"] = $this->_cart;	
		$this->_num_item = array_sum($this->_cart);

		echo "Da them $id - $quantity ";
		echo "<script language=javascript>window.location='giohang.php';</script>";//Chuyển trình duyệt web tới trang hiển thị cart
	}
	
	public function remove($id)
	{
		unset($this->_cart[$id]);
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	public function edit($id, $quantity)
	{
		$this->_cart[$id]	= $quantity;
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}

	public function saveDonHang($ma, $manv, $makh, $tenkh, $sdt, $nh, $ttt, $tt)
	{
			$temp = new Db();
			$temp2 = new Dh();
			$temp3 = new Dongdt();
			$sql = "insert INTO donhang(MaDH, MaNV, MaKH, TenKH, SDT, NgayLapDH, NgayHenNhan, TongThanhTien, TrangThai)
				VALUES (:M,:V,:K,:T,:S,:L,:H, :G, :R)";

			$nl = date("Y-m-d H:i:s");
			$arr = array(":M"=> $ma, ":V"=> $manv, ":K"=> $makh, ":T"=> $tenkh, ":S"=> $sdt, ":L"=> $nl, ":H"=> $nh, ":G"=> $ttt, ":R"=> $tt);
			$temp->query($sql,$arr);
			$sql1 = "select * from donhang where NgayLapDH = '$nl' and MaKH = '$makh'";
			$data = $temp->query($sql1);
			foreach($this->_cart as $id=>$quantity)
			{	
				$o2 = $temp3->getDataDT($id);
				foreach($o2 as $r)
				{
					$sql = "insert INTO chitietdonhang(MaDH, IMEI, TenDongDT, MauSac, SoLuong, DonGia)
					VALUES (:M,:I,:T,:S,:L,:D)";
					$arr = array(":M"=> $data[0]["MaDH"], ":I"=> NULL, ":T"=> $r["TenDongDT"], ":S"=> "Đen", ":L"=> $quantity, ":D"=> $r["DonGia"]);
					$temp->query($sql,$arr);
				}

			}
			// $_SESSION["cart"] = $this->_cart;
			// echo "<script language=javascript>window.location='giohang.php';</script>";
	}
	
	public function show()
	{
		$obj = new Dongdt();
		$ttt = 0;
		if (Count($this->_cart)==0) 
		{	echo "<span style='font-size:25px;color:red;'>Giỏ hàng rỗng</span>";
			return;
		}
		echo "<table class='tb'><thead><tr><th>Tên dòng DT</th><th>Hình ảnh</th><th>Số lượng</th><th>Đơn giá</th><th>Giá KM</th><th>Thành tiền</th><th>Thao tác</th></tr></thead>";
		foreach($this->_cart as $id=>$quantity)
		{
			$data = $obj->getDataDT($id);
			foreach ($data as $r)
			{
				if($r["GiaKM"]>0)
				{
					$tt = $r["GiaKM"]*$quantity;
				}
				else
					$tt = $r["DonGia"]*$quantity;
				?>
				<tr>
						<td><?php echo $r["TenDongDT"];?></td>
					   	<td><img src="images/<?php echo $r["Hinh"]; ?>"/></td>
					   	<td><?php echo $quantity;?></td>
						<td><?php echo $r["DonGia"];?></td>
						<td><?php echo $r["GiaKM"];?></td>	
						<td><?php echo $tt;?></td>							
						<td><a href='giohang.php?ac=del&id=<?php echo $r["MaDongDT"];?>'>Xóa</a></td>
						</tr>
						<?php
						$ttt += $tt;
			}
		}
		echo "</table>";
		echo "<span style='font-size:20px;float:right;'>Tổng Thành Tiền : "."<span style='font-size:35px;color:red;'>".$ttt."₫</span>"."</span>";
		/*echo "<button onclick="<?php $cart->saveDonHang(NULL,$_SESSION["loginfront"][0]["MaKH"],$_SESSION["loginfront"][0]["TenKH"],$_SESSION["loginfront"][0]["SDT"],NULL,"Chưa duyệt");  header("location:donhang.php");?>">ĐẶT HÀNG
		</button>";*/
		/*echo "<button onclick='self.location.href=\"donhang.php\"'>ĐẶT HÀNG</button>";*/
		$this->setCartInfo($this->getNumItem());
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	
	function setCartInfo( $quantity=0, $id="cart_sumary")
	{
		echo "<script language=javascript> document.getElementById('$id').innerHTML =$quantity; </script>";
	}

}
?>