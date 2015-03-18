<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$lokasi = mysql_query("select * from datagis");
while($l=mysql_fetch_array($lokasi)){
    echo "<a href=\"javascript:setpeta(".$l['x'].",".$l['y'].",".$l['nomor'].")\">".$l['namalokasi']."</a><br>\n";
    echo "<span id=\"".$l['nomor']."\" style=\"display:none\">".$l['deskripsi']."</span>\n";
}
?>