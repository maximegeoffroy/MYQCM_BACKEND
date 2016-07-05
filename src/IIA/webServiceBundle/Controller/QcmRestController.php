<?php
namespace IIA\webServiceBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use IIA\webServiceBundle\Entity\Qcm;

class QcmRestController extends Controller
{
 public function updateQcmAction()
 {
   $response = new Response();

   $idQcm = $this->getRequest()->get('id_qcm');
   $idUser = $this->getRequest()->get('id_user');
   $note = $this->getRequest()->get('note');
   
   $em = $this->get('doctrine')->getManager();

   $userQcm = $em
             ->getRepository('IIAwebServiceBundle:QcmUser')
             ->myFindUserQcm($idQcm, $idUser);
           ;

   $userQcm->setNote($note);
   $userQcm->setIsDone(true);
   $em->flush();

   $response->setContent($note);
   return $response;

 }
}