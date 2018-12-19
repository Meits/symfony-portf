<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 17-Aug-18
 * Time: 10:48
 */

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;


class PortfolioController extends Controller
{
    public function index(TranslatorInterface $translator,Request $request)
    {
        $translated = $translator->trans('Symfony is great');
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'translated' => $translated
        ]);
    }
}