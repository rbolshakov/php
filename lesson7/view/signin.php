<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #F8F005;
            min-height: 100vh;
            font-family: 'Bebas Neue', cursive;
        }


        .username {
            color: #545454;
        }

        .sign-in-form {
            margin: auto;
        }

        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #password {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <h3>authorization</h3>
                <div class="alert alert-danger <?= $error === null ? 'visually-hidden' : '' ?>">
                    <?= $error ?>
                </div>
                <label for="username" class="visually-hidden">USERNAME</label>
                <input type="text" id="username" name="username" class="form-control mt-3" placeholder="username" required="" autofocus="">
                <label for="password" class="visually-hidden">PASSWORD</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="password" required="">
                <button class="w-75 btn btn-lg btn-primary mt-1 cyber-button" type="submit">SIGN IN</button>
                <div class="mt-3">
                    <a href="/">BACK</a>
                </div>
            </form>
        </div>
    </div>
</body>