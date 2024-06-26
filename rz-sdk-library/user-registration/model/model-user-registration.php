<?php
namespace RzSDK\Model\User\Registration;
require_once("enum-user-registration.php");
use RzSdk\Model\User\Registration\UserRegistrationEnum;

class UserRegistrationModel {
    public $table = "user_registration";
    public $userId = "user_regi_id";
    public $modifiedDate = "modified_date";
    public $createdDate = "created_date";
    public UserRegistrationEnum $userRegistrationEnum;
}