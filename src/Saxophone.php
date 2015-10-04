<?php

namespace Instrument;

class Saxophone implements InstrumentInterface
{
    protected $type;
    public $instrument = 'saxophone';

    /**
     * @param string $type, suprano, alto, tenor, baritone, etc
     */
    public function __construct($type = null)
    {
        $this->type = $type;

    }

    public function play()
    {
        print "Playing my {$this->type} sax!" . PHP_EOL;

    }

    public function description()
    {
        print 'The sax is a reed instrument that is damn sexy.' . PHP_EOL;

    }

    public function getType()
    {
        return $this->type ;

    }

}