<?php

namespace Tests\Unit\Library;

use Tests\BaseTestCase;
use Src\Library\Placeholder;

class PlaceholderTest extends BaseTestCase
{
    public function test_it_can_construct(): void
    {
        $obj = new Placeholder();
        $this->assertInstanceOf(Placeholder::class, $obj);
    }

    public function test_it_can_do_thing(): void
    {
        $obj = new Placeholder();

        $this->assertEquals(
            'Placeholder method called',
            $obj->doThing()
        );
    }
}
