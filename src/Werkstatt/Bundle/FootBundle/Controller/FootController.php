<?php

namespace Werkstatt\Bundle\FootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Werkstatt\Bundle\FootBundle\Entity\Game;
use Werkstatt\Bundle\FootBundle\Form\GameType;

class FootController extends Controller
{
    
    
    /**
     * @Route(
     *     path="/home",
     *     name="foot_home"
     * )
     * @Template()
     */
    public function indexAction()
    {
        return array("");
    }
 
    /**
     * @Route(
     *     path="/add_game",
     *     name="add_game"
     * )
     * @Template()
     */
    public function gameAddAction(Request $request)
    {
        $game=new Game();
        $form = $this->createForm(new GameType(), $game);
        
        if ($request->isMethod('POST')){
  
            if ($form->handleRequest($request)->isValid())
            {
                $em = $this->get('doctrine')->getManager();
                $em->persist($game);
                $em->flush();
                
                return $this->redirect($this->generateUrl('foot_home'));
            }
        
        }
        return array(
            'form' => $form->createView(),
        );
    }
}
