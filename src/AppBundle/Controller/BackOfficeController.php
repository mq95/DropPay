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
 * BackOfficeController.
 */
class BackOfficeController extends Controller{
	/**
     * @Route("/backOffice", name="back_office")
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function backOffice(){
        $aml = 'Waiting AML check';

        $em = $this->getDoctrine()->getManager();

        $accountsAmlCheck = $em->createQuery('SELECT account FROM AppBundle\Entity\Account account where account.status = :aml ')->setParameter('aml', $aml);

        $accounts = $accountsAmlCheck->getResult();

        //in accountsAmlCheck ho la lista degli account sottoposti a checking dal backoffice.
        return $this->render('app/pages/backOffice.html.twig', ['accounts' => $accounts]);

    }

     /**
     * @Route("/userDetails/{id}", name="userDetails")
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function userDetails($id)
    {   
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        return $this->render('app/pages/userDetails.html.twig', ['account' => $account]);
    }

}
