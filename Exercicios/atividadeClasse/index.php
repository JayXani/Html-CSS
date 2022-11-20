<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="proccess.php">
        <input type="number" name="value1" id="value1">
        <input name="operator" list="operador" id="operator">
         <datalist id="operador">
            <option value="+">
            <option value="-">
            <option value="/">
            <option value="*">
         </datalist>
        <input type="number" name="value2" id="value2">
        <input type="submit" title="Enviar" >
    </form>
</body>
</html>