<?php

namespace Mnu\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MnuUserBundle extends Bundle
{
    public function getParent()
    {
	return 'FOSUserBundle';
    }
}
