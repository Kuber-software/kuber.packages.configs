<?php


namespace Kubersoftware\Dto\SessionService;


class SessionServiceEnum
{
    public const USER_SESSIONS_LIFETIME_IN_HOURS = 8760;
    public const USER_SESSIONS_DATETIME_FORMAT = 'm-d-Y H:i:s';
    public const USER_SESSIONS_MONGO_COLLECTION = "user_sessions";
}