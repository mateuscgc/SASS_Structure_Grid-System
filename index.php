<?php
require_once('Lib/dcc.inc');
require_once('Config/dccRouter.php');
require_once('App/helpers/RoutesHelpers.php');

$app = new \Master\Base();
$router = new dccRouter();
$router->route($_SERVER['REQUEST_URI']);
