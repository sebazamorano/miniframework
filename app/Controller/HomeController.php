<?php
namespace Mini\Controller;

use Mini\Database\Connection;
use Mini\Database\QueryBuilder;
use Mini\View;

class HomeController
{
    protected $query;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->query = new QueryBuilder(Connection::run());
    }

    public function index()
    {
        $tasks = $this->query->getAll('tasks');
        $user = [];
        return View::render('index', compact('tasks', 'user'));
    }

}