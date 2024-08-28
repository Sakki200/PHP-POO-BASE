<?php

require_once("./Models/Database.class.php");
require_once("./Models/Employes.class.php");

$model = new Employes;

$employes = $model->getRiche();


require_once("./Views/home.php");