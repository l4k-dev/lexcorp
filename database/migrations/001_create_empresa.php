<?php

return [

'up' => "

CREATE TABLE empresa (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(255) NOT NULL,

    cnpj VARCHAR(20),

    telefone VARCHAR(30),

    whatsapp VARCHAR(30),

    email VARCHAR(150),

    endereco VARCHAR(255),

    cidade VARCHAR(100),

    estado VARCHAR(2),

    logo VARCHAR(255),

    descricao TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP NULL

);

",

'down' => "

DROP TABLE empresa;

"

];