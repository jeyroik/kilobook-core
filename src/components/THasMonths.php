<?php
namespace kilobook\components;

use kilobook\interfaces\IHasMonths;

/**
 * Trait THasMonths
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasMonths
{
    /**
     * @return int
     */
    public function getMonths(): int
    {
        return $this->config[IHasMonths::FIELD__MONTHS] ?? 0;
    }

    /**
     * @param int $months
     *
     * @return $this
     */
    public function setMonths(int $months)
    {
        $this->config[IHasMonths::FIELD__MONTHS] = $months;

        return $this;
    }
}
