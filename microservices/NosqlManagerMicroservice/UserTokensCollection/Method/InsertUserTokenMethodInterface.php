<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Method;


use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Dto\InsertUserTokenDto;

interface InsertUserTokenMethodInterface
{
    public function setInputObject(InsertUserTokenDto $inputObject): self;

    public function getInputObject(): InsertUserTokenDto;

    public function setOutputObject(InsertUserTokenDto $inputObject): self;

    public function getOutputObject(): InsertUserTokenDto;

    public function setUpdatedAt(\DateTime $updatedAt): self;

    public function getUpdatedAt(): \DateTime;
}