<?php

namespace Ballack\TimeSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BallackTimeSheetBundle:Default:index.html.twig');
    }
    public function calendarAction()
    {
        return $this->render('BallackTimeSheetBundle:Default:calendrier.html.twig');
    }
    public function calendarCollegueAction()
    {

        return $this->render('BallackTimeSheetBundle:Default:calendriercollegue.html.twig');
    }
    public function setLocaleAction($language = null)
    {
      /*  $cookie = $this->request->cookies;
        if ($cookie->has('locale')){
            $this->get('session')->set('locale','_locale');
        }
        else{
            $newCookie = new Cookie('locale', '_locale', time() + 3600 * 24 * 7 * 365);
            $this->cookie = $newCookie;
        }*/
        //$cookie = $this->request->cookies;
        if($language != null)
        {
            // On enregistre la langue en session
            $this->get('session')->set('_locale', $language);
        }/*else{
            $this->get('security.token_storage')->setToken(null);
            $this->get('request')->getSession()->invalidate();
        }*/

        // on tente de rediriger vers la page d'origine
        //$url = $this->container->get('request')->headers->get('referer');
        $url = $this->container->get('request')->headers->get('referer');
        if(empty($url))
        {
            $url = $this->container->get('router')->generate('fos_user_security_login');
            //$url = $this->generateUrl('fos_user_security_login');
        }

        return new RedirectResponse($url);
    }
    public function translateSwitchAction(Request $request,$locale){
        $referer = $this->getRequest()->headers->get('referer');

        $parseUrl   = parse_url($referer);
        $path       = explode("/",$parseUrl["path"]);
        $path[1]    = $locale;
        $path = implode("/",$path);

        $this->get('session')->set("_locale", $locale);
        $web_root = $this->container->getParameter('web_root');

        return $this->redirect($path);
    }
}
