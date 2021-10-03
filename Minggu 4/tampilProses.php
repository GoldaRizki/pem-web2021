<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form PPDB</title>
<style>
body{
    background-color: #e6e6e6;
    margin: 0;
    font-family: sans-serif;
}
table{
    width: 100%;
    margin: 50px auto;
    border-collapse: collapse;
    background-color: #99ffdd;

}tr:nth-child(even) {background-color: #f2f2f2;}
td, th{
    padding: 10px 20px;
}
</style>
</head>
<body>
    
    <div style="width: 60%; margin: 15px auto; padding: 10px;">
<table>
    <?php echo '
    <tr>
        <th colspan="2">INFO PENDAFTARAN</th>
    </tr>
    <tr>
        <td>NISN</td><td>' . $_POST["input_nisn"] . '</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td><td> '. $_POST["input_sekolah"] . '</td>
    </tr>
    <tr>
        <td>Tahun Lulus</td><td>'. $_POST["input_tahunLulus"].'</td>
    </tr>
    <tr>
        <th colspan="2">Data Calon Peserta</th>
    <tr>
        <td>Nama Lengkap</td><td>'.$_POST["input_namaPeserta"].'</td>
    </tr>
    <tr>
        <td>NIK</td><td>' .$_POST["input_NIK"] . '</td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td><td>'.$_POST["input_TTL"].'</td>
</tr>
    <tr>
 
    <td>Jenis Kelamin</td><td>'.$_POST["input_jenisKelamin"].'</td>

    </tr>
    <tr>
        <th colspan="2">Alamat</th>
    </tr>
    <tr>
        <td>Desa/Kel</td><td>' . $_POST["input_kelurahan"] . '</td>
    </tr>
    <tr>
        <td>Kecamatan</td><td>' . $_POST["input_kecamatan"] . '</td>
    </tr>
    <tr>
        <td>Kabupaten</td><td>' . $_POST["input_kota"] . '</td>
    </tr>
    <tr>
        <td>Provinsi</td><td>' . $_POST["input_provinsi"] . '</td>
    </tr>
    <tr>
        <td>Email aktif</td><td>' . $_POST["input_email"] . '</td>
    </tr>
    <tr>
        <th colspan="2">Data Orang Tua</th>
    </tr>
    
        <td>Nomor Kartu Keluarga</td><td>' . $_POST["input_nokk"] . '</td>
   
    <tr>
        <td>Nama Ayah Kandung</td><td>' . $_POST["input_namaAyah"]  . '</td>
    </tr>
    <tr>
        <td>Agama</td><td>' . $_POST["input_agamaAyah"] . '</td>
    </tr>
    <tr>
    <td>Pekerjaan</td><td>' . $_POST["input_pekerjaanAyah"] . '</td>
    </tr>
    <tr>
        <td>Nama Ibu Kandung</td><td>' . $_POST["input_namaIbu"] . '</td>
    </tr>
    <tr>
        <td>Agama</td><td>' . $_POST["input_agamaIbu"] . '</td>
    </tr>
    <tr>
    <td>Pekerjaan</td><td>' . $_POST["input_pekerjaanIbu"] . '</td>
    </tr>
    <tr>
        <th colspan="2">Alamat Orang Tua</th>
    </tr>
    <tr>
        <td>Desa/Kel</td><td>' . $_POST["input_kelurahanOrtu"] . '</td>
    </tr>
    <tr>
        <td>Kecamatan</td><td>' . $_POST["input_kecamatanOrtu"] . '</td>
    </tr>
    <tr>
        <td>Kabupaten</td><td>'  . $_POST["input_kotaOrtu"] . '</td>
    </tr>
    <tr>
        <td>Provinsi</td><td>' . $_POST["input_provinsiOrtu"] . '</td>
    </tr>';
    ?>

</table>
<input type="submit" value="Masukkan" style="padding: 10px; margin-left: 100px;">

    </div>
    </form>
</body>
</html>