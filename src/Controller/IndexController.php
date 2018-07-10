<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Translation\Translator;

use Symfony\Component\Translation\TranslatorInterface;

class IndexController extends Controller
{
    
    public function index(TranslatorInterface $translator,Request $request)
    {
        
        var_dump($request->getLocale());
        
        $translated = $translator->trans('Symfony is great');
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'translated' => $translated
        ]);
    }
}
