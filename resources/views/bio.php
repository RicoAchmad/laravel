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
        <?php if ($nama == null) {
            echo "Silahkan Isi Biodata Anda";
        } else if ($nama != null){
        ?>
    <tr>
        <td>
        Nama Saya
        </td>
        <td>:</td>
        <td>
        <?php echo $nama;
        ?>

        </td>
        <?php } ?>
    </tr>
    <tr>
        <td>
        <?php if($alamat != NULL) {?>
        Alamat
        </td>
        <td>:</td>
        <td>
        <?php echo $alamat; ?>
        </td>
        <?php } ?>
    </tr>

    <tr>
        <td>
        <?php if($jk != NULL) {?>
        Jenis Kelamin
        </td>
        <td>:</td>
        <td>
        <?php echo $jk; ?>
        </td>
        <?php } ?>
    </tr>
    <tr>
        <td>
        <?php if($tb != NULL) {?>
        Tinggi Badan
        </td>
        <td>:</td>
        <td>
        <?php echo $tb; ?>
        </td>
        <?php } ?>
    </tr>
    <tr>
        <td>
        <?php if($bb != NULL) {?>
        Berat Badan
        </td>
        <td>:</td>
        <td>
        <?php echo $bb; ?>
        </td>
        <?php } ?>
    </tr>
    </table>
</fieldset>
</body>
</html>
