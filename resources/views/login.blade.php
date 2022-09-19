<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="text-center d-flex align-items-center" style="min-height: 100vh;" onload='document.f1.email.focus()'>
    <div class="container-xl">
        <main class="d-flex justify-content-center">
            <form action="/login" method="POST" name='f1'>
                @csrf
                <div class="text-center form-group">
                    <b style="font-size:2rem">LOGIN</b>
                </div>
                <div class="form-group mt-2">
                    <label for="username">USERNAME</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="form-group mt-1">
                    <label for="password">PASSWORD</label>
                    <input class="form-control" type="password" name="password" autocomplete="off" >
                </div>
                <div class="col text-center">
                    <button class="mt-3 btn btn-primary btn-lg w-50" type="submit">Login</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>