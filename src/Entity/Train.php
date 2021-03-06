<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity
* @ORM\Table(name="trains")
*/
class Train
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	**/
  private $id;

	/**
	* @ORM\Column(type="string")
	**/
  private $name;

	/**
	* @ORM\Column(type="datetime")
	**/
  private $lastCleanup;

	/**
	* @ORM\OneToMany(targetEntity="Notation", mappedBy="train")
	*/
	private $notations;

	public function __construct($name, $lastCleanup)
	{
		$this->name = $name;
		$this->lastCleanup = $lastCleanup;
		$this->notation = new ArrayCollection();
	}

	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastCleanup()
	{
		return $this->LastCleanup;
	}

	public function setLastCleanup($lastCleanup)
	{
		$this->lastCleanup = $lastCleanup;
		return $this;
	}

	public function getNotations()
	{
		return $this->notations;
	}

	public function addNotation($notation)
	{
		array_push($this->notations, $notation);
	}
}
