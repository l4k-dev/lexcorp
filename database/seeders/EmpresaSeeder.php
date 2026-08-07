<?php

use App\Core\Database;

$pdo = (new Database())->connection();

$sql = "
INSERT INTO empresa
(
    nome,
    cnpj,
    telefone,
    whatsapp,
    email,
    endereco,
    cidade,
    estado,
    descricao
)
VALUES
(
    'LexCorp',
    '00.000.000/0001-00',
    '(62) 99999-9999',
    '(62) 99999-9999',
    'contato@lexcorp.com.br',
    'Endereço da empresa',
    'Goiânia',
    'GO',
    'Agência ponto de coleta e soluções logísticas.'
)
";

$pdo->exec($sql);

echo "Empresa criada\n";