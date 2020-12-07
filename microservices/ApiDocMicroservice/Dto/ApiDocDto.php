<?php
namespace Kubersoftware\Microservices\ApiDocMicroservice\Dto;

use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class ApiDocDto
{
    /**
     * Название сервиса, который отправляет документацию
     */
    private MicroservicesListEnum $serviceName;

    /**
     * Дата отправки документации.
     * Также используется для версионности
     *
     * @var DateTime
     */
    private DateTime $dateTime;

    /**
     * Документация в формате json
     *
     * @var string
     */
    private string $docs;


    /**
     * @return MicroservicesListEnum
     */
    public function getServiceName(): MicroservicesListEnum
    {
        return $this->serviceName;
    }

    /**
     * @param MicroservicesListEnum $serviceName
     * @return ApiDocDto
     */
    public function setServiceName(MicroservicesListEnum $serviceName): ApiDocDto
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param DateTime $dateTime
     * @return ApiDocDto
     */
    public function setDateTime(DateTime $dateTime): ApiDocDto
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocs(): string
    {
        return $this->docs;
    }

    /**
     * @param string $docs
     * @return ApiDocDto
     */
    public function setDocs(string $docs): ApiDocDto
    {
        $this->docs = $docs;
        return $this;
    }
}