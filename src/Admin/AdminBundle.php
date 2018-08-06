<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 06-Aug-18
 * Time: 16:36
 */

namespace App\Admin;
use Symfony\Component\HttpKernel\Bundle\Bundle;


class AdminBundle extends Bundle
{
    public function index(Request $request)
    {

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController'
        ]);
    }
}