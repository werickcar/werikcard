<?php

$config = require_once __DIR__ . '/../config/config.php';

require_once __DIR__ .  '/../app/models/Database.php';

$db = (new Database($config))->getConnection();

require_once __DIR__ . '/../app/controllers/ProdutosController.php';
$controller = new ProdutosController($db);
$controller->gerarRelatorioPDF();
