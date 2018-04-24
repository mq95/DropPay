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
 * GentelellaController.
 */
class GentelellaController extends Controller
{
    /**
     * Render Gentelella page.
     *
     * @Route("gentelella/{page}", name="app_gentelella", defaults={"page": "index"})
     *
     * @param Request $request
     * @param string  $page
     *
     * @return Response
     */
    public function gentelellaAction(Request $request, $page) //page calendar per esempio andrà al twig calendar sotto la cartella gentelella
    {
        $templateName = basename(sprintf('gentelella/%s.html.twig', $page)); //recupera il twig completo
        if ($templateName !== sprintf('%s.html.twig', $page)) {
            throw $this->createNotFoundException('Page not found');
        }
        if (!$this->get('templating')->exists(sprintf('gentelella/%s', $templateName))) {
            throw $this->createNotFoundException(
                sprintf(
                    'Page "%s" not found',
                    $page
                )
            );
        }
        return $this->render(sprintf('gentelella/%s.html.twig', $page));
    }

    /**
     * @Route("/", name="app_homepage")
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function homepageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $accounts = $em->createQuery('SELECT account FROM AppBundle\Entity\Account account ORDER BY account.status')->getResult();

        return $this->render('app/pages/dashboard.html.twig', ['accounts' => $accounts]);
    }

}
        