<?php
class Khachhang extends Db
{
	function getAll()
	{
		return $this->query("select * from khachhang");	
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from khachhang where MaKH = ?";
		return $this->query($sql, $arr);
	}

	function getByOne($em, $pw)
	{
		$arr = array($em, $pw);
		$sql ="select * from khachhang where Email = ? and MatKhau = ?";
		return $this->query($sql, $arr);	
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from khachhang where TenKH like ? ";
		return $this->query($sql, $arr);	
	}
	function chuoiTuDong()
	{
		$ma = $this->query("select MaKH FROM khachhang ORDER BY MaKH DESC LIMIT 1");
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
	
	function queryLogin($email,$password, $arr=array())
	{
		$sql = "select * from khachhang where Email = :email and MatKhau = :password";
		$stm = $this->conn->prepare($sql);
		$stm ->bindValue(":email",$email,PDO::PARAM_STR);
		$stm ->bindValue(":password",$password,PDO::PARAM_STR);
		$stm->execute();
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
	function insert($ma, $ten ,$em, $mk, $ns, $dc, $sdt)
	{
		$sql ="insert into khachhang(MaKH, TenKH, Email, MatKhau, NgaySinh, DiaChi, SDT) ";
		$sql .=" values(?, ?, ?, ?, ?, ?,?)";
		$arr = array($ma, $ten ,$em, $mk, $ns, $dc, $sdt);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from khachhang where MaKH= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $ten ,$em, $mk, $ns, $dc, $sdt)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten, ":E"=> $em, ":K"=> $mk, ":N"=> $ns,":D"=> $dc, ":S"=> $sdt);
		$sql ="update khachhang set TenKH = :T,
									Email = :E,
									MatKhau = :K,
									NgaySinh = :N,
									DiaChi = :D,
									SDT = :S
									where MaKH= :M ";
		/*echo "<pre>";
		print_r($arr);
		echo $sql;exit;*/
		return $this->query($sql, $arr);
	}
}