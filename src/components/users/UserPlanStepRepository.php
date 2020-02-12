<?php
namespace kilobook\components\users;

use extas\components\repositories\Repository;
use kilobook\interfaces\users\IUserPlanStepRepository;

/**
 * Class UserPlanStepRepository
 *
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlanStepRepository extends Repository implements IUserPlanStepRepository
{
    protected $itemClass = UserPlanStep::class;
    protected $idAs = UserPlanStep::FIELD__ID;
    protected $pk = UserPlanStep::FIELD__ID;
    protected $name = 'user_plans_steps';
    protected $scope = 'kilobook';
}
