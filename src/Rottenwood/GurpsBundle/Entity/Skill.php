<?php

namespace Rottenwood\GurpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 * @ORM\Table(name="skills")
 * @ORM\Entity(repositoryClass="Rottenwood\GurpsBundle\Repository\SkillRepository")
 */
class Skill {

    const ATTRIBUTE_ST = 1;
    const ATTRIBUTE_DX = 2;
    const ATTRIBUTE_IQ = 3;
    const ATTRIBUTE_HT = 4;
    const ATTRIBUTE_WILL = 5;
    const ATTRIBUTE_PER = 6;

    const DIFFICULTY_EASY = 1;
    const DIFFICULTY_AVERAGE = 2;
    const DIFFICULTY_HARD = 3;
    const DIFFICULTY_VERY_HARD = 4;

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
     * @var string
     * @ORM\Column(name="name_russian", type="string", length=255)
     */
    private $nameRussian;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="modificators", type="text")
     */
    private $modificators;

    /**
     * @var integer
     * @ORM\Column(name="attribute", type="integer")
     */
    private $attribute;

    /**
     * @var integer
     * @ORM\Column(name="difficulty", type="integer")
     */
    private $difficulty;

    /**
     * @var integer
     * @ORM\Column(name="byDefault", type="integer")
     */
    private $byDefault;

    /**
     * @var integer
     * @ORM\Column(name="TL", type="integer", nullable=true)
     */
    private $TL;


    /**
     * Get id
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     * @param string $name
     * @return Skill
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNameRussian() {
        return $this->nameRussian;
    }

    /**
     * @param string $nameRussian
     */
    public function setNameRussian($nameRussian) {
        $this->nameRussian = $nameRussian;
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
     * @return string
     */
    public function getModificators() {
        return $this->modificators;
    }

    /**
     * @param string $modificators
     */
    public function setModificators($modificators) {
        $this->modificators = $modificators;
    }

    /**
     * Set attribute
     * @param integer $attribute
     * @return Skill
     */
    public function setAttribute($attribute) {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     * @return integer
     */
    public function getAttribute() {
        return $this->attribute;
    }

    /**
     * Set difficulty
     * @param integer $difficulty
     * @return Skill
     */
    public function setDifficulty($difficulty) {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     * @return integer
     */
    public function getDifficulty() {
        return $this->difficulty;
    }

    /**
     * Set byDefault
     * @param integer $byDefault
     * @return Skill
     */
    public function setByDefault($byDefault) {
        $this->byDefault = $byDefault;

        return $this;
    }

    /**
     * Get byDefault
     * @return integer
     */
    public function getByDefault() {
        return $this->byDefault;
    }

    /**
     * Set TL
     * @param integer $TL
     * @return Skill
     */
    public function setTL($TL) {
        $this->TL = $TL;

        return $this;
    }

    /**
     * Get TL
     * @return integer
     */
    public function getTL() {
        return $this->TL;
    }

    public static function getAttributeNames() {
        return [
            self::ATTRIBUTE_ST   => 'Сила',
            self::ATTRIBUTE_DX   => 'Ловкость',
            self::ATTRIBUTE_IQ   => 'Интеллект',
            self::ATTRIBUTE_HT   => 'Здоровье',
            self::ATTRIBUTE_PER  => 'Внимание',
            self::ATTRIBUTE_WILL => 'Воля',
        ];
    }

    public static function getDifficultyNames() {
        return [
            self::DIFFICULTY_EASY      => 'Легкое',
            self::DIFFICULTY_AVERAGE   => 'Среднее',
            self::DIFFICULTY_HARD      => 'Трудное',
            self::DIFFICULTY_VERY_HARD => 'Очень Трудное',
        ];
    }
}
