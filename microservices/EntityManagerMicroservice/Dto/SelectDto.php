<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class SelectDto
{
    private MicroservicesListEnum $microservice;

    private DateTime $createdAt;



    private array $criteria;

}