<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>
<div>
        @foreach($municipio as $cp)
            <a>{{$cp['estado']}}</a><br>
        @endforeach
    </div>
</body>
</html>