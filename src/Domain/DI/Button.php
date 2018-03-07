<?php

use App\Domain\DI\Device;


class Button
{
    private $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function press()
    {
        if($this->device->status == 'off')
        return $this->device->on();
    }

}