<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php learning</title>

    <style>
        header {
            background-color: gray;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>
<body>
    <ul>
<!--        --><?php //foreach($tasks as $task) : ?>
<!--            --><?php //if ($task->isComplete()) : ?>
<!--                <li><strike>--><?//= $task->description ?><!--</strike></li>-->
<!--            --><?php //else : ?>
<!--                <li>--><?//= $task->description ?><!--</li>-->
<!--            --><?php //endif ?>
<!--        --><?php //endforeach; ?>


        <?php foreach($tasks as $task) : ?>
            <li><?= $task->description ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>