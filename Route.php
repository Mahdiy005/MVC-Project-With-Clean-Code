<?php

declare(strict_types=1);

namespace App;

use App\exceptions\PageNotFound;

class Route
{
    private array $routes = [];
    public function register(string $method, string $route, callable|array $target): static
    {
        $this->routes[$method][$route] = $target;
        return $this;
    }

    public function get(string $route, callable|array $target): static
    {
        return $this->register('get', $route, $target);
    }

    public function post(string $route, callable|array $target): static
    {
        return $this->register('post', $route, $target);
    }

    public function resolve(string $method, string $route)
    {
        $method = strtolower($method);
        $route  = explode('?', $route)[0];
        $target = $this->routes[$method][$route] ?? null;

        if(is_callable($target))
        {
            return call_user_func_array($target, []);
        }

        if(is_array($target))
        {
            [$class, $c_method] = $target;
            if(class_exists($class))
            {
                $class = new $class();
                if(method_exists($this, $c_method))
                {
                    return call_user_func_array($c_method, []);
                }
            }
        }
        throw new PageNotFound();
    }
}
