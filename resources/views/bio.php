<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<fieldset>
    <legend>
        biodata
    </legend>
    <table>
    <tr>
        <td>
        Nama Saya
        </td>
        <td>:</td>
        <td>
        <?php echo $nama; ?>
        </td>
    </tr>
    <tr>
        <td>
        Alamat
        </td>
        <td>:</td>
        <td>
        <?php echo $alamat; ?>
        </td>
    </tr>
    <tr>
        <td>
        Jenis Kelamin
        </td>
        <td>:</td>
        <td>
        <?php echo $jk; ?>
        </td>
    </tr>
    <tr>
        <td>
        Tinggi Badan
        </td>
        <td>:</td>
        <td>
        <?php echo $tb; ?> CM
        </td>
    </tr>
    <tr>
        <td>
        Berat Badan
        </td>
        <td>:</td>
        <td>
        <?php echo $bb; ?> KG
        </td>
    </tr>
    </table>
</fieldset>
</body>
</html>
