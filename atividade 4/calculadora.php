<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = $_POST['numero1'] ?? 0;
    $numero2 = $_POST['numero2'] ?? 0;
    $operacao = $_POST['operacao'] ?? '';

    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            break;
        case 'divisao':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Erro: Divisão por zero!";
            }
            break;
        case 'raiz':
            if ($numero1 >= 0) {
                $resultado = sqrt($numero1);
            } else {
                $resultado = "Erro: Número negativo para raiz quadrada!";
            }
            break;
        default:
            $resultado = "Operação inválida!";
            break;
    }

    echo "Resultado: $resultado";
}
?>

<form action="" method="post">
    Número 1: <input type="text" name="numero1"><br>
    Número 2 (não necessário para raiz quadrada): <input type="text" name="numero2"><br>
    Operação: <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
        <option value="raiz">Raiz Quadrada (Número 1)</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>