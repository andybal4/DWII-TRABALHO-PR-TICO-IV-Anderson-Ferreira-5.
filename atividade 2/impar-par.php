<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    if (is_numeric($numero)) {
        if ($numero % 2 == 0) {
            echo "O número $numero é par.";
        } else {
            echo "O número $numero é ímpar.";
        }
    } else {
        echo "Por favor, digite um número válido.";
    }
} else {
?>
<form action="" method="get">
    Digite um número: <input type="text" name="numero">
    <input type="submit" value="Verificar">
</form>
<?php
}
