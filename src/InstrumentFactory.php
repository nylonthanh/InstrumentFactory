<?php

namespace Instrument;

/**
 * Class InstrumentFactory
 * @package InstrumentFactory
 */
class InstrumentFactory
{
    public function create(InstrumentInterface $type)
    {
        $typePath = __NAMESPACE__ . '\\' . $type->instrument;
        try {
            return new $typePath($type->getType());

        } catch (\Exception $e) {
            throw new \Exception('Could not create the instrument, ' . $type);

        }
    }

}

