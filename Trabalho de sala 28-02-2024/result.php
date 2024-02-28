<?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Array com as respostas corretas
        $respostas_corretas = array("resposta1", "resposta2", "resposta3", "opcao2", "opcao3", "opcao1");

        // Inicializa o contador de acertos
        $acertos = 0;

        // Verifica as respostas submetidas pelo usuário
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["resposta$i"]) && $_POST["resposta$i"] == $respostas_corretas[$i - 1]) {
                $acertos++;
            }
        }

        // Exibe o resultado
        echo "<h2>Você acertou $acertos de 6 questões!</h2>";
    }
    ?>
