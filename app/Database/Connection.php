<?php
namespace Mini\Database;

use PDO;

class Connection
{
    public static function run()
    {
        return new PDO(
            'mysql:host=127.0.0.1;dbname=task',
            'root',
            ''
        );
    }

}