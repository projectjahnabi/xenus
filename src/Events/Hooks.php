<?php

namespace Xenus\Events;

use Xenus\Document;

trait Hooks
{
    /**
     * Call the saved listeners
     * @param  Document $document
     */
    public function saved(Document $document)
    {
        if (false === isset($this->listeners['saved'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['saved'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the saving listeners
     * @param  Document $document
     */
    public function saving(Document $document)
    {
        if (false === isset($this->listeners['saving'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['saving'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the created listeners
     * @param  Document $document
     */
    public function created(Document $document)
    {
        if (false === isset($this->listeners['created'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['created'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the creating listeners
     * @param  Document $document
     */
    public function creating(Document $document)
    {
        if (false === isset($this->listeners['creating'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['creating'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the updated listeners
     * @param  Document $document
     */
    public function updated(Document $document)
    {
        if (false === isset($this->listeners['updated'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['updated'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the updating listeners
     * @param  Document $document
     */
    public function updating(Document $document)
    {
        if (false === isset($this->listeners['updating'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['updating'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the deleted listeners
     * @param  Document $document
     */
    public function deleted(Document $document)
    {
        if (false === isset($this->listeners['deleted'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['deleted'] as $listener) {
            (new $listener())->handle($event);
        }
    }

    /**
     * Call the deleting listeners
     * @param  Document $document
     */
    public function deleting(Document $document)
    {
        if (false === isset($this->listeners['deleting'])) {
            return ;
        }

        $event = (new Event())->setDocument($document)->setCollection($this);

        foreach ($this->listeners['deleting'] as $listener) {
            (new $listener())->handle($event);
        }
    }
}
