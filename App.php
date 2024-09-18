<?php

declare(strict_types=1);

namespace App;

use PDO;

/**
 * Undefined class
 */
class App
{
    private static DB $db;
    public function __construct(protected Route $route, protected array $request, protected Config $config)
    {
        static::$db = new DB($config->db);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run()
    {
        try {
            echo $this->route->resolve($this->request['method'], $this->request['uri']);
        } catch (\Throwable $th) {
            throw $th;
        }        
    }
}
