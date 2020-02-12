<?php
namespace kilobook\interfaces\users;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use kilobook\interfaces\books\IHasBook;
use kilobook\interfaces\IHasComment;
use kilobook\interfaces\IHasDay;
use kilobook\interfaces\IHasMonth;
use kilobook\interfaces\IHasPages;
use kilobook\interfaces\IHasWeek;
use kilobook\interfaces\IHasWeekDay;
use kilobook\interfaces\IHasYear;

/**
 * Interface IUserPlanStep
 *
 * @package kilobook\interfaces\users
 * @author jeyroik@gmail.com
 */
interface IUserPlanStep extends
    IItem,
    IHasId,
    IHasComment,
    IHasCreatedAt,
    IHasDay,
    IHasWeek,
    IHasMonth,
    IHasYear,
    IHasPages,
    IHasWeekDay,
    IHasBook,
    IHasUser
{
    const SUBJECT = 'kilobook.user.plan.step';

    const FIELD__USER_PLAN_FACT_NAME = 'user_plan_fact_name';

    /**
     * @return string
     */
    public function getUserPlanFactName(): string;

    /**
     * @param string $userPlanFactName
     *
     * @return IUserPlanStep
     */
    public function setUserPlanFactName(string $userPlanFactName): IUserPlanStep;
}
