<?php
namespace kilobook\interfaces\users;

/**
 * Interface IHasUser
 *
 * @package kilobook\interfaces\users
 * @author jeyroik@gmail.com
 */
interface IHasUser
{
    const FIELD__USER_NAME = 'user_name';

    /**
     * @return IUser|null
     */
    public function getUser(): ?IUser;

    /**
     * @return string
     */
    public function getUserName(): string;

    /**
     * @param IUser $user
     *
     * @return $this
     */
    public function setUser(IUser $user);

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName(string $userName);
}
