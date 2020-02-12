<?php
namespace kilobook\components\users;

use extas\components\repositories\Repository;
use kilobook\interfaces\users\IUserRepository;

/**
 * Class UserRepository
 *
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserRepository extends Repository implements IUserRepository
{
    protected $scope = 'kilobook';
    protected $name = 'users';
    protected $pk = User::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = User::class;
}
