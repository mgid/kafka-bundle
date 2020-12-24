<?php declare(strict_types=1);

namespace Mgid\KafkaBundle\Tests;

final class Kernel
{
    /**
     * @var Fixtures\app\AppKernel
     */
    private static $instance;

    /**
     * @return Fixtures\app\AppKernel
     */
    public static function make(): Fixtures\app\AppKernel
    {
        static::$instance = new Fixtures\app\AppKernel('test', true);
        static::$instance->boot();

        return static::$instance;
    }
}
