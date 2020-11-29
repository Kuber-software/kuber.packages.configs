<?php
namespace Kubersoftware\Dto\TaskManagerService;

use DateTime;

class ResultDto
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
     * Время создания объекта (задания)
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Время выполненения задачи (выставляется перед отправкой)
     *
     * @var DateTime
     */
    private DateTime $completedAt;

    /**
     * Результат выполнения задачи
     *
     */
    private string $result;

    /**
     * @return string
     */
    public function getTaskGuid(): string
    {
        return $this->taskGuid;
    }

    /**
     * @param string $taskGuid
     * @return ResultDto
     */
    public function setTaskGuid(string $taskGuid): ResultDto
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
     * @return ResultDto
     */
    public function setServiceName(string $serviceName): ResultDto
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
     * @return ResultDto
     */
    public function setCreatedAt(DateTime $createdAt): ResultDto
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
     * @return ResultDto
     */
    public function setCompletedAt(DateTime $completedAt): ResultDto
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
     * @return ResultDto
     */
    public function setResult(string $result): ResultDto
    {
        $this->result = $result;
        return $this;
    }
}