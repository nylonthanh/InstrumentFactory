<?php

namespace Instrument;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Class GuitarCenter
 * @package InstrumentFactory
 *
 * storage: GC storage for instruments (uses an InstrumentFactory)
 * demo: requires an instrument to show off and describe the instrument.
 *
 */
class GuitarCenter
{
    protected $storage;
    public $demo;

    /**
     * @param string $inst | default to guitar
     * @throws \Exception
     * calls factory class to create an instance of the instrument
     */
    public function __construct(InstrumentInterface $inst)
    {
        $this->storage = new \Instrument\InstrumentFactory();

        try {
            $this->demo = $this->storage->create($inst);

        } catch (\Exception $e) {
            throw $e;

        }

    }

    public function showInstrument()
    {
        $this->demo->description();
        $this->demo->play();

    }

}

