<?php

namespace EnhancedProxy06b87f87_154c6a1daef2eaa09ebbc3e95753ac49b6e3370e\__CG__\Ss\MembreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MembreController extends \Ss\MembreBundle\Controller\MembreController
{
    private $__CGInterception__loader;

    public function profilAction($id)
    {
        $ref = new \ReflectionMethod('Ss\\MembreBundle\\Controller\\MembreController', 'profilAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function demanderAmiAction($id)
    {
        $ref = new \ReflectionMethod('Ss\\MembreBundle\\Controller\\MembreController', 'demanderAmiAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function bannirAction($id)
    {
        $ref = new \ReflectionMethod('Ss\\MembreBundle\\Controller\\MembreController', 'bannirAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function accepterAmiAction($id)
    {
        $ref = new \ReflectionMethod('Ss\\MembreBundle\\Controller\\MembreController', 'accepterAmiAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}