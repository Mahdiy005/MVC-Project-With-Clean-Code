<?php

namespace App;
/**
 * Undefined class
 */
class Config
{
    private array $config = [];
    public function __construct(protected array $env)
    {
        $this->config = [
            'db' => [
                'driver' => $env['DRIVER'],
                'host'   => $env['HOST'],
                'name'   => $env['NAME'],
                'pass'   => $env['PASS'],
                'user'   => $env['USER'],
            ]
        ];
    }

    public function __get($name)
    {
        return $this->config[$name];
    }
}
