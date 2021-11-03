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
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Real Name</th>
                <th>Hero Name</th>
                <th>Element</th>
                <th>Gender</th>
                <th>Power</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>

        @php $no = 1; @endphp
        @foreach($hero as $data)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$data->real_name}}</td>
        <td>{{$data->hero_name}}</td>
        <td>{{$data->element}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->power}}</td>

        @if ($data['power'] >= 100)
        <td>Powerful</td>

        @elseif($data['power'] >= 75)
        <td>Strong</td>

        @elseif($data['power'] >= 50)
        <td>Weak</td>

        @elseif($data['power'] >= 20)
        <td>Non-hero</td>
        @endif

        <td><a href="{{url('hero',$data->id)}}">Show</button></td>
       <td><a href="{{url('hero-delete{id}',$data->id)}}">Delete</button></td>
        @endforeach
        </tr>
        </table>
    </fieldset>
</body>
</html>
