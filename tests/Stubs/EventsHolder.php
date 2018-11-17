<?php

namespace Xenus\Tests\Stubs;

use Xenus\Events;
use Xenus\Document;

class EventsHolder
{
    use Events\Hooks;
    use Events\Dispatcher;

    public function hook(Document $document)
    {
        $document['handled'] = true;
    }
}
