<?php

namespace Ss\MembreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SsMembreBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
