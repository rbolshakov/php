<head>
    <meta charset="UTF-8">
    <title>MAIN PAGE</title>
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
    </style>
</head>


<body>
    <h1><?= $pageHeader ?></h1>

    <?php if (is_null($username)) : ?>
        <a href="/?controller=security">SIGN IN</a>
    <?php else : ?>
        <h1 class="username"> <?= $username ?></h1>
        <div>
            <a class="btn btn-lg btn-primary mt-1" href="/?controller=security&action=logout">EXIT</a>
            <a class="btn btn-lg btn-primary mt-1" href="/">MAIN PAGE</a>
        </div>

    <?php endif; ?><br><br>
    <form action="/?controller=tasks&action=add" method="post">
        <input type="text" name="task" placeholder="Опишите новую задачу">
        <input type="submit" value="ADD TASK">
    </form>
    <?php foreach ($tasks as $key => $task) : ?>
        <div id="<?= $task->getId() ?>">
            <?= $task->getDescription() ?>
            <a href="/?controller=tasks&action=done&key=<?= $task->getId() ?>">Done</a>
            <button class="done" data-id="<?= $task->getId() ?>">Done</button>
            <br><br>
        </div>
    <?php endforeach; ?>

    <script>
        let buttons = document.querySelectorAll('.done');
        buttons.forEach((elem) => {
            elem.addEventListener('click', () => {
                let id = elem.getAttribute('data-id');
                (
                    async () => {
                        const response = await fetch('/?controller=tasks&action=apidone&id=' + id);
                        const answer = await response.json();
                        document.getElementById(answer.task_id).remove();
                    }
                )();
            })
        })
    </script>
</body>