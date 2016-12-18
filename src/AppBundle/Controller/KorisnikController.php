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
        return $this->render('AppBundle:Korisnik:login.html.twig');
    }

    /**
     * @Route("/checklogin", name="korisnik_provera")
     */
    public function checkloginAction(Request $request)
    
        var_dump($request->request->get('password'));
        var_dump($request->request->get('username'));
        var_dump($request->request->get('anticsrf'));
        die('stigao');

        return $this->render('AppBundle:Korisnik:checklogin.html.twig', array(
            // ...
        ));
    }

}
