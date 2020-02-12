<?php
namespace kilobook\components\books;

use extas\components\Item;
use extas\components\THasCreatedAt;
use extas\components\THasId;
use kilobook\components\THasComment;
use kilobook\components\THasDay;
use kilobook\components\THasMonth;
use kilobook\components\THasPages;
use kilobook\components\THasWeek;
use kilobook\components\THasWeekDay;
use kilobook\components\THasYear;
use kilobook\components\users\THasUser;
use kilobook\interfaces\books\IBookPlanStep;

/**
 * Class BookPlanStep
 *
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlanStep extends Item implements IBookPlanStep
{
    use THasCreatedAt;
    use THasId;
    use THasDay;
    use THasWeek;
    use THasWeekDay;
    use THasMonth;
    use THasYear;
    use THasPages;
    use THasBook;
    use THasUser;
    use THasComment;

    /**
     * @return string
     */
    public function getBookPlanFactName(): string
    {
        return $this->config[static::FIELD__BOOK_PLAN_FACT_NAME] ?? '';
    }

    /**
     * @param string $bookPlanFactName
     *
     * @return IBookPlanStep
     */
    public function setBookPlanFactName(string $bookPlanFactName): IBookPlanStep
    {
        $this->config[static::FIELD__BOOK_PLAN_FACT_NAME] = $bookPlanFactName;

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
