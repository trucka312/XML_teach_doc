<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" />
    <xsl:template match="/">
        <html>
            <head>
                <title>sach.xsl</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Tac gia</td>
                        <td>Link</td>
                        <td>Ngay xuat ban</td>
                        <td>Mo ta</td>
                    </tr>
                    <xsl:for-each select="./danhsach/tentieude">
                        <tr>
                            <td>
                                <xsl:value-of select="@id" />
                            </td>
                            <td>
                                <xsl:value-of select="tacgia" />
                            </td>
                            <td>
                                <a>
                                    <xsl:attribute name="href">
                                        <xsl:value-of select="link"/>
                                    </xsl:attribute>
                                    <xsl:value-of select="tieude" />
                                </a>
                            </td>
                            <td>
                                <xsl:value-of select="ngayxuatban" />
                            </td> 
                            <td>
                                <xsl:value-of select="mota" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
