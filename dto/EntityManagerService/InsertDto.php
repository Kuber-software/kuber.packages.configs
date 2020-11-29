<?php
namespace Kubersoftware\Dto\EntityManagerService;

use DateTime;

class InsertDto
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
     * Время создания объекта
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Имя объекта из списка @\Kubersoftware\Enum\EntityManagerService\EntityNameEnum
     *
     * @var string
     */
    private string $objectEntityName;

    /**
     * Объект в формате json
     *
     * @var string
     */
    private string $objectJsonValue;



    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return InsertDto
     */
    public function setServiceName(string $serviceName): InsertDto
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
     * @return InsertDto
     */
    public function setCreatedAt(DateTime $createdAt): InsertDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectEntityName(): string
    {
        return $this->objectEntityName;
    }

    /**
     * @param string $objectEntityName
     * @return InsertDto
     */
    public function setObjectEntityName(string $objectEntityName): InsertDto
    {
        $this->objectEntityName = $objectEntityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectJsonValue(): string
    {
        return $this->objectJsonValue;
    }

    /**
     * @param string $objectJsonValue
     * @return InsertDto
     */
    public function setObjectJsonValue(string $objectJsonValue): InsertDto
    {
        $this->objectJsonValue = $objectJsonValue;
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
     * @return InsertDto
     */
    public function setTaskGuid(string $taskGuid): InsertDto
    {
        $this->taskGuid = $taskGuid;
        return $this;
    }
}