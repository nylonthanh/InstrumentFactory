<?php

namespace Instrument;

class Guitar implements InstrumentInterface
{
    protected $type;
    public $instrument = 'guitar';

    /**
     * @param string $type, classical, steel string acoustic, electric
     */
    public function __construct($type = null)
    {
        $this->type = $type;

    }

    public function play()
    {
        print "Playing my {$this->type} guitar!" . PHP_EOL;

    }

    public function description()
    {
        print 'The modern guitar has at least six strings.' . PHP_EOL;

    }

    public function getType()
    {
        return $this->type ;

    }

}