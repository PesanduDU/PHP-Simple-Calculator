<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="calculator">
            <h3 style="color: #7f7979;">Calculator : V.0.1</h3>

            <div class="output">
                <input type="text" class="result" name="expression" value="<?php echo isset($expression) ? $expression : ''; ?>" readonly />
            </div>
            <div class="buttons">
                <button type="button" onclick="addVal('1')">1</button>
                <button type="button" onclick="addVal('2')">2</button>
                <button type="button" onclick="addVal('3')">3</button>
                <button type="button" onclick="addVal('+')">+</button>
                <button type="button" onclick="addVal('4')">4</button>
                <button type="button" onclick="addVal('5')">5</button>
                <button type="button" onclick="addVal('6')">6</button>
                <button type="button" onclick="addVal('-')">-</button>
                <button type="button" onclick="addVal('7')">7</button>
                <button type="button" onclick="addVal('8')">8</button>
                <button type="button" onclick="addVal('9')">9</button>
                <button type="button" onclick="addVal('*')">*</button>
                <button type="button" class="bg-red" onclick="clearVal()">C</button>
                <button type="button" onclick="addVal('0')">0</button>
                <button type="button" name="equal" class="bg-green">=</button>
                <button type="button" onclick="addVal('/')">/</button>
            </div>
        </div>

    </form>

    <script>
        function addVal(value) {
            const resultField = document.querySelector('.result');
            resultField.value += value;
        }

        function clearVal() {
            const resultField = document.querySelector('.result');
            resultField.value = '';
        }
    </script>
</body>

</html>