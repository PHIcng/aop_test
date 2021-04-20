<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 19/01/2018
 * Time: 10:37 AM
 */

namespace Aspect;


use Go\Aop\Aspect;

class MonitorAspect implements Aspect
{
    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public Example->*(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $obj = $invocation->getThis();
        echo 'Calling Before Interceptor for method: ',
        is_object($obj) ? get_class($obj) : $obj,
        $invocation->getMethod()->isStatic() ? '::' : '->',
        $invocation->getMethod()->getName(),
        '()',
        ' with arguments: ',
        json_encode($invocation->getArguments()),
        "<br>\n";
    }
}