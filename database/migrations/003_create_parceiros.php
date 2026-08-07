<?php

return [

'up' => "

CREATE TABLE parceiros (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(150) NOT NULL,

    logo VARCHAR(255),

    site VARCHAR(255),

    ativo BOOLEAN DEFAULT TRUE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

",

'down' => "

DROP TABLE parceiros;

"

];