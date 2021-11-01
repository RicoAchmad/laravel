<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Pembelian</legend>
        <br>
        @foreach($pembelian as $data)
        <strong>{{$data->id}}</strong><br>
        <hr>
        {{$data->nama_barang}}<br>
        {{$data->nama_suplier}}<br>
        {{$data->qty}}<br>
        {{$data->tgl}}<br>
        {{$data->timestamp}}<hr>
        @endforeach
    </fieldset>
</body>
</html>
