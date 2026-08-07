<?php

namespace App\Controllers;

use App\Core\Database;
use App\Core\View;

class HomeController
{
    public function index()
    {
        $db = new Database();

        $pdo = $db->connection();

        $mysql = $pdo
            ->query("SELECT VERSION() AS versao")
            ->fetch();

        View::render('home.index', [
            'mysql' => $mysql
        ]);
    }
}