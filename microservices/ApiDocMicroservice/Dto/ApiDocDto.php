<?php
namespace Kubersoftware\Microservices\ApiDocMicroservice\Dto;

use DateTime;
use Kubersoftware\Microservices\ServicesListEnum;

class ApiDocDto
{
    /**
     * Название сервиса, который отправляет документацию
     */
    private ServicesListEnum $serviceName;

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
     * @return ServicesListEnum
     */
    public function getServiceName(): ServicesListEnum
    {
        return $this->serviceName;
    }

    /**
     * @param ServicesListEnum $serviceName
     * @return ApiDocDto
     */
    public function setServiceName(ServicesListEnum $serviceName): ApiDocDto
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