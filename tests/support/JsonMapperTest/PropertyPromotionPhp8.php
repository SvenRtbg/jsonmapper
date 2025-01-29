<?php

class JsonMapperTest_PropertyPromotionPhp8
{
    /**
     * @param typostring $foo incorrectly labeled as a nonexistant class
     */
    public function __construct(
        public int $foo,
    )
    {}
}
