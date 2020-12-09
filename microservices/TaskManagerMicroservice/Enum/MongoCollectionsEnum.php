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


    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return MongoCollectionsEnum
     */
    public function setMicroservice(MicroservicesListEnum $microservice): MongoCollectionsEnum
    {
        $this->microservice = $microservice;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionName(): string
    {
        return $this->collectionName;
    }

    /**
     * Название коллекции, устанавливаем из списка констант @MongoCollectionsEnum
     *
     * @param string $collectionName
     * @return MongoCollectionsEnum
     */
    public function setCollectionName(string $collectionName): MongoCollectionsEnum
    {
        $this->collectionName = $collectionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMicroserviceCollectionName(): string
    {
        return $this->microserviceCollectionName;
    }

    /**
     * @param string $microserviceCollectionName
     * @return MongoCollectionsEnum
     */
    public function setMicroserviceCollectionName(string $microserviceCollectionName): MongoCollectionsEnum
    {
        $this->microserviceCollectionName = $microserviceCollectionName;
        return $this;
    }
}