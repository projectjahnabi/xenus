<?php

namespace Xenus\Events;

use Xenus\Document;
use Xenus\Collection;

class Event
{
    private $document;

    private $collection;

    /**
     * Return the document
     *
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set the document
     *
     * @param Document $document
     *
     * @return $this
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Return the collection the event is coming from
     *
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Set the collection
     *
     * @param Collection $collection
     *
     * @return $this
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;

        return $this;
    }
}
