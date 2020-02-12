<?php
namespace kilobook\components;

use kilobook\interfaces\IHasPages;

/**
 * Trait THasPages
 *
 * @property $config
 *
 * @package kilobook\components
 * @author jeyroik@gmail.com
 */
trait THasPages
{
    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->config[IHasPages::FIELD__PAGES] ?? 0;
    }

    /**
     * @param int $pages
     *
     * @return $this
     */
    public function setPages(int $pages)
    {
        $this->config[IHasPages::FIELD__PAGES] = $pages;

        return $this;
    }
}
