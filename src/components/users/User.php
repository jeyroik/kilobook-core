<?php
namespace kilobook\components\users;

use extas\components\players\Player;
use extas\components\THasType;
use kilobook\interfaces\users\IUser;

/**
 * Class User
 * 
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class User extends Player implements IUser
{
    use THasType;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'kilobook.user';
    }
}
