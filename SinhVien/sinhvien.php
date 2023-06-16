<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align="center">
        <?php
        $doc = new DOMDocument();
        $doc->load('sinhvien.xml');
        $dssinhvien = $doc->getElementsByTagName("sinhvien");
        echo "<tr background:><th>mssv</th><th>tên sinh vien</th><th>ngày sinh</th><th>địa chỉ</th><th>số điện thoại</th><th>lớp</th><th>môn học</th></tr>";
        foreach ($dssinhvien as $sinhvien)
        {
            $masv = $sinhvien->getElementsByTagName("masinhvien")->item(0)->nodeValue;
            $tensv = $sinhvien->getElementsByTagName("tensinhvien")->item(0)->nodeValue;
            $ngaysinh = $sinhvien->getElementsByTagName("ngaysinh")->item(0)->nodeValue;
            $diachi = $sinhvien->getElementsByTagName("diachi")->item(0)->nodeValue;
            $sdt = $sinhvien->getElementsByTagName("sdt")->item(0)->nodeValue;
            $lop = $sinhvien->getElementsByTagName("lophoc")->item(0)->nodeValue;
            $mon = $sinhvien->getElementsByTagName("monhoc")->item(0)->nodeValue;
            echo "<tr><td>$masv</td><td>$tensv</td><td>$ngaysinh</td><td>$diachi</td><td>$sdt</td><td>$lop</td><td>$mon</td></tr>";
        } ?>
    </table>
    <div class="class-btn" align="center">
        <button class="button" type="submit">
            <a href="them.php">Them sinh vien</a>
        </button>
        <button class="button" type="submit">
            <a href="them.php">xuat file JSON</a>
        </button>
    </div>
</body>
</html>