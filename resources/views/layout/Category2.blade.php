<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @foreach ($products as $myproduct )
    id: {{$myproduct->id}}
    name: {{$myproduct->name}} 
    price: {{$myproduct->price}}
    
</br>
    @endforeach
</body>
</html>