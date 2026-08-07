<?php

use App\Core\Database;

$pdo = (new Database())->connection();

$servicos = [

    [
        'Ponto de coleta',
        'Recebimento e envio de encomendas.'
    ],

    [
        'Logística reversa',
        'Solução para devoluções de produtos.'
    ],

    [
        'Envio de encomendas',
        'Envios rápidos e seguros.'
    ]

];


$stmt = $pdo->prepare(
    "INSERT INTO servicos (titulo, descricao)
     VALUES (?, ?)"
);


foreach ($servicos as $servico) {

    $stmt->execute($servico);

}


echo "Serviços criados\n";