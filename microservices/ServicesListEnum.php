<?php

namespace Kubersoftware\Microservices;

use MyCLabs\Enum\Enum;

/**
 * Class ServicesListEnum
 * Список всех микросервисов kubersoftware
 *
 * @package Kubersoftware\Microservices
 * @link https://www.notion.so/kubersoftware/d03c6751998644aabc9b2bce2771eb62?v=cd2372ef78b345f49c3a11d57c97dcb3
 */
class ServicesListEnum
{
    public const SERVICE_API_DOC = "ApiDoc";
    public const SERVICE_ENTITY_MANAGER = "EntityManager";
    public const SERVICE_CHECKER = "Checker";
    public const SERVICE_MAIN_DB_CLUSTER = "kuber_main_database_cluster";
    public const SERVICE_NOSQL_DB_CLUSTER = "kuber_nosql_database_cluster";
    public const SERVICE_MESSAGE_BROKER = "MessageBroker";
    public const SERVICE_SECURITY = "Security";
    public const SERVICE_TASK_MANAGER = "TaskManager";
    public const SERVICE_USERS = "Users";
    public const SERVICE_VALIDATOR = "Validator";

    public string $serviceName;

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return ServicesListEnum
     */
    public function setServiceName(string $serviceName): ServicesListEnum
    {
        $this->serviceName = $serviceName;
        return $this;
    }
}