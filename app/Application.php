<?php
namespace Mini;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class Application
{
    protected $container;

    /**
     * Application constructor.
     * @param $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function run ()
    {
        $router = new Router(new Dispatcher($this->container));
        $router->get('/hola', 'Mini\Controller\HomeController@index');

        $router->dispatch(Request::capture())->send();

    }


}