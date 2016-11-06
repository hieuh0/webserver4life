<?php
function danhsachdm(){
	$qr = "SELECT * FROM danh_muc ";
	return mysql_query($qr);
}
function loaidm(){
	$qr = "SELECT * FROM  danh_muc,loai_dm WHERE danh_muc.ID_DM= loai_dm.ID_DM ORDER BY AnHien DESC";
	return mysql_query($qr);
}
function chitietloaidm($id){
	$qr = "SELECT * FROM loai_dm WHERE ID_LOAI='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function sanpham(){
	$qr = "SELECT * FROM  san_pham  ORDER BY AnHien DESC";
	return mysql_query($qr);
}

function chitietsanpham($id){
	$qr = "SELECT * FROM  san_pham WHERE ID_SP='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function danhsachsanpham(){
	$qr = "SELECT * FROM  san_pham";
	return mysql_query($qr);
}
function thanhvien(){
	$qr = "SELECT * FROM thanh_vien";
	return mysql_query($qr);
}

function chitietthanhvien($id){
	$qr = "SELECT * FROM thanh_vien WHERE ID_TV='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function admin(){
	$qr = "SELECT * FROM admin";
	return mysql_query($qr);
}
function khuyenmai(){
	$qr = "SELECT * FROM khuyen_mai";
	return mysql_query($qr);
}
function chitietloai($id){
	$qr = "SELECT * FROM loai_dm WHERE ID_LOAI='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}
function chitietsp($id){
	$qr = "SELECT * FROM san_pham WHERE ID_SP='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}
function tintuc(){
	$qr = "SELECT * FROM tintuc";
	return mysql_query($qr);
}
function hoadon($trangthai){
	$qr = "SELECT * FROM hoa_don WHERE TRANGTHAI='$trangthai'";
	return mysql_query($qr);
}
function chitiethd($id){
	$qr = "SELECT * FROM hoa_don WHERE ID_HD='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function danhsachcomment(){
	$qr = "SELECT * FROM binh_luan";
	return mysql_query($qr);
}

function chitiettintuc($id){
	$qr = "SELECT * FROM tintuc WHERE ID='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function hinhchitiet(){
	$qr = "SELECT * FROM chitietsp";
	return mysql_query($qr);
}
function hoadonthanhvien($idtv){
	$qr = "SELECT * FROM hoa_don WHERE 	ID_TV='$idtv'";
	return mysql_query($qr);
}

function chitietadmin($id){
	$qr = "SELECT * FROM admin WHERE ID_AD='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}
function chitiethinh($id){
	$qr = "SELECT * FROM chitietsp WHERE ID_CT='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);
}

function tongtienthanhvien($id){
	$qr = "SELECT SUM(TONGTIEN) AS TongTien FROM hoa_don WHERE ID_TV='$id' AND TRANGTHAI=2";
	mysql_query($qr);
}
function gethoadontheoid($id){
	$qr = "SELECT * FROM chitiethd WHERE ID_HD='$id'";
return	mysql_query($qr);
}
?>
