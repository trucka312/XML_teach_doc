<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" />
    <xsl:template match="/">
        <html>
            <head>
                <title>SinhVien.xml</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>ma so sinh vien</td>
                        <td>ten sinh vien</td>
                        <td>ngay sinh</td>
                        <td>dia chi</td>
                        <td>sdt</td>
                        <td>lop hoc</td>
                        <td>mon hoc</td>
                    </tr>
                    <xsl:for-each select="./danhsachsinhvien/sinhvien">
                        <tr>
                            <td>
                                <xsl:value-of select="masv" />
                            </td>
                            <td>
                                <xsl:value-of select="masinhvien" />
                            </td>
                            <td>
                                <xsl:value-of select="tensinhvien" />
                            </td>
                            <td>
                                <xsl:value-of select="ngaysinh"/>
                            </td>
                            <td>
                                <xsl:value-of select="diachi" />
                            </td> 
                            <td>
                                <xsl:value-of select="sdt" />
                            </td>
                            <td>
                                <xsl:value-of select="lophoc" />
                            </td> 
                            <td>
                                <xsl:value-of select="monhoc" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
