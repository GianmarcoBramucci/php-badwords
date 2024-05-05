<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD-WORDS</title>
</head>
<body>
    <h1>FRAAA dimme qualcoosaa da controlla</h1>
    <form action="controllo.php" method="post">
        <textarea name="paragraph" rows="5" cols="30" minlength="10" maxlength="256">testoo da controlla</textarea>
        <input name="bad-words" type="text" placeholder="parola da toglie">
        <button type="submit">CONTROLLO</button>
    </form>
</body>
</html>