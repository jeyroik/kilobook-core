<?php
namespace kilobook\interfaces\books;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use kilobook\interfaces\IHasComment;
use kilobook\interfaces\IHasDay;
use kilobook\interfaces\IHasMonth;
use kilobook\interfaces\IHasPages;
use kilobook\interfaces\IHasWeek;
use kilobook\interfaces\IHasWeekDay;
use kilobook\interfaces\IHasYear;
use kilobook\interfaces\users\IHasUser;

/**
 * Interface IBookPlanStep
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBookPlanStep extends
    IItem,
    IHasId,
    IHasPages,
    IHasBook,
    IHasUser,
    IHasCreatedAt,
    IHasDay,
    IHasWeek,
    IHasMonth,
    IHasYear,
    IHasWeekDay,
    IHasComment
{
    const SUBJECT = 'kilobook.book.plan.step';

    const FIELD__BOOK_PLAN_FACT_NAME = 'book_plan_fact_name';

    /**
     * @return string
     */
    public function getBookPlanFactName(): string;

    /**
     * @param string $bookPlanFactName
     *
     * @return IBookPlanStep
     */
    public function setBookPlanFactName(string $bookPlanFactName): IBookPlanStep;
}
