<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Welcome Piyawat sideline</h1>
    <h1>
        <?php echo $val_a . ' ' . $val_b; ?>
    </h1>
    <h1>{{$val_a}} {{$val_b}}</h1>


    </div>
    <form method="post" action="/myroute">
        @csrf
        <input type="number" name="myinput">
        <button type="submit">Submit</button>
    </form>
    <style>
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</body>
</html>
