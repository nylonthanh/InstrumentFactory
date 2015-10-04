<?php

require_once 'src/GuitarCenter.php';

/**
 * john is a worker at GuitarCenter. He will get a guitar and show it.
 *
 * GuitarCenter's properties is storage and demo. storage is storage to get the instrument and demo is when you
 * actually show the guitar off.
 *
 * When InstrumentFactory\GuitarCenter(InstrumentInterface x) is created, the constructor will instantiate an
 * InstrumentFactory class, $storage.
 *
 * $storage->create() has instrument passed in. The create() is responsible for creating a new guitar class. The
 * methods are play() and description().
 *
 * Finally, the client calls GuitarCenter to showInstrument
 */

try {
    $instrument = new \Instrument\Guitar('classical');
//    $instrument = new \InstrumentFactory\Saxophone('tenor');


} catch (Exception $e) {
    print('Sorry! Could not find that instrument!' . PHP_EOL);
    die;

}

try {
    $john = new Instrument\GuitarCenter($instrument);

} catch (Exception $e) {
    print("Sorry, John could not not get the {$instrument->getType()}.");
    die;

}

try {
    $john->showInstrument();

} catch (Exception $e) {
    print("Sorry, John cannot show you the {$instrument->getType()} right now.");
    die;

}
