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
       	<th>Id pembayaran</th>
        <th>Id Pemesanan</th>
        <th>Tgl Pesan</th>
        <th>Tgl Bayar</th>
        <th>Nama Produk</th>
        <th>harga</th>
        <th>quantity</th>
        <th>sub_total</th>
 
    </tr>';

$no=1;
$total = 0;
$sql = $koneksi ->query("SELECT pesanan.Id_pesanan,pesanan.Tgl_pesanan,pembayaran.Tgl_pembayaran,produk.nama_produk,detail_pesanan.quantity,detail_pesanan.harga from pesanan JOIN pembayaran ON pesanan.id_pesanan = pembayaran.Id_pesanan JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan JOIN produk ON detail_pesanan.id_produk = produk.id_produk WHERE pembayaran.Status = 'sudah'");
while ($data = $sql->fetch_assoc()) {
    $sub_total = $data['quantity']*$data['harga'];
    $total = $total + $sub_total;
    $content .='
    <tr>
        <td align="center">'. $no.'</td>    
        <td align="center">'. $data['Id_pesanan'].'</td>
        <td align="center">'.$data['Tgl_pesanan'].'</td>
        <td align="center"> '.$data['Tgl_pembayaran'].'</td>
        <td align="center"> '.$data['nama_produk'].'</td>
        <td align="center"> '.$data['harga'].'</td>
        <td align="center"> '.$data['quantity'].'</td>
        <td align="center"> '.$sub_total.'</td>
    </tr>
    ';
    $no++;
}
           
 $content .='
<tr>
    <td colspan="7">TOTAL : </td>
    <td align="center">'.$total.'</td>
</tr>
	</table>
</page>
    ';

require_once('../../../asset/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A3','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('cetak_data_anggota.pdf');

?>