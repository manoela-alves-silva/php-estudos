<?php
// Exemplo de match/switch comparando com o if


    echo '<h3> Exemplo com if: </h3>';

    $nota_if = "A";
    if ($nota_if == "A") {
        echo "Excelente";
    } elseif ($nota_if == "B") {
        echo "Bom";
    } elseif ($nota_if == "C") {
        echo "Regular";
    }
    echo '<hr />';



    echo '<h3> Exemplo com switch: </h3>';

    $nota_switch = "B";
    switch ($nota_switch) {
        case "A":
            echo "Excelente";
            break;

        case "B":
            echo "Bom";
            break;

            echo '<pre>';
            print_r([
                $nota_if,
                $nota_switch,
                $nota_match
            ]);
            echo '</pre>';
        case "C":
            echo "Regular";
            break;
    }
    echo '<hr />';



    echo '<h3> Exemplo com match: </h3>';

    $nota_match = "C";
    echo match($nota_match) {
        "A" => "Excelente",
        "B" => "Bom",
        "C" => "Regular"
    };



?>