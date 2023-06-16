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
                <td colspan="2" align="center">them sach </td>
            </tr>
            <tr>
                <td>author:</td>
                <td><input type="text" name="author" placeholder="nhap author" /></td>
            </tr>
            <tr>
                <td>title:</td>
                <td><input type="text" name="title" placeholder="nhap title" /></td>
            </tr>
            <tr>
                <td>genre:</td>
                <td><input type="text" name="genre" placeholder="genre" /></td>
            </tr>
            <tr>
                <td>price:</td>
                <td><input type="text" name="price" placeholder="price" /></td>
            </tr>
            <tr>
                <td>publish_date:</td>
                <td><input type="text" name="publish_date" placeholder="publish_date" /></td>
            </tr>
            <tr>
                <td>description:</td>
                <td><input type="text" name="description" placeholder="description" /></td>
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
        if (!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['price']) && !empty($_POST['publish_date']) && !empty($_POST['description']) ) {
            $doc = new DOMDocument();
            $doc->load('books.xml');
            $dssinhvien = $doc->getElementsByTagName("catalog")->item(0);
            $sinhvien = $doc->createElement("book");
            
            $masv1 = $doc->createElement("author",$_POST['author']);
            $ten1 = $doc->createElement("title",$_POST['title']);
            $ngaysinh1 = $doc->createElement("genre",$_POST['genre']);
            $diachi1 = $doc->createElement("price",$_POST['price']);
            $sdt1 = $doc->createElement("publish_date",$_POST['publish_date']);
            $lophoc1 = $doc->createElement("description",$_POST['description']);
            
            $sinhvien->appendChild($masv1);
            $sinhvien->appendChild($ten1);
            $sinhvien->appendChild($ngaysinh1);
            $sinhvien->appendChild($diachi1);
            $sinhvien->appendChild($sdt1);
            $sinhvien->appendChild($lophoc1);

            $dssinhvien->appendChild($sinhvien);
            $doc->formatOutput=true;
            $doc->save('books.xml');
            header("location: index.php");
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