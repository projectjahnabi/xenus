<?php

namespace Xenus\Events;

use Xenus\Document;

trait Dispatcher
{
    /**
     * Call the corresponding event's hook
     *
     * @param  string   $event
     * @param  Document $document
     */
    public function dispatch(string $event, Document $document)
    {
        if (!method_exists($this, $event)) {
            return ;
        }

        $this->{$event}($document);
    }
}
