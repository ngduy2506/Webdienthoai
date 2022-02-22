<?php
class Dh extends Db
{
	function getAll()
	{
		return $this->query("select * from donhang");	
	}

	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from donhang where MaDH = ? ";
		return $this->query($sql, $arr);	
	}

	function chuoiTuDong()
	{
		$ma = $this->query("select MaDH FROM donhang ORDER BY MaDH DESC LIMIT 1");
		foreach ($ma as $v)
		{
			foreach ($v as $k) 
			{
				$s = substr($k, 0, 2);
				$i = ltrim($k, $s);
				$id = $i + 1;
				if(strlen($id)<2)
				{
					$id = '0'.$id;
				}
				$madh = $s.$id;
				return $madh;
			}
		}
	}
	function insertDH($ma, $manv, $makh, $tenkh, $sdt, $nh, $tt)
	{
			$sql = "insert INTO donhang(MaDH, MaNV, MaKH, TenKH, SDT, NgayLapDH, NgayHenNhan, TrangThai)
				VALUES (:M,:V,:K,:T,:S,:L,:H,:R)";
			/*$temp = new Db();*/
			$nl = date("Y-m-d");
			$arr = array(":M"=> $ma, ":V"=> $manv, ":K"=> $makh, ":T"=> $tenkh, ":S"=> $sdt, ":L"=> $nl, ":H"=> $nh, ":R"=> $tt);
			return $this->query($sql,$arr);
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from donhang where MaDH like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $manv, $makh, $tenkh, $sdt, $nl, $nh, $ttt, $tt)
	{
		$sql ="insert into donhang(MaDH, MaNV, MaKH, TenKH, SDT, NgayLapDH, NgayHenNhan, TongThanhTien, TrangThai) ";
		$sql .=" values(?,?,?,?,?,?,?,?,?)";
		$arr = array($ma, $manv, $makh, $tenkh, $sdt, $nl, $nh, $ttt, $tt);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from donhang where MaDH= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $manv, $makh, $tenkh, $sdt, $nl, $nh, $ttt, $tt)
	{
		$sql="update donhang set 	MaNV= :N,
									MaKH= :K,
									TenKH= :T,
									SDT= :S,
									NgayLapDH= :L,
									NgayHenNhan= :H,
									TongThanhTien= :G, 
									TrangThai= :I
									where MaDH= :M ";
		$arr = array(":M"=> $ma, ":N"=> $manv, ":K"=> $makh, ":T"=> $tenkh, ":S"=> $sdt, ":L"=> $nl, ":H"=> $nh, ":G"=> $ttt, ":I"=> $tt);
		return $this->query($sql, $arr);
	}
}