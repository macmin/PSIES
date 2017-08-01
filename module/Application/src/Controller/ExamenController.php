<?php

namespace Application\Controller;


class ExamenController extends AbstractActionController
{
    /**
    *@var 
    */
	protected $examenService;


	/**
	 *@return mixed
	 */
    public function getExamenService(){
		return $this -> examenService;
	}

    /**
     *@var $examenService
     */
	public function setExamenService( $examenService ){
		$this-> examenService = $examenService;
	}

	

	public function indexAction(){
		return new ViewModel();
	}



}