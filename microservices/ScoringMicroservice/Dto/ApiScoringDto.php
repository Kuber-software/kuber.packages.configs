<?php


namespace Kubersoftware\Microservices\ScoringMicroservice;


use Kubersoftware\Microservices\MicroservicesListEnum;

class ApiScoringDto
{
    /**
     * Название сервиса, который отправляет запрос
     */
    private MicroservicesListEnum $serviceName;


    /**
     * ИНН
     *
     * @var string
     */
    private string $inn;


    /**
     * @return MicroservicesListEnum
     */
    public function getServiceName(): MicroservicesListEnum
    {
        return $this->serviceName;
    }


    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }


}