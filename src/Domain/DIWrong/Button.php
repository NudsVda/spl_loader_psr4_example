<?php


class Button
{
    private $lamp;

    public function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function press()
    {
        if($lamp->status == 'off')
        return $lamp->on();
    }

}