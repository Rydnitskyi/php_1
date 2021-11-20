<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public_html/css/style.css">
</head>

<body>
    <div class="calc">
        <form method="get" action="#">
            <input type="text" name="arg1">
            <input type="text" name="arg2">
            <input type="submit" name="operation" value="+">
            <input type="submit" name="operation" value="-">
            <input type="submit" name="operation" value="*">
            <input type="submit" name="operation" value="/">
        </form>

        <?php
        $arg1 = $_GET['arg1'];
        $arg2 = $_GET['arg2'];
        $operation = $_GET['operation'];
        if ($operation) {
            switch ($operation) {
                case '+':
                    $result = $arg1 + $arg2;
                    break;
                case '-':
                    $result = $arg1 - $arg2;
                    break;
                case '*':
                    $result = $arg1 * $arg2;
                    break;
                case '/':
                    if ($arg2 == 0) {
                        $result = 'На ноль делить нельзя';
                    } else {
                        $result = $arg1 / $arg2;
                        break;
                    }
            }
        }


        ?>
    </div>
    <p class="count">Результат: <?php echo $result ?></p>
</body>

</html>