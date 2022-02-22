<?php
class Nhanvien extends Db
{
	function getAll()
	{
		return $this->query("select * from nhanvien");	
	}
	
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from nhanvien where MaNV = ? ";
		return $this->query($sql, $arr);	
	}
	function getByOne($un, $pw)
	{
		$arr = array($un, $pw);
		$sql ="select * from nhanvien where UserName = ? and MatKhau = ?";
		return $this->query($sql, $arr);	
	}

	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from nhanvien where TenNV like ? ";
		return $this->query($sql, $arr);	
	}

	function chuoiTuDong()
	{
		$ma = $this->query("select MaNV FROM nhanvien ORDER BY MaNV DESC LIMIT 1");
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
	function queryLogin($user,$password, $arr=array())
	{
		$sql = "select * from nhanvien where UserName = :user and MatKhau = :password";
		$stm = $this->conn->prepare($sql);
		$stm ->bindValue(":user",$user,PDO::PARAM_STR);
		$stm ->bindValue(":password",$password,PDO::PARAM_STR);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}

	function insert($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt)
	{
		$sql ="insert into nhanvien(MaNV, TenNV, UserName, MatKhau, NgaySinh, GioiTinh, QuyenTruyCap, DiaChi, SDT) ";
		$sql .=" values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$arr = array($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from nhanvien where MaNV= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten, ":U"=> $us, ":K"=> $mk, ":N"=> $ns, ":G"=> $gt, ":Q"=> $qtc, ":D"=> $dc, ":S"=> $sdt);
		$sql ="update nhanvien set 	TenNV = :T,
									UserName = :U,
									MatKhau = :K,
									NgaySinh = :N,
									GioiTinh = :G,
									QuyenTruyCap = :Q,
									DiaChi = :D,
									SDT = :S
									where MaNV= :M ";
		return $this->query($sql, $arr);
	}
}