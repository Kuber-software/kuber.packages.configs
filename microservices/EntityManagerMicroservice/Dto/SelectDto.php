<?php


namespace Kubersoftware\Microservices\EntityManagerMicroservice\Dto;


use Doctrine\Common\Collections\ArrayCollection;

class SelectDto extends AbstractEntityManagerDto
{
    /**
     * Критерии выборки из БД.
     * Пример: [ 'name' => 'user_name', 'isActual' => false ]
     *
     * @var ArrayCollection
     */
    private ArrayCollection $criteria;

    /**
     * @return ArrayCollection
     */
    public function getCriteria(): ArrayCollection
    {
        return $this->criteria;
    }

    /**
     * @param ArrayCollection $criteria
     * @return SelectDto
     */
    public function setCriteria(ArrayCollection $criteria): SelectDto
    {
        $this->criteria = $criteria;
        return $this;
    }
}