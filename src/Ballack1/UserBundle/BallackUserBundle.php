<?php

namespace Ballack\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BallackUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
