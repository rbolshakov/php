<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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
        }

        h1 {
            font-family: 'Bebas Neue', cursive;
        }

        .username {
            color: #545454;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wrapper a:not(:last-child) {
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <div class="wrapper">
        <div>
            <?php if (is_null($username)) : ?>
                <a class="btn btn-lg btn-primary mt-1" href="/?controller=registration">REGISTER NOW</a>
                <a class="btn btn-lg btn-primary mt-1" href="/?controller=security">SIGN IN</a>
            <?php else : ?>
        </div>

        <h1 class="username"> <?= $username ?></h1>
        <div>
            <a class="btn btn-lg btn-primary mt-1" href="/?controller=security&action=logout">EXIT</a>
            <a class="btn btn-lg btn-primary mt-1" href="/?controller=tasks">TASKS</a>
        </div>

    <?php endif; ?>
    </div>
</body>