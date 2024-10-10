namespace App\Router;

class Router {
    private $routes = [];

    public function addRoute($path, $controller, $method) {
        $this->routes[$path] = ['controller' => $controller, 'method' => $method];
    }

    public function handleRequest($uri) {
        foreach ($this->routes as $path => $action) {
            if ($path === $uri) {
                $controller = new $action['controller'];
                return $controller->{$action['method']}();
            }
        }
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
