<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Мой Словарь</title>
</head>
<body>
    <div id="main">
        <h1>id</h1>
        <input type="text" placeholder="id" id="id">
        

    </div>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script> 
        let tg = window.Telegram.WebApp;
        document.getElementById("id").value = tg.initDataUnsafe.user.id;
        tg.expand();

        function checkInput() {
            var input = document.getElementById("id").value; // получаем значение поля ввода
            return input;
        }
    <?php
        $id = "<script>document.write(checkInput());</script>";
    ?>
    </script>

    <?php echo $id;
    ?>


</body>
</html>

