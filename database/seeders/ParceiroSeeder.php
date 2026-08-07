<?php

use App\Core\Database;

$pdo = (new Database())->connection();

$parceiros = [

    'Mercado Livre',
    'Shopee',
    'Amazon'

];


$stmt = $pdo->prepare(
    "INSERT INTO parceiros (nome)
     VALUES (?)"
);


foreach ($parceiros as $parceiro) {

    $stmt->execute([
        $parceiro
    ]);

}


echo "Parceiros criados\n";