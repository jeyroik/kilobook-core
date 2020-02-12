<?php
namespace kilobook\components\books;

use extas\components\Item;
use extas\components\THasName;
use kilobook\components\THasDays;
use kilobook\components\THasMonths;
use kilobook\components\THasPerDay;
use kilobook\components\THasPerMonth;
use kilobook\components\THasPerWeek;
use kilobook\components\THasWeeks;
use kilobook\components\users\THasUser;
use kilobook\interfaces\books\IBookPlan;

/**
 * Class BookPlan
 *
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlan extends Item implements IBookPlan
{
    use THasName;
    use THasUser;
    use THasBook;
    use THasPerDay;
    use THasPerWeek;
    use THasPerMonth;
    use THasDays;
    use THasWeeks;
    use THasMonths;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
