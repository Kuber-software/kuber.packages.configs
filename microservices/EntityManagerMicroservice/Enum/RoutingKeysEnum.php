<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Enum;


class RoutingKeysEnum
{
    public const INSERT = 'insert';

    public const SELECT = 'select';

    public const UPDATE = 'update';

    public const DELETE = 'delete';

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