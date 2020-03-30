<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Tests;


use DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\WiFi;
use PHPUnit\Framework\TestCase;


class DecoratorTest extends TestCase
{
    public function testBasic()
    {
        $doubleRoomBooking = new DoubleRoomBooking();

        $this->assertSame(40, $doubleRoomBooking->calculatePrice());
        $this->assertSame('double room', $doubleRoomBooking->getDescription());
    }

    public function testTwo()
    {
        $doubleRoomBooking = new DoubleRoomBooking();
        $extraBed = new ExtraBed($doubleRoomBooking);

        $this->assertSame(70, $extraBed->calculatePrice());
        $this->assertSame('double room with extra bed', $extraBed->getDescription());
    }

    public function testThree()
    {
        $doubleRoomBooking = new DoubleRoomBooking();
        $extraBed = new ExtraBed($doubleRoomBooking);
        $wifi = new WiFi($extraBed);

        $this->assertSame(72, $wifi->calculatePrice());
        $this->assertSame('double room with extra bed with wifi', $wifi->getDescription());

    }
}