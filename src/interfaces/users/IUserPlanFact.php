<?php
namespace kilobook\interfaces\users;

/**
 * Interface IUserPlanFact
 *
 * @package kilobook\interfaces\users
 * @author jeyroik@gmail.com
 */
interface IUserPlanFact extends IUserPlan
{
    const FIELD__USER_PLAN_NAME = 'user_plan';

    /**
     * @return string
     */
    public function getUserPlanName(): string;

    /**
     * @param string $name
     *
     * @return IUserPlanFact
     */
    public function setUserPlanName(string $name): IUserPlanFact;
}
