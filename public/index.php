// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Router\Router;
use App\Controller\IncidentController;

$router = new Router();
$router->addRoute('/', IncidentController::class, 'listIncidents');
$router->addRoute('/incident/add', IncidentController::class, 'addIncident');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($uri);
