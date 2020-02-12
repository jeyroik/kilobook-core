<?php
namespace kilobook\components\users;

use extas\components\SystemContainer;
use kilobook\interfaces\users\IHasUser;
use kilobook\interfaces\users\IUser;
use kilobook\interfaces\users\IUserRepository;

/**
 * Trait THasUser
 * 
 * @property $config
 * 
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
trait THasUser
{
    /**
     * @return IUser|null
     */
    public function getUser(): ?IUser
    {
        /**
         * @var $repo IUserRepository
         */
        $repo = SystemContainer::getItem(IUserRepository::class);
        
        return $repo->one([IUser::FIELD__NAME => $this->getUserName()]);
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->config[IHasUser::FIELD__USER_NAME] ?? '';
    }

    /**
     * @param IUser $user
     * 
     * @return $this
     */
    public function setUser(IUser $user)
    {
        return $this->setUserName($user->getName());
    }

    /**
     * @param string $userName
     * 
     * @return $this
     */
    public function setUserName(string $userName)
    {
        $this->config[IHasUser::FIELD__USER_NAME] = $userName;
        
        return $this;
    }
}
