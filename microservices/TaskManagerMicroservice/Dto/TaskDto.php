<?php


namespace Kubersoftware\Microservices\TaskManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;


/**
 * @IgnoreAnnotation("MicroservicesListEnum")
 * @IgnoreAnnotation("EntityManagerDto")
 *
 * Class TaskDto
 * @package Kubersoftware\Microservices\TaskManagerMicroservice\Dto
 */
class TaskDto
{
    /**
     * Уникальный индетификатор задачи, выставляемый сервисом TaskManager
     *
     * @var string
     */
    private string $taskGuid;

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

    /**
     * Результат выполнения задачи (выставляется после отработки задания)
     * Может быть ответ
     *
     */
    private string $response = '';


    /**
     * @return string
     */
    public function getTaskGuid(): string
    {
        return $this->taskGuid;
    }

    /**
     * @param string $taskGuid
     * @return TaskDto
     */
    public function setTaskGuid(string $taskGuid): TaskDto
    {
        $this->taskGuid = $taskGuid;
        return $this;
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
     * @param DateTime $completedAt
     * @return TaskDto
     */
    public function setCompletedAt(DateTime $completedAt): TaskDto
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return TaskDto
     */
    public function setResponse(string $response): TaskDto
    {
        $this->response = $response;
        return $this;
    }
}