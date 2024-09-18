<?php

declare(strict_types=1);

namespace App;

class View
{
    public function __construct(protected string $path, protected array $args = [])
    {
        
    }
    public static function make(string $path, array $args = []): static
    {
        return new static($path, $args);
    }
    public function render(): string
    {
        $relPath = VIEW_PATH . $this->path . '.php';
        extract($this->args);
        ob_start();
        include $relPath;
        return ob_get_clean();
    }

    public function __toString()
    {
        return $this->render();
    }
}
