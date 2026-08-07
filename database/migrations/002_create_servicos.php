<?php

return [

'up' => "

CREATE TABLE servicos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    titulo VARCHAR(150) NOT NULL,

    descricao TEXT,

    icone VARCHAR(100),

    ativo BOOLEAN DEFAULT TRUE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

",

'down' => "

DROP TABLE servicos;

"

];