<?php

namespace Consilience\Pain001\Tests;

use Consilience\Pain001\Address\UnstructuredPostalAddress;

/**
 * @coversDefaultClass \Consilience\Pain001\Address\UnstructuredPostalAddress
 */
class UnstructuredPostalAddressTest extends TestCase
{
    /**
     * @covers ::sanitize
     */
    public function testSanitize()
    {
        $this->assertInstanceOf(\Consilience\Pain001\Address\UnstructuredPostalAddress::class, UnstructuredPostalAddress::sanitize(
            "Dorf—Strasse 3\n\n",
            "8000\tZürich"
        ));
    }
}
