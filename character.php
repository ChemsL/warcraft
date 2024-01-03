<?php
class characters
{
    private $HP;
    private $rage;

    public function getHP()
    {
        return $this->HP;
    }

    public function setHP(int $new_HP)
    {
        $this->HP = $new_HP;
    }

    public function getRage()
    {
        return $this->rage;
    }

    public function setRage(int $new_rage)
    {
        $this->rage = $new_rage;
    }
    public function __construct(int $HP, int $rage)
    {
        $this->setHP($HP);
        $this->setRage($rage);
    }
}
