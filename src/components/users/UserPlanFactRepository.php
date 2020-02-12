<?php
namespace kilobook\components\users;

use extas\components\repositories\Repository;
use kilobook\interfaces\users\IUserPlanFactRepository;

/**
 * Class UserPlanFactRepository
 *
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlanFactRepository extends Repository implements IUserPlanFactRepository
{
    protected $scope = 'kilobook';
    protected $name = 'user_plans_facts';
    protected $pk = UserPlanFact::FIELD__NAME;
    protected $idAs = UserPlanFact::FIELD__NAME;
    protected $itemClass = UserPlanFact::class;
};
