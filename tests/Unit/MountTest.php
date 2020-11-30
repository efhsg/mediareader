<?php

namespace Tests\Unit;

use App\Domain\Mount;
use PHPUnit\Framework\TestCase;

class MountTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testMountpoint()
    {
        $mount = new Mount("/media");
        $this->assertNotNull($mount->getPoint());
    }
}
