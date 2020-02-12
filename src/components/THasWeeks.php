<?php
namespace kilobook\components;

use kilobook\interfaces\IHasWeeks;

/**
 * Trait THasWeeks
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasWeeks
{
    /**
     * @return int
     */
    public function getWeeks(): int
    {
        return $this->config[IHasWeeks::FIELD__WEEKS] ?? 0;
    }

    /**
     * @param int $weeks
     *
     * @return $this
     */
    public function setWeeks(int $weeks)
    {
        $this->config[IHasWeeks::FIELD__WEEKS] = $weeks;

        return $this;
    }
}
