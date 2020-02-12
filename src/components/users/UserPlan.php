<?php
namespace kilobook\components\users;

use extas\components\Item;
use extas\components\THasName;
use kilobook\components\THasDays;
use kilobook\components\THasMonths;
use kilobook\components\THasPages;
use kilobook\components\THasPerDay;
use kilobook\components\THasPerMonth;
use kilobook\components\THasPerWeek;
use kilobook\components\THasPerYear;
use kilobook\components\THasWeeks;
use kilobook\components\THasYears;
use kilobook\interfaces\users\IUserPlan;

/**
 * Class UserPlan
 * 
 * @package kilobook\components\users
 * @author jeyroik@gmail.com
 */
class UserPlan extends Item implements IUserPlan
{
    use THasName;
    use THasUser;
    use THasPages;
    use THasPerDay;
    use THasPerWeek;
    use THasPerMonth;
    use THasPerYear;
    use THasDays;
    use THasWeeks;
    use THasMonths;
    use THasYears;

    /**
     * @return int
     */
    public function getBooks(): int
    {
        return $this->config[static::FIELD__BOOKS] ?? 0;
    }

    /**
     * @param int $books
     * 
     * @return $this
     */
    public function setBooks(int $books)
    {
        $this->config[static::FIELD__BOOKS] = $books;
        
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
