<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>                                                                                                                           

<body>
    <table border="2">
        <form method="post" action="them.php">
            <tr>
                <td colspan="2" align="center">them sinh vien</td>
            </tr>
            <tr>
                <td>ma sinh vien:</td>
                <td><input type="text" name="masv" placeholder="nhap ma sinh vien" /></td>
            </tr>
            <tr>
                <td>ten sinh vien:</td>
                <td><input type="text" name="tensv" placeholder="nhap ten sinh vien" /></td>
            </tr>
            <tr>
                <td>ngay sinh sinh vien:</td>
                <td><input type="text" name="ngaysinh" placeholder="nhap ngay sinh sinh vien" /></td>
            </tr>
            <tr>
                <td>dia chi sinh vien:</td>
                <td><input type="text" name="diachi" placeholder="nhap dia chi sinh vien" /></td>
            </tr>
            <tr>
                <td>sdt sinh vien:</td>
                <td><input type="text" name="sdt" placeholder="nhap sdt sinh vien" /></td>
            </tr>
            <tr>
                <td>lop hoc sinh vien:</td>
                <td><input type="text" name="lophoc" placeholder="nhap lop hoc sinh vien" /></td>
            </tr>
            <tr>
                <td>mon hoc sinh vien:</td>
                <td><input type="text" name="monhoc" placeholder="nhap mon hoc sinh vien" /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn-sub" text="them sinh vien">
                </td>
                <td>
                    <button>huy</button>
                </td>
            </tr>
        </form>
    </table>
    <?php
    if (isset($_POST['btn-sub'])) {
        if (!empty($_POST['masv']) && !empty($_POST['tensv']) && !empty($_POST['ngaysinh']) && !empty($_POST['diachi']) && !empty($_POST['sdt']) && !empty($_POST['lophoc']) && !empty($_POST['monhoc'])) {
            $doc = new DOMDocument();
            $doc->load('SinhVien.xml');
            $dssinhvien = $doc->getElementsByTagName("danhsachsinhvien")->item(0);
            $sinhvien = $doc->createElement("sinhvien");
            
            $masv1 = $doc->createElement("masinhvien",$_POST['masv']);
            $ten1 = $doc->createElement("tensinhvien",$_POST['tensv']);
            $ngaysinh1 = $doc->createElement("ngaysinh",$_POST['ngaysinh']);
            $diachi1 = $doc->createElement("diachi",$_POST['diachi']);
            $sdt1 = $doc->createElement("sdt",$_POST['sdt']);
            $lophoc1 = $doc->createElement("lophoc",$_POST['lophoc']);
            $monhoc1 = $doc->createElement("monhoc",$_POST['monhoc']);
            
            $sinhvien->appendChild($masv1);
            $sinhvien->appendChild($ten1);
            $sinhvien->appendChild($ngaysinh1);
            $sinhvien->appendChild($diachi1);
            $sinhvien->appendChild($sdt1);
            $sinhvien->appendChild($lophoc1);
            $sinhvien->appendChild($monhoc1);

            $dssinhvien->appendChild($sinhvien);
            $doc->formatOutput=true;
            $doc->save('SinhVien.xml');
            header("location: sinhvien.php");
        }
    }

    // cach thay
    // if(isset($_REQUEST['btn-sub'])){
    //     $xml=new DOMDocument('1.0', 'UTF-8');
    //     $xml->formatOutput=true;
    //     $xml->preserveWhiteSpace=false;
    //     $xml->load('SinhVien.xml');
    //     $root=$xml->firstChild;
    //     $dataTag=$xml->createElement("danhsachsinhvien");
    //     $dataTag->appendChild($xml->createElement("masinhvien",$_REQUEST['masv']));
    //     $dataTag->appendChild($xml->createElement("tensinhvien",$_REQUEST['tensv']));
    //     $dataTag->appendChild($xml->createElement("ngaysinh",$_REQUEST['ngaysinh']));
    //     $dataTag->appendChild($xml->createElement("diachi",$_REQUEST['diachi']));
    //     $dataTag->appendChild($xml->createElement("sdt",$_REQUEST['sdt']));
    //     $dataTag->appendChild($xml->createElement("lophoc",$_REQUEST['lophoc']));
    //     $dataTag->appendChild($xml->createElement("monhoc",$_REQUEST['monhoc']));
    //     $root->appendChild($dataTag);
    //     $xml->save('SinhVien.xml');
    //     header("location:sinhvien.php");

    // }
    ?>
</body>

</html>