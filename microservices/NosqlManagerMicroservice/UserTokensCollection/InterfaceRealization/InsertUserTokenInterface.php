<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\InterfaceRealization;


use Kubersoftware\Microservices\MessageBrokerMicroservice\Dto\MessageBrokerDto;
use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Dto\InsertUserTokenDto;

interface InsertUserTokenInterface
{
    public function getMessageObject(): MessageBrokerDto;

    public function setMessageObject(MessageBrokerDto $messageBrokerDto): self;

    public function setUserToken(InsertUserTokenDto $userTokenDto): self;

    public function getUserToken(): InsertUserTokenDto;

    public function setResult(InsertUserTokenDto $insertUserTokenDto): self;

    public function getResult(): InsertUserTokenDto;
}