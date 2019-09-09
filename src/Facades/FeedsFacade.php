<?php
declare(strict_types = 1);

namespace Krasov\Feeds\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FeedsFacade
 *
 * @package Krasov\Feeds\Facades
 */
class FeedsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Feeds';
    }
}
