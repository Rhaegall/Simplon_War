<?php
class personnage{
    public function __getHealth(){
        return $this->_health;
    }
    public function __getExp(){
        return $this->_exp;
    }
    public function setDamage($perso2){
        $perso2->_health -= $this->_force;
        if(!$perso2->_health){
            $this->_exp = $this->_exp + 1;
            unset($Monster->_faction);
        }
    }
}

class elf extends personnage{
    protected $_faction;
    protected $force = 300;
    protected $_health = 500;
    protected $_spec;
    protected $_exp = 1;
    protected $_damage;
}

class orc extends personnage{
    protected $_faction;
    protected $force = 200;
    protected $_health = 400;
    protected $_spec;
    protected $_exp = 1;
    protected $_damage;
}

$Heroes = [];
$Heroes[] = new elf();

$Monster = [];
$Monster[] = new orc();

echo $Heroes[0]->__getExp()." ";
echo $Monsters[0]->__getHealth()." ";

$Heroes[0]->setDamage($Monsters[0]);

echo $Monsters[0]->__getHealth()." "."<br/>";
echo $Heroes[0]->__getExp()." ";
echo $Heroes[0]->__getHealth()." ";

$Monsters[0]->setDamage($Heroes[0]);

echo $Heroes[0]->__getHealth();

var_dump($Monsters);































?>