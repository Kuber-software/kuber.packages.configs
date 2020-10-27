<?php
namespace Kubersoftware\Dto\ErrorService;

use DateTime;

class ErrorTaskDto
{
    private string $taskGuid;
    private DateTime $createdAt;
    private string $serviceName;
    private string $message;

    /**
     * @return string
     */
    public function getTaskGuid(): string
    {
        return $this->taskGuid;
    }

    /**
     * @param string $taskGuid
     * @return ErrorTaskDto
     */
    public function setTaskGuid(string $taskGuid): ErrorTaskDto
    {
        $this->taskGuid = $taskGuid;
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
     * @return ErrorTaskDto
     */
    public function setCreatedAt(DateTime $createdAt): ErrorTaskDto
    {
        $this->createdAt = $createdAt;
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
     * @return ErrorTaskDto
     */
    public function setServiceName(string $serviceName): ErrorTaskDto
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ErrorTaskDto
     */
    public function setMessage(string $message): ErrorTaskDto
    {
        $this->message = $message;
        return $this;
    }
}