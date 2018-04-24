<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Account;

/**
 * EmailController.
 */
class EmailController extends Controller{
	/**
     * @Route("/attesa/{id}", name="attesa")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function waitingAction(Request $request, $id){ //chiamata da store
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        return $this->render('app/pages/waitingPage.html.twig', ['account' => $account, 'id' => $account->getId()]);
    }
    
    /**
     * @Route("/type", name="app_type")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function typeAction(Request $request){
        return $this->render('app/pages/typeAccount.html.twig', []);
    }

    /**
     * @Route("/mailer/{id}", name="sending_mail")
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function indexAction($id)
    {
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $message = \Swift_Message::newInstance()
               ->setSubject('Confirm email')
               ->setFrom('malak95q@gmail.com')
               ->setTo($account->getEmail())
               ->setBody($this->renderView('app/email/registrationEmail.html.twig',array('account' => $account)),'text/html');
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('app_homepage');
    }

    /**
     * @Route("/success/{id}", name="registered")
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function successMailCheck($id){
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $account->setStatus("Waiting AML check");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($account);
        $entityManager->flush();

        return $this->render('app/email/successMail.html.twig', ['account' => $account]);        
    }
}
