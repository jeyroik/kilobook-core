<?php
namespace kilobook\components\books;

use extas\components\repositories\Repository;
use kilobook\interfaces\books\IBookPlanStepRepository;

/**
 * Class BookPlanStepRepository
 *
 * @package kilobook\components\books
 * @author jeyroik@gmail.com
 */
class BookPlanStepRepository extends Repository implements IBookPlanStepRepository
{
    protected $itemClass = BookPlanStep::class;
    protected $idAs = BookPlanStep::FIELD__ID;
    protected $pk = BookPlanStep::FIELD__ID;
    protected $name = 'book_plans_steps';
    protected $scope = 'kilobook';
}
