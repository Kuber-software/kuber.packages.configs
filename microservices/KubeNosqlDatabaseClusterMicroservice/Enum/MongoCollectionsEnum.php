<?php

namespace Kubersoftware\Microservices\KubeNosqlDatabaseClusterMicroservice\Enum;

use Kubersoftware\Microservices\ServicesListEnum;
use SplEnum;

/**
 * Class MongoCollectionsEnum
 */
class MongoCollectionsEnum extends SplEnum
{
    private string $service;

    private string $collection;


    public const __default = 'default_collection';

    /**
     * Коллекция хранения ключей сессий пользователей для микросервиса Security
     */
    public const USER_SESSIONS_COLLECTION = "user_sessions";

    /**
     * Коллекция хранения информации о задачах для микросервиса TaskManager
     */
    public const TASKMANAGER_COLLECTION = "tasks";


    /**
     * @return ServicesListEnum
     */
    public function getServiceCollectionName(): string
    {
        return $this->service . '.' . $this->collection;
    }

    /**
     * @param MongoCollectionsEnum $collection
     * @return string
     */
    public function setCollection(MongoCollectionsEnum $collection): string
    {
        $this->collection = (new self($collection));
        return $this;
    }

    /**
     * @param ServicesListEnum $service
     * @return ServicesListEnum
     */
    public function setService(ServicesListEnum $service): string
    {
        $this->service = (new ServicesListEnum($service));

        return $this;
    }
}