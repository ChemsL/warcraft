<?php require_once 'character.php' ?>
<?php
class Hero extends characters
{
    private string $name;
    private int $weaponDamage;
    private string $weaponName;
    private string $shieldName;
    private int $shieldValue;


    public function getName()
    {
        return $this->name;
    }
    public function getWeaponName()
    {
        return $this->weaponName;
    }
    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }
    public function getShieldName()
    {
        return $this->shieldName;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setName(string $new_Name)
    {
        $this->name = $new_Name;
    }
    public function setWeaponName(string $new_weaponName)
    {
        $this->weaponName = $new_weaponName;
    }
    public function setWeaponDamage(int $new_weaponDamage)
    {
        $this->weaponDamage = $new_weaponDamage;
    }
    public function setShieldName(string $new_shieldName)
    {
        $this->shieldName = $new_shieldName;
    }
    public function setShieldValue(int $new_shieldValue)
    {
        $this->shieldValue = $new_shieldValue;
    }
    public function __construct(int $HP, int $rage, string $name, string $weaponName, int $weaponDamage, string $shieldName, int $shieldValue)
    {
        parent::__construct($HP, $rage); // Appel à la méthode construct de la classe mère
        $this->setName($name);
        $this->setWeaponName($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShieldName($shieldName);
        $this->setShieldValue($shieldValue);
    }

    public function beAttacked($damage)
    {
        $this->setHP($this->getHP() - ($damage - $this->getShieldValue()));
    }
}
