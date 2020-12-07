<?php


namespace Kubersoftware\Microservices\TaskManagerMicroservice\Dto;


use DateTime;

class TaskDto
{
    /**
     * Уникальный индетификатор задачи, выставляемый сервисом TaskManager
     *
     * @var string
     */
    private string $taskGuid;

    /**
     * Название сервиса, который отправил объект.
     * Название берется из списка @\Kubersoftware\Enum\ServicesListEnum
     *
     * @var string
     */
    private string $serviceName;

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
     *
     */
    private string $result = '';


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
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return TaskDto
     */
    public function setServiceName(string $serviceName): TaskDto
    {
        $this->serviceName = $serviceName;
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
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return TaskDto
     */
    public function setResult(string $result): TaskDto
    {
        $this->result = $result;
        return $this;
    }
}