<?php
namespace kilobook\components\books;

use extas\components\repositories\Repository;
use kilobook\interfaces\books\IBookPlanFactRepository;

/**
 * Class BookPlanFactRepository
 * 
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlanFactRepository extends Repository implements IBookPlanFactRepository
{
    protected $scope = 'kilobook';
    protected $name = 'book_plans_facts';
    protected $pk = BookPlanFact::FIELD__NAME;
    protected $idAs = BookPlanFact::FIELD__NAME;
    protected $itemClass = BookPlanFact::class;
}
