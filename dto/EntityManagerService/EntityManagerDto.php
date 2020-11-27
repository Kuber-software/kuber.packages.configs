<?php
namespace Kubersoftware\Dto\EntityManagerService;

use DateTimeInterface;
use Kubersoftware\Enum\EntityManagerTypesEnum;
use Kubersoftware\Enum\ServicesListEnum;

class EntityManagerDto
{
    private string $service; //object
    private string $type; //object
    private string $json;
    private DateTimeInterface $createdAt;

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param ServicesListEnum $service
     * @return EntityManagerDto
     */
    public function setService(ServicesListEnum $service): EntityManagerDto
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param EntityManagerTypesEnum $type
     * @return EntityManagerDto
     */
    public function setType(EntityManagerTypesEnum $type): EntityManagerDto
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getJson(): string
    {
        return $this->json;
    }

    /**
     * @param string $json
     * @return EntityManagerDto
     */
    public function setJson(string $json): EntityManagerDto
    {
        $this->json = $json;
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
     * @return EntityManagerDto
     */
    public function setCreatedAt(DateTimeInterface $createdAt): EntityManagerDto
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}