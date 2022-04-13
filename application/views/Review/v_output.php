<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<style>
fieldset {
    width: 40%;
    margin: 20px auto;
    border-radius: 5px;
}

select {
    width: 100%;
}
</style>

<body>
 <fieldset>
<legend>Output Data Siswa</legend>

      <table>
          <tr>
              <th>Nama Siswa</th>
               <td>:</td>
               <td>
               <?= $nsiswa; ?>
               </td> 
</tr>

<tr>
    <th>Nis</th>
    <td>:</td>
<td>
<?= $nis; ?>
    </td>
</tr>

<tr>
    <th>Kelas</th>
    <td>:</td>
<td>
<?= $kelas; ?>
    </td>
</tr>

<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
<td>
<?= $tlahir; ?>
    </td>
</tr>

<tr>
    <th>Tempat Lahir</th>
    <td>:</td>
<td>
<?= $tmptlahir; ?>
    </td>
</tr>

<tr>
    <th>Alamat</th>
    <td>:</td>
<td>
<?= $alamat; ?>
    </td>
</tr>

<tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
<td>
<?= $jkelamin; ?>
    </td>
</tr>

<tr>
    <th>Agama</th>
    <td>:</td>
<td>
<?= $agama; ?>
    </td>
</tr>

<tr>
    <td colspan="8" align="center">
    <a href="<?= base_url('review'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
 </body>
</html>
