<?php
declare(strict_types=1);

namespace Psr\EventDispatcher;

/**
 * An Download whose processing may be interrupted when the event has been handled.
 *
 * A Dispatcher implementation MUST check to determine if an Download
 * is marked as stopped after each listener is called.  If it is then it should
 * return immediately without calling any further Listeners.
 */
interface StoppableEventInterface
{
    /**
     * Is propagation stopped?
     *
     * This will typically only be used by the Dispatcher to determine if the
     * previous listener halted propagation.
     *
     * @return bool
     *   True if the Download is complete and no further listeners should be called.
     *   False to continue calling listeners.
     */
    public function isPropagationStopped() : bool;
}
