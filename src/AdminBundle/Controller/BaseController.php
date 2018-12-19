<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


abstract class BaseController extends Controller
{
    protected $data = [];
    
    public function __construct() {
		$this->getNav();
	}
	
	public function getNav() 
	{
		$this->data['navigation'] = [1,2,3];
	}
    
}