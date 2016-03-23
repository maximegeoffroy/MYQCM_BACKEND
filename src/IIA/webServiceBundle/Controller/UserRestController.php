<?php
namespace IIA\webServiceBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserRestController extends Controller
{
  public function getUserAction($username){
    $user = $this->getDoctrine()->getRepository('IIAwebServiceBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    //return array('user' => $user);
    return $user;
  }

public function getUsersAction(){
    $users = $this->getDoctrine()->getRepository('IIAwebServiceBundle:User')->findAll();
    return array('users' => $users);
  }
}
?>