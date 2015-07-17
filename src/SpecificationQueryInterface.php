<?php

namespace Mbrevda\SpecificationQueryInterface;

interface SpecificationQueryInterface
{
    public function andX($specification1, $specification2);
    public function orX($specification1, $specification2);
    public function not($specification);
    
    public function equals($specification);
    public function unequal($specification);
}
