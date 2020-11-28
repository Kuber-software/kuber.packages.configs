<?php
namespace Kubersoftware\Dto\EntityManagerService;


use DateTimeInterface;

class InsertObject
{
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
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;

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
     * @return InsertObject
     */
    public function setServiceName(string $serviceName): InsertObject
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     * @return InsertObject
     */
    public function setCreatedAt(DateTimeInterface $createdAt): InsertObject
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
     * @return InsertObject
     */
    public function setObjectEntityName(string $objectEntityName): InsertObject
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
     * @return InsertObject
     */
    public function setObjectJsonValue(string $objectJsonValue): InsertObject
    {
        $this->objectJsonValue = $objectJsonValue;
        return $this;
    }
}