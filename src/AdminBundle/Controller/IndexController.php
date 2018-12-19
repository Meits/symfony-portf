<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 06-Aug-18
 * Time: 16:49
 */

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class IndexController extends BaseController
{
    public function index(Request $request)
    {
        return $this->render('@Admin/index/index.html.twig', $this->data);
    }
}