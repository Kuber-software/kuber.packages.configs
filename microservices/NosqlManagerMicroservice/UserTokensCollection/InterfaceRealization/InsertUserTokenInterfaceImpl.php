<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\InterfaceRealization;


use Kubersoftware\Microservices\MessageBrokerMicroservice\Dto\MessageBrokerDto;
use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokensCollection\Dto\InsertUserTokenDto;

class InsertUserTokenInterfaceImpl implements InsertUserTokenInterface
{
    private MessageBrokerDto $messageBrokerDto;
    private InsertUserTokenDto $insertUserTokenDto;
    private InsertUserTokenDto $result;

    public function getMessageObject(): MessageBrokerDto
    {
        return $this->messageBrokerDto;
    }

    public function setMessageObject(MessageBrokerDto $messageBrokerDto): InsertUserTokenInterface
    {
        $this->messageBrokerDto = $messageBrokerDto;
        return $this;
    }

    public function setUserToken(InsertUserTokenDto $userTokenDto): InsertUserTokenInterface
    {
        $this->insertUserTokenDto = $userTokenDto;
        return $this;
    }

    public function getUserToken(): InsertUserTokenDto
    {
        return $this->insertUserTokenDto;
    }

    public function setResult(InsertUserTokenDto $result): InsertUserTokenInterface
    {
        $this->result = $result;
        return $this;
    }

    public function getResult(): InsertUserTokenDto
    {
        return $this->result;
    }
}