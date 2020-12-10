<?php

namespace Kubersoftware\Microservices\TaskManagerMicroservice\Enum;

use Kubersoftware\Microservices\KubeNosqlDatabaseClusterMicroservice\Enum\AbstractMongoCollectionsEnum;
use Kubersoftware\Microservices\MicroservicesListEnum;

/**
 * @IgnoreAnnotation("MicroservicesListEnum")
 *
 * Class MongoCollectionsEnum
 */
class MongoCollectionsEnum extends AbstractMongoCollectionsEnum
{

    /**
     * Список всех задач микросервиса TaskManagerMicroservice
     */
    public const TASKS_LIST = 'task-list';

}