<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// if(empty($_REQUEST['add'])){
//     $xml=new DOMDocument("1.0","UTF_8");
//     $xml->load("SinhVien.xml");

// }
// //   print($xml->saveXML());
// ?>
<body>
    <table border="2"> 
           <form action="ADD.php" method="post">
            <tr>
                <td colspan="2" align="center"> Thêm Nhân Viên</td>
            </tr>
            <tr>
                <td>Mã Nhân Vên :</td>
                <td><input type="text" name="manv" placeholder="Nhập Mã Nhân Viên"></td>
            </tr>
            <tr>
                <td>Tên Nhân Viên :</td>
                <td><input type="text" name="tennv" placeholder="Nhập Tên Nhân Viên"></td>
            </tr>
            <tr>
                <td>Ngày Sinh :</td>
                <td><input type="text" name="ngaysinh" placeholder="Nhập Ngày Sinh"></td>
            </tr>
            <tr>
                <td>Địa Chỉ :</td>
                <td><input type="text" name="diachi" placeholder="Nhập Địa Chỉ"></td>
            </tr>
            <tr>
                <td>Năm Tuyển Dụng :</td>
                <td><input type="text" name="namtuyendung" placeholder="Nhập Năm Tuyển Dụng"></td>
            </tr>
            <tr>
                <td>Lương :</td>
                <td><input type="text" name="luong" placeholder="Nhập Lương"></td>
            </tr>
            <tr>
                <td>Chức Vụ :</td>
                <td><input type="text" name="chucvu" placeholder="Nhập Chức Vụ"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
                    <input type="submit" name="add" value="Nhập Lại"/>
                    <button class="button" type="submit"><a href="./nhanvien.php">Bảng Danh Sách Nhân Viên</a></button>
                </td>
            </tr>
                               
                     
                      
           </form>
    </table>
<?php
if (isset($_REQUEST['add'])) {
    $xml = new DOMDocument("1.0", "UTF_8");
    $xml->formatOutput = TRUE;
    $xml->preserveWhiteSpace = false;
    $xml->load("nhanvien.xml");
    $root = $xml->firstChild;
    $dataTag = $xml->createElement("DanhSachNV");
    $dataTag->appendChild($xml->createElement("MNV", $_REQUEST['manv']));
    $dataTag->appendChild($xml->createElement("tennhanvien", $_REQUEST['tennv']));
    $dataTag->appendChild($xml->createElement("ngaysinh", $_REQUEST['ngaysinh']));
    $dataTag->appendChild($xml->createElement("diachi", $_REQUEST['diachi']));
    $dataTag->appendChild($xml->createElement("namtuyendung", $_REQUEST['namtuyendung']));
    $dataTag->appendChild($xml->createElement("luong", $_REQUEST['luong']));
    $dataTag->appendChild($xml->createElement("chucvu", $_REQUEST['chucvu']));
    $root->appendChild($dataTag);
    $xml->save('nhanvien.xml');
}
?>