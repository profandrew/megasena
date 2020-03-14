<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megasena</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            height: 100vh;
            overflow: hidden;
        }

        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        h1 {
            text-align: center;
            font-size: 70px;
            font-family: 'Josefin Sans', sans-serif;
        }

        h1 img {
            max-width: 80px;
        }

        .bola-container {
            margin-top: 8em;
            display: flex;
            justify-content: space-around;
            padding: 10px;
        }

        .bola {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(45deg, #2a752d, #486349);
            border: 1px solid black;
            box-shadow: 0 0 40px 0 rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bolder;
            font-size: 30px;
        }

        .button-container {
            margin-top: 10em;
            text-align: center;
        }

        button {
            padding: 20px 40px;
            text-transform: uppercase;
            box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.4);
            border-radius: 4px;
            color: white;
            font-weight: bolder;
            background: linear-gradient(45deg, #2a752d, #486349);
            border: none;
            cursor: pointer;
            transition: .2s;
        }

        button:hover {
            transform: translateY(-2px);
        }

        button:active {
            transform: scale(0.96);
        }
    </style>
</head>

<body>
    <?php
        $contador = isset($_GET['temp']) ? $_GET['temp'] : 0;

    ?>
    <div class="wrapper">
        <h1>Mega Sena <img src="lucky.svg" /></h1>
        <div class="bola-container">
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
            <div class="bola"><?php echo $contador == 0 ? "?" : rand(1, 60) ?></div>
        </div>
        <div class="button-container">
            <form action="?temp=1" method="post">
                <button>Estou com sorte</button>
            </form>
        </div>
    </div>
</body>

</html>