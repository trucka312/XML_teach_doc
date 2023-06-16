<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Sieu Thi</title>
            </head>
            <body>
                <center>
                    <h1>DANH SACH HANG HOA SIEU THI </h1>
                    <xsl:for-each select="/SieuThi" >
                        <h2>
                            Tên Siêu Thị
                            <xsl:value-of select="TenSieuThi" />
                        </h2>
                        <h2>
                            Địa Chỉ
                            <xsl:value-of select="DiaChi" />
                        </h2>
                        <h2>
                            Số điện thoại
                            <xsl:value-of select="SoDienThoai" />
                        </h2>
                        <table border="1" >
                            <tr>
                                <th>Mã hàng</th>
                                <th>Tên hàng</th>
                                <th>Loại Hàng </th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                            </tr>
                            <xsl:for-each select="/SieuThi/HangHoa">
                                <tr>
                                    <td>
                                        <xsl:value-of select="@MaHang"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="TenHang"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="SoLuong"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="DonGia"/>
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </table>
                    </xsl:for-each>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>