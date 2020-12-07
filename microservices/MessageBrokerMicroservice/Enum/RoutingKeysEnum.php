<?php


namespace Kubersoftware\Microservices\MessageBrokerMicroservice\Enum;


class RoutingKeysEnum
{

    /**
     *  Ключ для получения объекта на добавление данных в БД
     */
    public const ENTITY_MANAGER_INSERT_OBJECT = 'insert';

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