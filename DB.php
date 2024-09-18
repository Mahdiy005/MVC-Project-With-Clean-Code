<?php

declare(strict_types=1);

namespace App;

use PDO;

class DB
{
    private PDO $pdo;
    public function __construct(protected array $config)
    {
        $defaultOptions = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $this->pdo = new PDO(
            $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
            $config['user'],
            $config['pass'],
            $config['options'] ?? $defaultOptions
        );
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array($name, $arguments);
    }
}
