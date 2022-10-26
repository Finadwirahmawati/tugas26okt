<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>FROM PEMBELIAN BBM</h1>
     <form action="proses.php" method=POST>
              <form>
              <fieldset>
                        <p>
                        <label for="NIK">NIK:</label>
                        <input type="number" name="NIK"/>
</p>
<p>
       <label for="Jenis_Kelamin">Jenis Kendaraan:</label>
       <select name="Jenis_Kelamin">
                <option value="motor">MOTOR</option>
                <option value="mobil">MOBIL</option>
                <option value="truk">TRUK</option>
                <option value="bis">BIS</option>
                <option value="tossa">TOSSA</option>
</select>
</p>
<input type="submit" value="Kirim Data" name="tambah">

                    </fieldset>
</form>
</body>
</html>