<?php

namespace Model;

use Model\om\BaseCmsCategory;

class CmsCategory extends BaseCmsCategory
{
    public function __toString()
    {
        return $this->getTitle();
    }
}
