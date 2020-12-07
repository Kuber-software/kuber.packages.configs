<?php

namespace Kubersoftware\Microservices;


/**
 * Class ServicesListEnum
 * Список всех микросервисов kubersoftware
 *
 * @package Kubersoftware\Microservices
 * @link https://www.notion.so/kubersoftware/d03c6751998644aabc9b2bce2771eb62?v=cd2372ef78b345f49c3a11d57c97dcb3
 */
class MicroservicesListEnum
{
    public const MICROSERVICE_API_DOC = "ApiDoc";
    public const MICROSERVICE_ENTITY_MANAGER = "EntityManager";
    public const MICROSERVICE_CHECKER = "Checker";
    public const MICROSERVICE_MAIN_DB_CLUSTER = "kuber_main_database_cluster";
    public const MICROSERVICE_NOSQL_DB_CLUSTER = "kuber_nosql_database_cluster";
    public const MICROSERVICE_MESSAGE_BROKER = "MessageBroker";
    public const MICROSERVICE_SECURITY = "Security";
    public const MICROSERVICE_TASK_MANAGER = "TaskManager";
    public const MICROSERVICE_USERS = "Users";
    public const MICROSERVICE_VALIDATOR = "Validator";

    public string $microserviceName;

    /**
     * @return string
     */
    public function getMicroserviceName(): string
    {
        return $this->microserviceName;
    }

    /**
     * Устанавливаем значение из констант класса @ServicesListEnum
     *
     * @param string $microserviceName
     * @return MicroservicesListEnum
     */
    public function setMicroserviceName(string $microserviceName): MicroservicesListEnum
    {
        $this->microserviceName = $microserviceName;
        return $this;
    }
}