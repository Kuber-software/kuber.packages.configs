<?php

namespace Kubersoftware\Microservices\KubeNosqlDatabaseClusterMicroservice\Enum;

use Kubersoftware\Microservices\MicroservicesListEnum;

/**
 * Class MongoCollectionsEnum
 */
class MongoCollectionsEnum
{
    /**
     * Коллекция хранения ключей сессий пользователей для микросервиса Security
     */
    public const USER_SESSIONS_COLLECTION = "user_sessions";

    /**
     * Коллекция хранения информации о задачах для микросервиса TaskManager
     */
    public const TASKMANAGER_COLLECTION = "tasks";


    /**
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $service;

    /**
     * @var string
     */
    private string $collection;


    /**
     * @return MicroservicesListEnum
     */
    public function getService(): MicroservicesListEnum
    {
        return $this->service;
    }

    /**
     * @param MicroservicesListEnum $service
     * @return MongoCollectionsEnum
     */
    public function setService(MicroservicesListEnum $service): MongoCollectionsEnum
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollection(): string
    {
        return $this->collection;
    }

    /**
     * @param string $collection
     * @return MongoCollectionsEnum
     */
    public function setCollection(string $collection): MongoCollectionsEnum
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCollection(): string
    {
        return $this->service->getMicroserviceName() . '.' . $this->collection;
    }
}