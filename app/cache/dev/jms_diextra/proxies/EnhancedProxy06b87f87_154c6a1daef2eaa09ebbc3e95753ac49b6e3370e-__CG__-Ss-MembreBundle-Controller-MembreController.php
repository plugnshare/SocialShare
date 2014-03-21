<?php

namespace EnhancedProxy06b87f87_ca6cb599cab3efa00ce35e03c1dcb407344ff24c\__CG__\Ss\MembreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MembreController extends \EnhancedProxy06b87f87_154c6a1daef2eaa09ebbc3e95753ac49b6e3370e\__CG__\Ss\MembreBundle\Controller\MembreController
{
    private $__CGInterception__loader;

    public function bannirAction($id)
    {
        $ref = new \ReflectionMethod('Ss\\MembreBundle\\Controller\\MembreController', 'bannirAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}