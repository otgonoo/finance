<?php

namespace Husel\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HuselUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
