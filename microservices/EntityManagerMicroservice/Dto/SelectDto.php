<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use DateTime;
use Kubersoftware\Microservices\MicroservicesListEnum;

class SelectDto extends AbstractEntityManagerDto
{
    /**
     * Критерии выборки из БД.
     * Пример: [ 'name' => 'user_name', 'isActual' => false ]
     *
     * @var array
     */
    private array $criteria;


    /**
     * @return array
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }

    /**
     * @param array $criteria
     * @return SelectDto
     */
    public function setCriteria(array $criteria): SelectDto
    {
        $this->criteria = $criteria;
        return $this;
    }
}