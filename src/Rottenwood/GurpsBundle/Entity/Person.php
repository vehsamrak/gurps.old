<?php

namespace Rottenwood\GurpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 * @ORM\Table(name="characters")
 * @ORM\Entity(repositoryClass="Rottenwood\GurpsBundle\Repository\PersonRepository")
 */
class Person {

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var integer
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @var integer
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var integer
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     * @ORM\Column(name="ST", type="integer")
     */
    private $ST;

    /**
     * @var integer
     * @ORM\Column(name="DX", type="integer")
     */
    private $DX;

    /**
     * @var integer
     * @ORM\Column(name="IQ", type="integer")
     */
    private $IQ;

    /**
     * @var integer
     * @ORM\Column(name="HT", type="integer")
     */
    private $HT;

    /**
     * @var integer
     * @ORM\Column(name="HP", type="integer")
     */
    private $HP;

    /**
     * @var integer
     * @ORM\Column(name="WILL", type="integer")
     */
    private $WILL;

    /**
     * @var integer
     * @ORM\Column(name="PER", type="integer")
     */
    private $PER;

    /**
     * @var integer
     * @ORM\Column(name="FP", type="integer")
     */
    private $FP;

    /**
     * @var integer
     * @ORM\Column(name="lift", type="integer")
     */
    private $lift;

    /**
     * @var float
     * @ORM\Column(name="speed", type="float")
     */
    private $speed;

    /**
     * @var integer
     * @ORM\Column(name="move", type="integer")
     */
    private $move;

    /**
     * @var integer
     * @ORM\Column(name="encumbrance", type="integer")
     */
    private $encumbrance;

    /**
     * @var integer
     * @ORM\Column(name="dodge", type="integer")
     */
    private $dodge;

    /**
     * @var integer
     * @ORM\Column(name="parry", type="integer")
     */
    private $parry;

    /**
     * @var integer
     * @ORM\Column(name="block", type="integer")
     */
    private $block;

    /**
     * @var integer
     * @ORM\Column(name="TL", type="integer")
     */
    private $TL;

    /**
     * @var integer
     * @ORM\Column(name="reaction", type="integer")
     */
    private $reaction;

    /**
     * @var integer
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var integer
     * @ORM\Column(name="CP", type="integer")
     */
    private $CP;

    /**
     * @var integer
     * @ORM\Column(name="money", type="integer")
     */
    private $money;


    /**
     * Get id
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight) {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size) {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age) {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getST() {
        return $this->ST;
    }

    /**
     * @param int $ST
     */
    public function setST($ST) {
        $this->ST = $ST;
    }

    /**
     * @return int
     */
    public function getDX() {
        return $this->DX;
    }

    /**
     * @param int $DX
     */
    public function setDX($DX) {
        $this->DX = $DX;
    }

    /**
     * @return int
     */
    public function getIQ() {
        return $this->IQ;
    }

    /**
     * @param int $IQ
     */
    public function setIQ($IQ) {
        $this->IQ = $IQ;
    }

    /**
     * @return int
     */
    public function getHT() {
        return $this->HT;
    }

    /**
     * @param int $HT
     */
    public function setHT($HT) {
        $this->HT = $HT;
    }

    /**
     * @return int
     */
    public function getHP() {
        return $this->HP;
    }

    /**
     * @param int $HP
     */
    public function setHP($HP) {
        $this->HP = $HP;
    }

    /**
     * @return int
     */
    public function getWILL() {
        return $this->WILL;
    }

    /**
     * @param int $WILL
     */
    public function setWILL($WILL) {
        $this->WILL = $WILL;
    }

    /**
     * @return int
     */
    public function getPER() {
        return $this->PER;
    }

    /**
     * @param int $PER
     */
    public function setPER($PER) {
        $this->PER = $PER;
    }

    /**
     * @return int
     */
    public function getFP() {
        return $this->FP;
    }

    /**
     * @param int $FP
     */
    public function setFP($FP) {
        $this->FP = $FP;
    }

    /**
     * @return int
     */
    public function getLift() {
        return $this->lift;
    }

    /**
     * @param int $lift
     */
    public function setLift($lift) {
        $this->lift = $lift;
    }

    /**
     * @return float
     */
    public function getSpeed() {
        return $this->speed;
    }

    /**
     * @param float $speed
     */
    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getMove() {
        return $this->move;
    }

    /**
     * @param int $move
     */
    public function setMove($move) {
        $this->move = $move;
    }

    /**
     * @return int
     */
    public function getEncumbrance() {
        return $this->encumbrance;
    }

    /**
     * @param int $encumbrance
     */
    public function setEncumbrance($encumbrance) {
        $this->encumbrance = $encumbrance;
    }

    /**
     * @return int
     */
    public function getDodge() {
        return $this->dodge;
    }

    /**
     * @param int $dodge
     */
    public function setDodge($dodge) {
        $this->dodge = $dodge;
    }

    /**
     * @return int
     */
    public function getParry() {
        return $this->parry;
    }

    /**
     * @param int $parry
     */
    public function setParry($parry) {
        $this->parry = $parry;
    }

    /**
     * @return int
     */
    public function getBlock() {
        return $this->block;
    }

    /**
     * @param int $block
     */
    public function setBlock($block) {
        $this->block = $block;
    }

    /**
     * @return int
     */
    public function getTL() {
        return $this->TL;
    }

    /**
     * @param int $TL
     */
    public function setTL($TL) {
        $this->TL = $TL;
    }

    /**
     * @return int
     */
    public function getReaction() {
        return $this->reaction;
    }

    /**
     * @param int $reaction
     */
    public function setReaction($reaction) {
        $this->reaction = $reaction;
    }

    /**
     * @return int
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getCP() {
        return $this->CP;
    }

    /**
     * @param int $CP
     */
    public function setCP($CP) {
        $this->CP = $CP;
    }

    /**
     * @return int
     */
    public function getMoney() {
        return $this->money;
    }

    /**
     * @param int $money
     */
    public function setMoney($money) {
        $this->money = $money;
    }
}
