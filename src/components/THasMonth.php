<?php
namespace kilobook\components;

use kilobook\interfaces\IHasMonth;

/**
 * Trait THasMonth
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasMonth
{
    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->config[IHasMonth::FIELD__MONTH] ?? 0;
    }

    /**
     * @param int $month
     *
     * @return $this
     */
    public function setMonth(int $month)
    {
        $this->config[IHasMonth::FIELD__MONTH] = $month;

        return $this;
    }
}
