<?php
namespace kilobook\interfaces\books;

use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use kilobook\interfaces\IHasDays;
use kilobook\interfaces\IHasMonths;
use kilobook\interfaces\IHasPerDay;
use kilobook\interfaces\IHasPerMonth;
use kilobook\interfaces\IHasPerWeek;
use kilobook\interfaces\IHasWeeks;
use kilobook\interfaces\users\IHasUser;

/**
 * Interface IBookPlan
 *
 * @package kilobook\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBookPlan extends
    IItem,
    IHasName,
    IHasPerDay,
    IHasPerWeek,
    IHasPerMonth,
    IHasDays,
    IHasWeeks,
    IHasMonths,
    IHasBook,
    IHasUser
{
    const SUBJECT = 'kilobook.book.plan';
}
