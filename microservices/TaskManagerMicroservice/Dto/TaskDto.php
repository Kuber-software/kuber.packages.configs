<?php


namespace Kubersoftware\Microservices\TaskManagerMicroservice\Dto;


use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Kubersoftware\Microservices\MicroservicesListEnum;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;


/**
 * @IgnoreAnnotation("MicroservicesListEnum")
 * @IgnoreAnnotation("EntityManagerDto")
 *
 * Class TaskDto
 * @package Kubersoftware\Microservices\TaskManagerMicroservice\Dto
 */
abstract class TaskDto
{
    /**
     * Уникальный индетификатор задачи, выставляемый сервисом TaskManager
     *
     * @var UuidInterface
     */
    private UuidInterface $uuid;

    /**
     * Имя микросервиса из констант класса @MicroservicesListEnum
     *
     * @var MicroservicesListEnum
     */
    private MicroservicesListEnum $microservice;

    /**
     * Время создания объекта/задания
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Время выполненения задачи (выставляется после отработки задания)
     *
     * @var DateTime
     */
    private DateTime $completedAt;


    private ArrayCollection $arrayCollection;


    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->taskGuid = Uuid::uuid4();
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @return MicroservicesListEnum
     */
    public function getMicroservice(): MicroservicesListEnum
    {
        return $this->microservice;
    }

    /**
     * @param MicroservicesListEnum $microservice
     * @return TaskDto
     */
    public function setMicroservice(MicroservicesListEnum $microservice): TaskDto
    {
        $this->microservice = $microservice;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return TaskDto
     */
    public function setCreatedAt(DateTime $createdAt): TaskDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCompletedAt(): DateTime
    {
        return $this->completedAt;
    }

    /**
     * @return ArrayCollection
     */
    public function getArrayCollection(): ArrayCollection
    {
        return $this->arrayCollection;
    }

    /**
     * @param ArrayCollection $arrayCollection
     * @return TaskDto
     */
    public function setArrayCollection(ArrayCollection $arrayCollection): TaskDto
    {
        $this->arrayCollection = $arrayCollection;
        return $this;
    }

}