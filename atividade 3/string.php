<?php
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    $textoSemEspacos = str_replace(' ', '', $texto);
    $quantidadeCaracteres = strlen($textoSemEspacos);
    echo "A string digitada possui $quantidadeCaracteres caracteres.";
} else {
?>
<form action="" method="post">
    Digite uma palavra ou texto: <input type="text" name="texto">
    <input type="submit" value="Contar caracteres">
</form>
<?php
}
