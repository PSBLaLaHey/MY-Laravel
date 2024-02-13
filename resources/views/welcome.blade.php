<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#btn").click(function() {

                const p = $("p");
                const value = parseInt($("#value").val());
                let result = "";

                for (let i = 1; i <= 12; i++) {
                    result += `${value} x ${i} = ${value * i}<br>`;
                }

                p.html(result);

            });
        });
    </script>
</head>

<body>
    <div class="main">
        <div class="bg1">
        </div>
        <div class="content">

            <h1>Javascript</h1>
            <br>

            <div>
                <button class="alt" onclick="alert('Hello World!')">Click Me!</button>
                <br>
                <input id ="value" placeholder="Enter a number" />
                <button id="btn">Submit</button>
                <p></p>
            </div>

        </div>
        <div class="bg2"></div>
    </div>

</body>
<style>
    .main {
        display: flex;
        justify-content: space-between;
    }

    .content {
        margin: 0%;
        padding: 0%;

        width: 400px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .alt {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .bg1 {
        margin-top: 200px;
        padding: 0%;

        width: 450px;
        height: 400px;
        background-repeat: no-repeat;
        background-image: url("https://media.tenor.com/2l4-h42qnmcAAAAi/toothless-dancing-toothless.gif");
    }

    .bg2 {
        margin-top: 200px;
        padding: 0%;
        
        width: 450px;
        height: 400px;
        background-repeat: no-repeat;
        background-image: url("https://media.tenor.com/UCi8cp083TcAAAAi/toothless-dancing.gif");
    }
</style>

</html>
