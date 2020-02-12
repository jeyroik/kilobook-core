<?php
namespace kilobook\components\users;

use extas\components\repositories\Repository;
use kilobook\interfaces\users\IUserPlanRepository;

/**
 * Class UserPlanRepository
 * 
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlanRepository extends Repository implements IUserPlanRepository
{
    protected $scope = 'kilobook';
    protected $name = 'user_plans';
    protected $pk = UserPlan::FIELD__NAME;
    protected $idAs = UserPlan::FIELD__NAME;
    protected $itemClass = UserPlan::class;
};
