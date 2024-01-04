<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyLaravel</title>
</head>
<body>
    <div class="content">
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
        <p class="p_1">ใส่เลขสิ</p>
        <form class="inputV" method="post" action="/myroute">
            @csrf
                <input type="number" name="myinput">
                <button type="submit">Submit</button>
        </form>
    </div>

    <style>
        *{
            padding:0;
            margin:0;
        }
        .content{
            width: 100%;
            height: 100vh;
            background-image: url('https://c.wallhere.com/images/cb/23/ac4c38042e2394ecb8d8ffbed81c-1579551.png!d');
        }
        .main{
            border: 2px solid slategray;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: plum;
        }
        .inputV{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .p_1{
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
    </style>
</body>
</html>
