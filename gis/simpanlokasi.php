<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$koordinatx = $_GET['koordinatx'];
$koordinaty = $_GET['koordinaty'];
$nama = $_GET['nama'];
$des = $_GET['des'];

$masuk = mysql_query("insert into datagis values(null,$koordinatx,$koordinaty,'$nama','$des')");
if($masuk){
    $lokasi = mysql_query("select * from datagis");
    while($l=mysql_fetch_array($lokasi)){
        echo "<a href=\"javascript:setpeta(".$l['x'].",".$l['y'].",".$l['nomor'].")\">".$l['namalokasi']."</a><br>\n";
        echo "<span id=\"".$l['nomor']."\" style=\"display:none\">".$l['deskripsi']."</span>\n";
    }
}else{
    echo "gagal";
}
?>