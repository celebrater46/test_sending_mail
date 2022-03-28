<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="Author" content="Enin Fujimi">
    <title>Test Sending Mail</title>
</head>
<body>
    <h1>Test Sending Mail</h1>
    <form action="send.php" method="post">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" size="15" />
        <br>
        <label for="name">送信元：</label>
        <input type="text" id="from" name="from" size="30" />
        <br>
        <label for="name">送信先：</label>
        <input type="text" id="to" name="to" size="30" />
        <br>
        <label for="name">表題：</label>
        <input type="text" id="subject" name="subject" size="30" />
        <br>
        <label for="name">本文：</label>
        <textarea id="message" name="message" style="width: 640px; height: 120px"></textarea>
        <br>
        <br>
        <input type="submit" value="Send!" />
    </form>
</body>
</html>