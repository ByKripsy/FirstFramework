<?php
namespace Framework;

/**
 * Class Route
 * Représent a matched route
 */
class Route{

    /**
     * @var string
     */
    private $name;
    /**
     * @var callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    public function __construct(string $name, callable $callback, array $parameters){
        $this->name = $name;
        $this->callback = $callback;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getName(): string {
    }

    /**
     * @return callable
     */
    public function getCallback():callable {
    }

    /**
     * @return string[] Liste des paramètres
     */
    public function getParameters():array {
    }
}