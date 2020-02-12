<?php
namespace kilobook\components;

use kilobook\interfaces\IHasWeek;

/**
 * Trait THasWeek
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasWeek
{
    /**
     * @return int
     */
    public function getWeek(): int
    {
        return $this->config[IHasWeek::FIELD__WEEK] ?? 0;
    }

    /**
     * @param int $week
     *
     * @return $this
     */
    public function setWeek(int $week)
    {
        $this->config[IHasWeek::FIELD__WEEK] = $week;

        return $this;
    }
}
