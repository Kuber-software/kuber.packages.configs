<?php
namespace Kubersoftware\Dto\CalculatorService;

use DateTime;

class InputCalculatorTaskDto
{
    private string $serviceName;
    private string $taskName;
    private string $taskGuid;
    private string $userGuid;
    private DateTime $createdAt;
    private CalculatorOrderParamsDto $params;

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return InputCalculatorTaskDto
     */
    public function setServiceName(string $serviceName): InputCalculatorTaskDto
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskName(): string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return InputCalculatorTaskDto
     */
    public function setTaskName(string $taskName): InputCalculatorTaskDto
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskGuid(): string
    {
        return $this->taskGuid;
    }

    /**
     * @param string $taskGuid
     * @return InputCalculatorTaskDto
     */
    public function setTaskGuid(string $taskGuid): InputCalculatorTaskDto
    {
        $this->taskGuid = $taskGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserGuid(): string
    {
        return $this->userGuid;
    }

    /**
     * @param string $userGuid
     * @return InputCalculatorTaskDto
     */
    public function setUserGuid(string $userGuid): InputCalculatorTaskDto
    {
        $this->userGuid = $userGuid;
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
     * @return InputCalculatorTaskDto
     */
    public function setCreatedAt(DateTime $createdAt): InputCalculatorTaskDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return CalculatorOrderParamsDto
     */
    public function getParams(): CalculatorOrderParamsDto
    {
        return $this->params;
    }

    /**
     * @param CalculatorOrderParamsDto $params
     * @return InputCalculatorTaskDto
     */
    public function setParams(CalculatorOrderParamsDto $params): InputCalculatorTaskDto
    {
        $this->params = $params;
        return $this;
    }
}