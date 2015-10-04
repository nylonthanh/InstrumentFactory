<?php

namespace Instrument;

/**
 * Interface InstrumentInterface
 * @package InstrumentFactory
 */
interface InstrumentInterface
{
    public function play();
    public function description();
    public function getType();

}