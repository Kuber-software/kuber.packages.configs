<?php

namespace Kubersoftware\Microservices\KubeNosqlDatabaseClusterMicroservice\Enum;

use Kubersoftware\Microservices\MicroservicesListEnum;

abstract class AbstractMongoCollectionsEnum
{
    protected MicroservicesListEnum $microservice;

    protected string $collectionName;

    protected string $microserviceCollectionName = 'default';

    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return AbstractMongoCollectionsEnum
     */
    public function setMicroservice(MicroservicesListEnum $microservice): AbstractMongoCollectionsEnum
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
     * @param string $collectionName
     * @return AbstractMongoCollectionsEnum
     */
    public function setCollectionName(string $collectionName): AbstractMongoCollectionsEnum
    {
        $this->collectionName = $collectionName;
        return $this;
    }

    public function setMicroserviceCollectionName(): AbstractMongoCollectionsEnum
    {
        $this->microserviceCollectionName = $this->getMicroservice()->getMicroserviceName() . '.' . $this->getCollectionName();
        return $this;
    }


    public function getMicroserviceCollectionName(): string
    {
        return $this->microserviceCollectionName;
    }
}