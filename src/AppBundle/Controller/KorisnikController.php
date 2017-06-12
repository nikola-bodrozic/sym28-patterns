<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class KorisnikController extends Controller
{
    /**
     * @Route("/login", name="korisnik_login")
     */
    public function loginAction()
    {
        $this->get('session')->set('anticsrf', md5(mt_rand()));
        return $this->render('AppBundle:Korisnik:login.html.twig');
    }

    /**
     * receive GET and POST parameters from template
     *
     * @Route("/checklogin", name="korisnik_provera")
     * @param Request $request
     */
    public function checkloginAction(Request $request)
    {
        var_dump($request->request->get('password'));
        var_dump($request->request->get('username'));
        echo "<hr>";
        dump($request->request->get('sectok'));
        dump($this->get('session')->get('anticsrf'));
        dump( $this->get('security.token_storage')->getToken()->getUser() );
        die('stigao');
    }
}