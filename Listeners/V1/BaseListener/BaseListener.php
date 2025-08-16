<?php

declare(strict_types=1);

namespace Foundation\Base\Listeners\V1\BaseListener;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

abstract class BaseListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * The name of the queue the job should be sent to.
     */
    public ?string $queue = 'default';
}
