<?php session_start(); 
if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = "idle";
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj pracownika</title>
</head>

<body>
    <form action="form06_redirect.php" method="POST">
            <label for="id">Id pracownika:</label>
            <input type="text" name="id">
            <label for="nazwisko">Nazwisko pracownika: </label>
            <input type="text" name="nazwisko">
            <input type="submit" value="Wstaw" name="addEmployee">
            <input type="reset" value="Wyczysc">
    </form>

    <br />
    <a href="form06_get.php">Lista pracowników</a>

    <br />
    <br />
    <p style="color: red;">
    <?php
    if ($_SESSION['success'] == "failure") {
        echo "Nie udało się dodać pracownika! Podano błędne dane!";
        $_SESSION['success'] = "idle";
    }
    ?>
    </p>
</body>

</html>