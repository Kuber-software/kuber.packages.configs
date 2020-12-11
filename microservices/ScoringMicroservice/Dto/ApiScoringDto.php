<?php


namespace Kubersoftware\Microservices\ScoringMicroservice\Dto;


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
     * Баланс Dadata
     *
     * @var string
     */
    private string $balanceDadata;



    /**
     * @return string
     */
    public function getBalanceDadata(): string
    {
        return $this->balanceDadata;
    }

    /**
     * @param string $balanceDadata
     * @return ApiScoringDto
     */
    public function setBalanceDadata(string $balanceDadata): ApiScoringDto
    {
        $this->balanceDadata = $balanceDadata;
        return $this;
    }


    /**
     * @return MicroservicesListEnum
     */
    public function getServiceName(): MicroservicesListEnum
    {
        return $this->serviceName;
    }


    /**
     * @param MicroservicesListEnum $serviceName
     * @return ApiScoringDto
     */
    public function setServiceName(MicroservicesListEnum $serviceName): ApiScoringDto
    {
        $this->serviceName = $serviceName;
        return $this;
    }


    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }


    /**
     * @param string $inn
     * @return ApiScoringDto
     */
    public function setInn(string $inn): ApiScoringDto
    {
        $this->inn = $inn;
        return $this;
    }


}