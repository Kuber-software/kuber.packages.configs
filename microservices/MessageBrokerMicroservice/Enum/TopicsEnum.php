<?php

namespace Kubersoftware\Microservices\MessageBrokerMicroservice\Enum;


class TopicsEnum
{

    /**
     * Очередь для отправки результатов
     */
    public const RESULTS_TOPIC = "qResult";

    /**
     * OLD Очередь отправки задач для микросервиса EntityManager
     * @\Kubersoftware\Dto\EntityManagerService\InsertDto
     */
    public const ENTITY_MANAGER_INSERT_TOPIC = "qEntityManager_InsertDto";

    /**
     * OLD
     */
    public const CALULATOR_TOPIC = "qCalculator";


    /**
     * ACTUAL
     */
    public const TASK_MANAGER_TOPIC = "TaskManager";

    /**
     * ACTUAL. Очередь для отправки сообщений в микросервис ApiDoc
     */
    public const APIDOC_TOPIC = 'ApiDoc';

    /**
     * ACTUAL Очередь для отправки ошибок
     */
    public const LOGGER_TOPIC = "Logger";

    /**
     * ACTUAL Очередь для получения задач для микросервиса EntityManager
     */
    public const ENTITY_MANAGER_TOPIC = "EntityManager";
}