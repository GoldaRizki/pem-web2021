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

}input[type=text], input[type=number], input[type=email]{
    width: 100%;
    outline: none;
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
    <form action="tampilProses.php" method="POST">
    <div style="width: 60%; margin: 15px auto; padding: 10px;">
<table>
    <tr>
        <th colspan="2">INFO PENDAFTARAN</th>
    </tr>
    <tr>
        <td>NISN</td><td><input type="number" id="nisn" name="input_nisn" required></td>
    </tr>
    <tr>
        <td>Asal Sekolah</td><td><input type="text" id="sekolah" name="input_sekolah" required></td>
    </tr>
    <tr>
        <td>Tahun Lulus</td><td><input type="number" id="tahunLulus" name="input_tahunLulus" required></td>
    </tr>
    <tr>
        <th colspan="2">Data Calon Peserta</th>
    <tr>
        <td>Nama Lengkap</td><td><input type="text" id="namaPeserta" name="input_namaPeserta" required></td>
    </tr>
    <tr>
        <td>NIK</td><td><input type="number" id="NIK_siswa" name="input_NIK" required></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td><td><input type="text" id="TTL" name="input_TTL" required></td>
</tr>
    <tr>
 
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" id="laki" name="input_jenisKelamin" value="Laki-laki">
    <label for="laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="input_jenisKelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label>   
</td>

    </tr>
    <tr>
        <th colspan="2">Alamat</th>
    </tr>
    <tr>
        <td>Desa/Kel</td><td><input type="text" id="kelurahan" name="input_kelurahan" required></td>
    </tr>
    <tr>
        <td>Kecamatan</td><td><input type="text" id="kecamatan" name="input_kecamatan" required></td>
    </tr>
    <tr>
        <td>Kabupaten</td><td><input type="text" id="kota" name="input_kota" required></td>
    </tr>
    <tr>
        <td>Provinsi</td><td><input type="text" id="provinsi" name="input_provinsi" required></td>
    </tr>
    <tr>
        <td>Email aktif</td><td><input type="text" id="email" name="input_email" required></td>
    </tr>
    <tr>
        <th colspan="2">Data Orang Tua</th>
    </tr>
    
        <td>Nomor Kartu Keluarga</td><td><input type="number" id="nokk" name="input_nokk" required></td>
   
    <tr>
        <td>Nama Ayah Kandung</td><td><input type="text" id="namaAyah" name="input_namaAyah" required></td>
    </tr>
    <tr>
        <td>Agama</td><td><input type="text" id="agamaAyah" name="input_agamaAyah" required></td>
    </tr>
    <tr>
    <td>Pekerjaan</td><td><input type="text" id="pekerjaanAyah" name="input_pekerjaanAyah" required></td>
    </tr>
    <tr>
        <td>Nama Ibu Kandung</td><td><input type="text" id="namaIbu" name="input_namaIbu" required></td>
    </tr>
    <tr>
        <td>Agama</td><td><input type="text" id="agamaIbu" name="input_agamaIbu" required></td>
    </tr>
    <tr>
    <td>Pekerjaan</td><td><input type="text" id="pekerjaanIbu" name="input_pekerjaanIbu" required></td>
    </tr>
    <tr>
        <th colspan="2">Alamat Orang Tua</th>
    </tr>
    <tr>
        <td>Desa/Kel</td><td><input type="text" id="kelurahanOrtu" name="input_kelurahanOrtu" required></td>
    </tr>
    <tr>
        <td>Kecamatan</td><td><input type="text" id="kecamatanOrtu" name="input_kecamatanOrtu" required></td>
    </tr>
    <tr>
        <td>Kabupaten</td><td><input type="text" id="kotaOrtu" name="input_kotaOrtu" required></td>
    </tr>
    <tr>
        <td>Provinsi</td><td><input type="text" id="provinsiOrtu" name="input_provinsiOrtu" required></td>
    </tr>
    

</table>
<input type="submit" value="Masukkan" style="padding: 10px; margin-left: 100px;">

    </div>
    </form>
</body>
</html>