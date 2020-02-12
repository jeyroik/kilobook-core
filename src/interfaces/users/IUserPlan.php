<?php
namespace kilobook\interfaces\users;

use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use kilobook\interfaces\IHasDays;
use kilobook\interfaces\IHasMonths;
use kilobook\interfaces\IHasPages;
use kilobook\interfaces\IHasPerDay;
use kilobook\interfaces\IHasPerMonth;
use kilobook\interfaces\IHasPerWeek;
use kilobook\interfaces\IHasPerYear;
use kilobook\interfaces\IHasWeeks;
use kilobook\interfaces\IHasYears;

/**
 * Interface IUserPlan
 *
 * @package kilobook\interfaces\users
 * @author jeyroik@gmail.com
 */
interface IUserPlan extends
    IItem,
    IHasName,
    IHasPerDay,
    IHasPerWeek,
    IHasPerMonth,
    IHasPerYear,
    IHasDays,
    IHasWeeks,
    IHasMonths,
    IHasYears,
    IHasUser,
    IHasPages
{
    const SUBJECT = 'kilobook.user.plan';

    const FIELD__BOOKS = 'books';

    /**
     * @return int
     */
    public function getBooks(): int;

    /**
     * @param int $books
     *
     * @return $this
     */
    public function setBooks(int $books);
}
