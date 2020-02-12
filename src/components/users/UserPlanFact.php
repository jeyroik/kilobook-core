<?php
namespace kilobook\components\users;

use kilobook\interfaces\users\IUserPlanFact;

/**
 * Class UserPlanFact
 *
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlanFact extends UserPlan implements IUserPlanFact
{
    /**
     * @return string
     */
    public function getUserPlanName(): string
    {
        return $this->config[static::FIELD__USER_PLAN_NAME] ?? '';
    }

    /**
     * @param string $name
     *
     * @return IUserPlanFact
     */
    public function setUserPlanName(string $name): IUserPlanFact
    {
        $this->config[static::FIELD__USER_PLAN_NAME] = $name;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'kilobook.user.plan.fact';
    }
}
