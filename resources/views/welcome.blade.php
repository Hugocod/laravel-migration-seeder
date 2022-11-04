<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($trains as $train )
        <h1>{{$train['azienda']}}</h1>
        <h1>{{$train['stazione_di_partenza']}}</h1>
    @endforeach

</body>
</html>
