<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Entity\Account;


/**
 * FormController.
 */
class FormController extends Controller{
	/**
     * @Route("/form", name="app_form")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function formAction(Request $request)
    {
        $t = $request->get("type");

        $em = $this->getDoctrine()->getManager();

        $account = new Account();
        $account->setType($t);

        $em->persist($account);
        $em->flush();

        $id = $account->getId();

        if(strcmp($t,"personal")==0)
            return $this->redirectToRoute('formP', ['id'=> $id] );
        return $this->redirectToRoute('formB', ['id'=> $id] );
    }

    /**
     * @Route("/formP/{id}", name="formP")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function formActionP(Request $request, $id)
    {
        return $this->render('app/pages/myFormP.html.twig', ['id'=> $id] );
    }

    /**
     * @Route("/formB/{id}", name="formB")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function formActionB(Request $request, $id)
    {
        return $this->render('app/pages/myFormB.html.twig', ['id' => $id]);
    }

    /**
     * @Route("/formP/{id}/store", name="store")
     * @Method("POST")
     * @param Request $request
     *
     * 
     *
     */
    public function store(Request $request, $id)
    {
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $account->setUsername($request->get('username'));
        $account->setFirstname($request->get('firstname'));
        $account->setSurname($request->get('surname'));
        $account->setGender($request->get('gender'));
        $account->setDateBirth($request->get('birthday'));
        $account->setEmail($request->get('email'));

        //$account->setIdDocument($request->files->get('idDocument'));
       
        //$account->setSelfie($request->files->get('selfie')); //get file
       
        $account->setStatus('Waiting e-mail check');
        $account->setProgress('0');

        $t = $account->getType();

        if(strcmp($t, "business")==0){
            $account->setPI($request->get('partitaIva'));
            $account->setCM($request->get('categoriaMerceologica'));
            $account->setAteco($request->get('codiceAteco'));
            //$account->setVisura($request->get('visura'));    


            //VISURA
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $visura = $request->files->get('visura');

            $fileName = $this->generateUniqueFileName().'.'.$visura->guessExtension();

            // moves the file to the directory where brochures are stored
            $visura->move(
                $this->getParameter('documents_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $account->setVisura($fileName);      
        }

         //SELFIE
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $selfie = $request->files->get('selfie');

            $fileName = $this->generateUniqueFileName().'.'.$selfie->guessExtension();

            // moves the file to the directory where brochures are stored
            $selfie->move(
                $this->getParameter('images_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $account->setSelfie($fileName);


            //FIRMA
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $firma = $request->files->get('firma');

            $fileName = $this->generateUniqueFileName().'.'.$firma->guessExtension();

            // moves the file to the directory where brochures are stored
            $firma->move(
                $this->getParameter('images_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $account->setFirma($fileName);




         //ID DOCUMENT
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $idDoc = $request->files->get('idDocument');

            $fileName = $this->generateUniqueFileName().'.'.$idDoc->guessExtension();

            // moves the file to the directory where brochures are stored
            $idDoc->move(
                $this->getParameter('documents_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $account->setIdDocument($fileName);

        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($account);
        $entityManager->flush();

        return $this->redirectToRoute('attesa', ['id' => $account->getId()]) ;
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }


     /**
     *  @Method("POST")
     * @Route("/checkboxProgress/{id}", name="checkboxProgress")
     * @param Request $request
     *
     */
     public function checkboxAction(Request $request, $id){

        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        if($account->getType() == "personal"){
            $add = 25;
            for ($i=0; $i < 4; $i++) { 
                $alreadyChecked[$i] = 1111; // vuoto
            }
        }
        else{
            $add = 10;
            for ($i=0; $i < 10; $i++) 
                $alreadyChecked[$i] = 1111; // vuoto
        }

        $arrayChecked = $account->getProgressBackOffice();

        $p = $account->getProgress();
        $k=0;
        if($p > 0 ){
            foreach(array_keys($arrayChecked[0]) as $a){
                $alreadyChecked[$k] = $a;
                $k++;
            }
        }
        

        $c=$request->get('checkbox');       
        
        if($c){
            $z=0;
            foreach ($c as $key => $value) {
                if($key == $alreadyChecked[$z]){
                    $pbo[$key] = 'on';
                }
                else{
                    $pbo[$key] = 'on';
                    $p = $p+$add;
                }
                $z++;
            }
                    
                
            if($p!=$account->getProgress())
                $account->setProgressBackOffice($pbo);

            $account->setProgress($p);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($account);
            $entityManager->flush();         
        }
        return $this->redirectToRoute('updateStatus', ['id' => $account->getId()]) ;
     }

     /**
     * @Route("/updateStatus/{id}", name="updateStatus")
     *
     * @param Request $request
     *
     * @return Response
     */
     public function status($id){
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $pbo = $account->getProgressBackOffice();

        return $this->render('app/pages/userDetails.html.twig', [ 'account' => $account]);
     }

     /**
     * @Method("POST")
     * @Route("/progressStatus/{id}", name="progressStatus")
     * @param Request $request
     *
     */
     public function progressAction(Request $request, $id){
        $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $v = $request->get('checkbox'); //get the values

        $stringaStato = "";

        $i = 0;
        foreach ($v as $value) {
            if ($i == 0) {
                $stringaStato = $value;
            }
            else 
            $stringaStato = $stringaStato . ', ' . $value;

            $i++;
        }

        if($v){

            $account->setInfo($stringaStato);
            $account->setStatus("Errors in registration");

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($account);
            $entityManager->flush();         

        }

        return $this->redirectToRoute('app_homepage');

     }

     /**
     * @Method("POST")
     * @Route("/AMLStatus/{id}", name="AMLcheck")
     * @param Request $request
     *
     */
     public function amlcheck(Request $request, $id){
         $account = $this->getDoctrine()
        ->getRepository(Account::class)
        ->find($id);

        $v = $request->get('checkbox'); //get the value

        if($v[0]=="ACTIVATE")
            $account->setStatus("ACTIVATE");
        else
            $account->setStatus("BLOCKED");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($account);
        $entityManager->flush(); 

        return $this->redirectToRoute('app_homepage');
     }

}
