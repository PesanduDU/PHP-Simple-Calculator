<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $input = "";





    }


    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="calculator">
            <h3 style="color: #7f7979;">Calculator : V.0.1</h3>

            <div class="output">
                <!-- <span class="result" name="expression">1234</span> -->
                 <!-- <input type="text" name="expression"  class="result"> -->
                <textarea name="expression" id="" class="result">1234</textarea>
            </div>
            <div class="buttons">
                <button name="clicked" value="1" onclick="">1</button>
                <button name="clicked" value="" onclick="">2</button>
                <button name="clicked" value="" onclick="">3</button>
                <button name="clicked" value="" onclick="">+</button>
                <button name="clicked" value="" onclick="">4</button>
                <button name="clicked" value="" onclick="">5</button>
                <button name="clicked" value="" onclick="">6</button>
                <button name="clicked" value="" onclick="">-</button>
                <button name="clicked" value="" onclick="">7</button>
                <button name="clicked" value="" onclick="">8</button>
                <button name="clicked" value="" onclick="">9</button>
                <button name="clicked" value="" onclick="">*</button>
                <button class="bg-red" value="" onclick="">C</button>
                <button name="clicked" value="" onclick="">0</button>
                <button type="submit" name="equal" class="bg-green">=</button>
                <button name="clicked" value="" onclick="">/</button>
            </div>
        </div>

    </form>
</body>

</html>