<?php require_once 'character.php' ?>
<?php

class orc extends characters
{
    private $orcType;
    private $orcDamages;

    public function getOrcType()
    {
        return $this->orcType;
    }
    public function getOrcDamages()
    {
        return $this->orcDamages;
    }

    public function setOrcType(string $newOrcType)
    {
        $this->orcType = $newOrcType;
    }
    public function setOrcDamages(int $newOrcDamages)
    {
        $this->orcDamages = $newOrcDamages;
    }

    

    public function __construct(int $HP, int $rage, string $orcType)
    {
        parent::__construct($HP, $rage);
        $this->setOrcType($orcType);
    }
    public function attackOrc()
    {
        $this->setOrcDamages(rand(600, 800));
    }
}
