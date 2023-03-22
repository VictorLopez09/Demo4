<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Caculadora</h1>
    <form action="caculadora.php" method="post">
        <label for="">Numero 1</label>
        <input type="number" name="num1" id="">
        <label for="">Numero 2</label>
        <input type="number" name="num2" id="">
        <select name="operacion" id="">
            <option value="suma">Sumar</option>
            <option value="resta">Resta</option>
        </select>
        <input type="submit" value="cacular">
    </form>
</body>
</html>