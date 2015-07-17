<?php

namespace Mbrevda\SpecificationQueryInterface;

interface SpecificationQueryInterface
{
    public function andX();
    public function orX();
    public function not();
    
    public function equals();
    public function unequal();
}
