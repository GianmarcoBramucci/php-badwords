<?php
    $Paragraph= $_POST['paragraph'];
    $ParagraphLenght= strlen($Paragraph);
    $BadWords= $_POST['bad-words'];
    $Censorship= "***";
    $NewParagraph= str_replace($BadWords,$Censorship,$Paragraph);
    $NewParagraphLenght= strlen($NewParagraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo</title>
</head>
<body>
    <h1>Ho controllato broo!!!!</h1>
    <div>
        <h3>Pagrafo non censurato</h5>
        <span>lunghezza del paragrafo(spazi conpresi):<?php echo $ParagraphLenght ?></span>
        <p><?php echo $Paragraph ?></p>
    </div>
    <div>
        <h3>Pagrafo censurato</h5>
        <span>lunghezza del nuovo paragrafo(spazi conpresi):<?php echo $NewParagraphLenght ?></span>
        <p><?php echo $NewParagraph ?></p>
    </div>
</body>
</html>