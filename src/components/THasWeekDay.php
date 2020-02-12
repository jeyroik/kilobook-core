<?php
namespace kilobook\components;

use kilobook\interfaces\IHasWeekDay;

/**
 * Trait THasWeekDay
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasWeekDay
{
    /**
     * @return int
     */
    public function getWeekDay(): int
    {
        return $this->config[IHasWeekDay::FIELD__WEEK_DAY] ?? 0;
    }

    /**
     * @param int $weekDay
     *
     * @return $this
     */
    public function setWeekDay(int $weekDay)
    {
        $this->config[IHasWeekDay::FIELD__WEEK_DAY] = $weekDay;

        return $this;
    }
}
