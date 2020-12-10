<?php

namespace Kubersoftware\Microservices;


/**
 * @IgnoreAnnotation("MicroservicesListEnum")
 *
 * Class ServicesListEnum
 * Список всех микросервисов kubersoftware
 * @package Kubersoftware\Microservices
 * @link https://www.notion.so/kubersoftware/d03c6751998644aabc9b2bce2771eb62?v=cd2372ef78b345f49c3a11d57c97dcb3
 */
class MicroservicesListEnum
{
    public const API_DOC = "ApiDoc";
    public const ENTITY_MANAGER = "EntityManager";
    public const CHECKER = "Checker";
    public const MAIN_DB_CLUSTER = "kuber_main_database_cluster";
    public const NOSQL_DB_CLUSTER = "kuber_nosql_database_cluster";
    public const MESSAGE_BROKER = "MessageBroker";
    public const SECURITY = "Security";
    public const TASK_MANAGER = "TaskManager";
    public const USERS = "Users";
    public const SCORING = "Scoring";

    /**
     * Имя микросервиса из констант класса @MicroservicesListEnum
     *
     * @var string
     */
    private string $microserviceName;


    /**
     * @return string
     */
    public function getMicroserviceName(): string
    {
        return $this->microserviceName;
    }

    /**
     * Устанавливаем значение из констант текущего класса
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