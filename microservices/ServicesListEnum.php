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
class ServicesListEnum extends Enum
{
    private const SERVICE_API_DOC = "ApiDoc";
    private const SERVICE_ENTITY_MANAGER = "EntityManager";
    private const SERVICE_CHECKER = "Checker";
    private const SERVICE_MAIN_DB_CLUSTER = "kuber_main_database_cluster";
    private const SERVICE_NOSQL_DB_CLUSTER = "kuber_nosql_database_cluster";
    private const SERVICE_MESSAGE_BROKER = "MessageBroker";
    private const SERVICE_SECURITY = "Security";
    private const SERVICE_TASK_MANAGER = "TaskManager";
    private const SERVICE_USERS = "Users";
    private const SERVICE_VALIDATOR = "Validator";

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_API_DOC()
    {
        return new self(self::SERVICE_API_DOC);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_ENTITY_MANAGER()
    {
        return new self(self::SERVICE_ENTITY_MANAGER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_CHECKER()
    {
        return new self(self::SERVICE_CHECKER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_MAIN_DB_CLUSTER()
    {
        return new self(self::SERVICE_MAIN_DB_CLUSTER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_NOSQL_DB_CLUSTER()
    {
        return new self(self::SERVICE_NOSQL_DB_CLUSTER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_MESSAGE_BROKER()
    {
        return new self(self::SERVICE_MESSAGE_BROKER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_SECURITY()
    {
        return new self(self::SERVICE_SECURITY);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_TASK_MANAGER()
    {
        return new self(self::SERVICE_TASK_MANAGER);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_USERS()
    {
        return new self(self::SERVICE_USERS);
    }

    /**
     * @return ServicesListEnum
     */
    public static function SERVICE_VALIDATOR()
    {
        return new self(self::SERVICE_VALIDATOR);
    }
}