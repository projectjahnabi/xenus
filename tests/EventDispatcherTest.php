<?php

namespace Xenus\Tests;

use Xenus\Document;

class EventDispatcherTest extends \PHPUnit\Framework\TestCase
{
    public function testHooksAreCalled()
    {
        $holder = new Stubs\EventsHolder();

        $holder->dispatch('hook', $document = new Document());

        $this->assertEquals(true, $document['handled']);
    }
}
