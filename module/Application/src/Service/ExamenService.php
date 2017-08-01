<?php 

namespace Application\Service;


class ExamenService 
{
	
	
    /**
     * @var
     */
	protected $examenRepository;

	/**
	 * @return mixed
	 */
	public function getExamenRepository(){
		
		return $this -> examenRepository;

	}

	/**
	 * @var $examenRepository
	 */
	public function setExamenRepository($examenRepository){
		$this -> examenRepository = $examenRepository;
	}



}