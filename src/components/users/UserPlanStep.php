<?php
namespace kilobook\components\users;

use extas\components\Item;
use extas\components\THasCreatedAt;
use extas\components\THasId;
use kilobook\components\books\THasBook;
use kilobook\components\THasComment;
use kilobook\components\THasDay;
use kilobook\components\THasMonth;
use kilobook\components\THasPages;
use kilobook\components\THasWeek;
use kilobook\components\THasWeekDay;
use kilobook\components\THasYear;
use kilobook\interfaces\users\IUserPlanStep;

/**
 * Class UserPlanStep
 *
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlanStep extends Item implements IUserPlanStep
{
    use THasId;
    use THasUser;
    use THasBook;
    use THasPages;
    use THasDay;
    use THasWeek;
    use THasWeekDay;
    use THasMonth;
    use THasYear;
    use THasCreatedAt;
    use THasComment;

    /**
     * @return string
     */
    public function getUserPlanFactName(): string
    {
        return $this->config[static::FIELD__USER_PLAN_FACT_NAME] ?? '';
    }

    /**
     * @param string $userPlanFactName
     *
     * @return IUserPlanStep
     */
    public function setUserPlanFactName(string $userPlanFactName): IUserPlanStep
    {
        $this->config[static::FIELD__USER_PLAN_FACT_NAME] = $userPlanFactName;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
