<?php


namespace Kubersoftware\Microservices\LoggerMicroservice\Enum;


class RoutingKeysEnum
{
    public const LOGGER_ERRORS = 'errors';


    /**
     * @var string
     */
    private string $routingKey;

    /**
     * @return string
     */
    public function getRoutingKey(): string
    {
        return $this->routingKey;
    }

    /**
     * @param string $routingKey
     * @return RoutingKeysEnum
     */
    public function setRoutingKey(string $routingKey): RoutingKeysEnum
    {
        $this->routingKey = $routingKey;
        return $this;
    }
}