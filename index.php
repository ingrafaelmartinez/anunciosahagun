<?php

require_once 'models/enlaces.php';
require_once 'models/Departamentos.php';
require_once 'models/Categorias.php';


require_once 'controllers/template.php';
require_once 'controllers/enlaces.php';
require_once 'controllers/Departamentos.php';
require_once 'controllers/Categorias.php';


$template = new TemplateController();
$template -> template();
