<?php

namespace Kubersoftware\Dto\UserTokenService;

use DateTime;

class UserTokenDto
{
    private string $userEmail;
    private string $userCsrfToken;
    private array $userRoles;
    private string $sessionID;
    private DateTime $createdAt;
    private DateTime $livedAt;

}