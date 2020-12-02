<?php

namespace Kubersoftware\Microservices;


/**
 * Class ServicesListEnum
 * Список всех микросервисов kubersoftware
 *
 * @package Kubersoftware\Microservices
 */
class ServicesListEnum
{
    /**
     *
     */
    public const SERVICE_API_DOC = "ApiDoc";

    /**
     *
     */
    public const SERVICE_ENTITY_MANAGER = "EntityManager";

    /**
     *
     */
    public const SERVICE_CHECKER = "Checker";

    /**
     *
     */
    public const SERVICE_MAIN_DB_CLUSTER = "kuber_main_database_cluster";

    /**
     *
     */
    public const SERVICE_NOSQL_DB_CLUSTER = "kuber_nosql_database_cluster";

    /**
     *
     */
    public const SERVICE_MESSAGE_BROKER = "MessageBroker";

    /**
     *
     */
    public const SERVICE_SECURITY = "Security";

    /**
     *
     */
    public const SERVICE_TASK_MANAGER = "TaskManager";

    /**
     *
     */
    public const SERVICE_USERS = "Users";

    /**
     *
     */
    public const SERVICE_VALIDATOR = "Validator";

    /**
     * OLD
     */
    public const SERVICE_CALCULATOR = "TaskCalculator";


    /**
     * Название микросервиса.
     * Получаем из констант класса @ServicesListEnum
     *
     * @var string
     */
    private string $serviceName;

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