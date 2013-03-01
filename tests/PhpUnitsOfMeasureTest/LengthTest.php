<?php

namespace PhpUnitsOfMeasureTest;

use PhpUnitsOfMeasure\Length;

class LengthTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiateNewUnit()
    {
        $value = new Length(1.234, 'meters');
    }

    public function testUnitConverts()
    {
        $value = new Length(1.234, 'meters');

        $value_in_feet = $value->toUnit('ft');

        $this->assertEquals(4.04856, $value_in_feet);
    }

    public function testToString()
    {
        $value = new Length(1.234, 'meters');

        $this->assertEquals('1.2340 m', (string) $value);
    }
}
