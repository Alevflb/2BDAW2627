<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Notas</legend>
            <label for="">Nota 1</label>
            <input type="number" name="notas[]" id="">
            <label for="">Nota 2</label>
            <input type="number" name="notas[]" id="">
            <label for="">Nota 3</label>
            <input type="number" name="notas[]" id="">
            <label for="">Nota 4</label>
            <input type="number" name="notas[]" id="">
        </fieldset>
        <fieldset>
            <legend>Intereses</legend>
            <label for="">JavaScript</label><input type="checkbox" name="intereses[]" value="js">
            <label for="">PHP</label><input type="checkbox" name="intereses[]" value="php">
            <label for="">JQuery</label><input type="checkbox" name="intereses[]" value="jquery">
        </fieldset>
        <input type="submit" value="ENVIAR">
    </form>
    <?php
    print_r($_POST);
    ?>
</body>
</html>