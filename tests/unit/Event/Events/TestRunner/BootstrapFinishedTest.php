<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestRunner;

use PHPUnit\Event\AbstractEventTestCase;

/**
 * @covers \PHPUnit\Event\TestRunner\BootstrapFinished
 */
final class BootstrapFinishedTest extends AbstractEventTestCase
{
    public function testConstructorSetsValues(): void
    {
        $telemetryInfo = $this->telemetryInfo();
        $filename      = __FILE__;

        $event = new BootstrapFinished(
            $telemetryInfo,
            $filename
        );

        $this->assertSame($telemetryInfo, $event->telemetryInfo());
        $this->assertSame($filename, $event->filename());
    }
}
