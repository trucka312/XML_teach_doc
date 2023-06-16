<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align ="center">
        <?php
            $doc = new DOMDocument();
            $doc->load('nhanvien.xml');
            $dsnhanvien = $doc->getElementsByTagName("DanhSachNV");
            echo "<tr background: ><th> Mã nhân viên </th> <th> Tên nhân viên </th> <th> Ngày sinh </th> <th> Địa chỉ </th> <th> Năm tuyển dụng </th> <th> Lương </th> <th> Chức vụ</th> </tr>";
            foreach($dsnhanvien as $nhanvien)
            {
                $manv = $nhanvien->getElementsByTagName("MNV")->item(0)->nodeValue;
                $tennv = $nhanvien->getElementsByTagName("tennhanvien")->item(0)->nodeValue;
                $ngaysinh = $nhanvien->getElementsByTagName("ngaysinh")->item(0)->nodeValue;
                $diachi = $nhanvien->getElementsByTagName("diachi")->item(0)->nodeValue;
                $namtuyendung = $nhanvien->getElementsByTagName("namtuyendung")->item(0)->nodeValue;
                $luong = $nhanvien->getElementsByTagName("luong")->item(0)->nodeValue;
                $chucvu = $nhanvien->getElementsByTagName("chucvu")->item(0)->nodeValue;
                echo "<tr><td>$manv</td> <td>$tennv</td> <td>$ngaysinh</td> <td>$diachi</td> <td>$namtuyendung</td> <td>$luong</td> <td>$chucvu</td></tr>";

            }



?>
    </table>
    <div class="class-btn" align = "center" style="margin-top: 10px;">
            <button class = "button" type = "submit"><a href="./ADD.php">ADD</a></button>
            <button class = "button" type = "submit"><a href="./export.php">Xuất file JSON</a></button>
            <button class = "button" type = "submit"><a href="./danhsachnhanvien.php">Danh sách sinh viên</a></button>

    </div>
    <
</body>

</html>