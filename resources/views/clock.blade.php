<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="clock">
        <div class="hour"></div>
        <div class="min"></div>
        <div class="sec"></div>
    </div>
</body>
</html>

<style>
    :root{
        --min-bg-color: #1e1f26;
        --main-text-color: #ccc;
    }

    *{
        box-sizing: border-box;
    }

    body{
        margin: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        background-color: var(--main-bg-color);
        position: relative;
        transition: all ease 0.2s;
    }

    .clock{
        min-height: 18em;
        min-width: 18em;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--main-bg-color);
        background-image: url("https://imvpn22.github.io/analog-clock/clock.png");
        background-position: center center;
        background-size: cover;
        border-radius: 50%;
        border: 8px solid #03d8ff;
        transition: all ease 0.2s;
    }
</style>