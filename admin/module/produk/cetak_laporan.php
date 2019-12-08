<?php ob_start();


$koneksi = new mysqli("localhost","root","","db_bungarani");
$content ='
<style type="text/css">
.tabel{ border-collapse:collapse;}
.tabel th { padding: 10px 15px; background-color:#ff8320; color:#fff;}
.tabel td {padding:3px;}

img{width:70px;}

</style>
';

$content .='

<page>
	   <h1 align="center">Bunga Rani</h1>
       <p align="center">Alamat : ALAMATNYA DISINI</p>
       <hr>
    
		<div style="padding:20px 0 10px 0; font-size:15px;">Laporan Data Anggota</div>

		<table border="1px" class="tabel">
	<tr>
       	<th>No.</th>
        <th>Nama Produk</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Kategori</th>
 
    </tr>';

$no=1;
$sql = $koneksi ->query("SELECT * from produk JOIN kategori ON produk.id_kategori = kategori.id_kategori");
while ($data = $sql->fetch_assoc()) {
  
    $content .='
    <tr>
        <td align="center">'. $no++.'</td>    
        <td align="center">'. $data['nama_produk'].'</td>
        <td align="center"><img src="../../../asset/images/produk/'. $data['gambar'].'"></td>
        <td align="center">'.$data['harga'].'</td>
        <td align="center"> '.$data['nama_kategori'].'</td>
    </tr>
    ';
}
           
 $content .='

	</table>
</page>
    ';

require_once('../../../asset/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A3','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('cetak_data_anggota.pdf');

?>