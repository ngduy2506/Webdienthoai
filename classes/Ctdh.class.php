<?php
class Ctdh extends Db
{
	function getAll()
	{
		return $this->query("select * from chitietdonhang");	
	}

	function getDH($ma)
	{
		$arr = array($ma);
		$sql ="select * from chitietdonhang where MaDH = ?";
		return $this->query($sql, $arr);	
	}
	function getOne($ma,$imei)
	{
		$arr = array($ma,$imei);
		$sql ="select * from chitietdonhang where MaDH = ? and IMEI= ?";
		return $this->query($sql, $arr);	
	}
	
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from chitietdonhang where MaDH like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $imei, $ten, $ms, $sl, $dg, $tt)
	{
		$sql ="insert into chitietdonhang(MaDH, IMEI, TenDongDT, MauSac, SoLuong, DonGia)";
		$sql .=" values(?,?,?,?,?,?)";
		$arr = array($ma, $imei, $ten, $ms, $sl, $dg);
		return $this->query($sql, $arr);	
		
	}

	function delete($ma,$imei)
	{
		$sql="delete from chitietdonhang where MaDH= ? and IMEI= ?";
		$arr = array($ma,$imei);
		return $this->query($sql, $arr);
	}

	function update($ma, $imei, $ten, $ms, $sl, $dg)
	{
		$sql="update chitietdonhang set 	IMEI= :I,
												TenDongDT= :T,
												MauSac= :S,
												SoLuong= :L,
												DonGia= :D
												where MaDH= :M ";
		$arr = array(":M"=> $ma, ":I"=> $imei, ":T"=> $ten, ":S"=> $ms, ":L"=> $sl, ":D"=> $dg);
		/*echo "<pre>";
		print_r($arr);
		echo $sql;exit;*/
		return $this->query($sql, $arr);
	}
}