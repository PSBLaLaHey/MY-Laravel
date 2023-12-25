<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyLaravel</title>
</head>
<body>
    <br>
    <br>
    <div class="main">
        <h1>Welcome to Multiplication table Web</h1>
        <br>
        <h1>
            <?php echo $val_a . ' ' . $val_b; ?>
        </h1>
        <br>
        <h1>{{$val_a}} {{$val_b}}</h1>
    </div>
    <br><br><br>
    <form class="inputV" method="post" action="/myroute">
        @csrf
        <input type="number" name="myinput">
        <button type="submit">Submit</button>
    </form>
    <style>
        *{
            padding:0;
            margin:0;
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .inputV{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</body>
</html>
