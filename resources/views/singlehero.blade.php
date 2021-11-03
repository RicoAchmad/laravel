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
        <legend>Data Hero</legend>
        <br>

        Real Name : {{$data['real_name']}}<br>
        Hero Name : {{$data['hero_name']}}<br>
        Element : {{$data['element']}}<br>
        Gender : {{$data['gender']}}<br>
        Power : {{$data['power']}}<br>

        @if ($data['power'] >= 100)

        keterangan : Sangat Kuat

        @elseif($data['power'] >= 75)
        keterangan : Kuat

        @elseif($data['power'] >= 50)
        keterangan : Lemah

        @elseif($data['power'] >= 20)
        keterangan : Manusia Biasa

        @endif
        <hr>
    </fieldset>
</body>
</html>
