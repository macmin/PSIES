<?php 

namespace Application\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
 * Entity Class
 *
 *@ORM\Entity(repositoryClass="Application\Model\Repository\ExamenRepossitory")
 *@ORM\Table(name="examen")
 */
class Examen
{


	/**
	*@ORM\Id
	*@ORM\Column(type="integer")
	*@ORM\GeneratedValue(Strategy="Auto")
	*/
   	protected $examenId;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $nombre;

	/**
	* 
	*/
	protected $dateInsert;
	

	/**
	*@ORM\Column(type="integer")
	*/
	protected $userInsert;

	/**
	*@return integer  
	*/
	public function getExamenId(){
		return $this -> examenId;
	}
    /**
    *@return string
    */
	public function getNombre(){
		return $this -> nombre;
	}
	
    /**
     *@return integer
     */
	public function getUserInsert(){
		return $this -> userInsert;
	}
    
    /**
    *@var integer $examenId 
    */
	public function setExamenId($examenId){
		$this -> examenId = $examenId;

	}

    /**
    *@var string $nombre 
    */
	public function setNombre($nombre){
		$this -> nombre = $nombre;
	}
	
    /**
    *@var integer $userInsert 
    */
	public function setUserInsert($userInsert){
		$this -> userInsert = $userInsert;
	}



}