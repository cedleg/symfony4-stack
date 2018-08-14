<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 13/08/18
 * Time: 21:12
 */

// m2i-diffusion/src/Simplex/Framework.php
namespace App\Simplex;

use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;

class Framework
{
    protected $matcher;
    protected $resolver;
    protected $argumentResolver;

    public function __construct(UrlMatcherInterface $matcher, ControllerResolverInterface $resolver, ArgumentResolverInterface $argumentResolver)
    {
        $this->matcher = $matcher;
        $this->resolver = $resolver;
        $this->argumentResolver = $argumentResolver;
    }

    /**
     * @return UrlMatcherInterface
     */
    public function getMatcher()
    {
        return $this->matcher;
    }

    /**
     * @param UrlMatcherInterface $matcher
     */
    public function setMatcher($matcher)
    {
        $this->matcher = $matcher;
    }

    /**
     * @return ControllerResolverInterface
     */
    public function getResolver()
    {
        return $this->resolver;
    }

    /**
     * @param ControllerResolverInterface $resolver
     */
    public function setResolver($resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * @return ArgumentResolverInterface
     */
    public function getArgumentResolver()
    {
        return $this->argumentResolver;
    }

    /**
     * @param ArgumentResolverInterface $argumentResolver
     */
    public function setArgumentResolver($argumentResolver)
    {
        $this->argumentResolver = $argumentResolver;
    }
}