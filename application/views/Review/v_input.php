<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
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
<legend>Input Data Siswa</legend>

    <form method="POST">
      <table>
          <tr>
              <th>Nama Siswa</th>
               <td>:</td>
               <td>
               <input type="text" name="nsiswa" id="nsiswa">
               <?= form_error('nsiswa', '<br><span style="color:red;
               ">', '</span>'); ?>
               </td> 
</tr>

<tr>
    <th>Nis</th>
    <td>:</td>
<td>
<input type="text" name="nis" id="nis">
<?= form_error('nis', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Kelas</th>
    <td>:</td>
<td>
<input type="text" name="kelas" id="kelas">
<?= form_error('kelas', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
<td>
<input type="text" name="tlahir" id="tlahir">
<?= form_error('tlahir', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Tempat Lahir</th>
    <td>:</td>
<td>
<input type="text" name="tmptlahir" id="tmptlahir">
<?= form_error('tmptlahir', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Alamat</th>
    <td>:</td>
<td>
<input type="text" name="alamat" id="alamat">
<?= form_error('alamat', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
<td>
<input type="text" name="jkelamin" id="jkelamin">
<?= form_error('jkelamin', '<br><span style="color:red;
               ">', '</span>'); ?>
    </td>
</tr>

<tr>
    <th>Agama</th>
    <td>:</td>
<td>
<select name="agama" id="agama">
    <option>-- PILIH --</option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Katolik">Katolik</option>
    <option value="Budha">Budha</option>
    <option value="Hindu">Hindu</option>
    <option value="Konghucu">Konghucu</option>
</select>
    </td>
</tr>

<tr>
    <td colspan="8" align="center">
        <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>
