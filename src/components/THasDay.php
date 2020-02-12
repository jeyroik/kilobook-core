<?php
namespace kilobook\components;

use kilobook\interfaces\IHasDay;

/**
 * Trait THasDay
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasDay
{
    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->config[IHasDay::FIELD__DAY] ?? 0;
    }

    /**
     * @param int $day
     *
     * @return $this
     */
    public function setDay(int $day)
    {
        $this->config[IHasDay::FIELD__DAY] = $day;

        return $this;
    }
}
