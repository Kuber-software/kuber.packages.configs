<?php

namespace Kubersoftware\Enum;


class RabbitTopicsEnum
{
    # Default topics
    public const RESULTS_TOPIC = "qResult";
    public const ERRORS_TOPIC = "qError";

    # Entity_manager microservice
    public const ENTITY_MANAGER_TOPIC = "qEntityManager";

    /**
     * Очередь для отправки объектов @\Kubersoftware\Dto\EntityManagerService\InsertDto
     */
    public const ENTITY_MANAGER_INSERT_TOPIC = "qEntityManager_InsertDto";

    #
    public const TASKMANAGER_TOPIC = "qTaskManager";
    public const CALULATOR_TOPIC = "qCalculator";

}