<?php
namespace kilobook\components\books;

use kilobook\interfaces\books\IBookPlanFact;

/**
 * Class BookPlanFact
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlanFact extends BookPlan implements IBookPlanFact
{
    /**
     * @return string
     */
    public function getBookPlanName(): string
    {
        return $this->config[static::FIELD__BOOK_PLAN_NAME] ?? '';
    }

    /**
     * @param string $name
     * 
     * @return IBookPlanFact
     */
    public function setBookPlanName(string $name): IBookPlanFact
    {
        $this->config[static::FIELD__BOOK_PLAN_NAME] = $name;
        
        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'kilobook.plan.fact';
    }
}
