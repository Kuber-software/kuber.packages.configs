<?php

namespace Kubersoftware\Microservices\KubeNosqlDatabaseClusterMicroservice\Enum;

use Kubersoftware\Microservices\ServicesListEnum;

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
     * Название микросервиса
     * @var ServicesListEnum
     */
    private ServicesListEnum $service;

    /**
     * Название коллекции
     * Получаем из констант класса @MongoCollectionsEnum
     * @var string
     */
    private string $collection;

    /**
     * @return ServicesListEnum
     */
    public function getService(): ServicesListEnum
    {
        return $this->service;
    }

    /**
     * @param ServicesListEnum $service
     * @return MongoCollectionsEnum
     */
    public function setService(ServicesListEnum $service): MongoCollectionsEnum
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
    public function generateCollectionName(): string
    {
        return $this->getService()->getServiceName() . '.' . $this->getCollection();
    }
}