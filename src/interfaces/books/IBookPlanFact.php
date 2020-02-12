<?php
namespace kilobook\interfaces\books;

/**
 * Interface IBookPlanFact
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBookPlanFact extends IBookPlan
{
    const FIELD__BOOK_PLAN_NAME = 'book_plan_name';

    /**
     * @return string
     */
    public function getBookPlanName(): string;

    /**
     * @param string $name
     * 
     * @return IBookPlanFact
     */
    public function setBookPlanName(string $name): IBookPlanFact;
}
