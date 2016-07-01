<?php
namespace IIA\webServiceBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations as Rest;

class UserRestController extends Controller
{

  /* Get user in database*/
  public function getUserAction($username){
    $user = $this->getDoctrine()->getRepository('IIAwebServiceBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    //return array('user' => $user);
    return $user;
  }

  public function getUserActionAndroid($username){
    $user = $this->getDoctrine()->getRepository('IIAwebServiceBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    //return array('user' => $user);
    return $user;
  }

  /* Get list of user in database */
  public function getUsersAction(){
    $users = $this->getDoctrine()->getRepository('IIAwebServiceBundle:User')->findAll();
    return array('users' => $users);
  }

 /* Extract json to user */ 
  public function extract(Fosuser $user, $json, $entityManager = null)
  {
    if ($entityManager == null) {
      $entityManager = $this->getDoctrine()->getManager();
    }
        
    if (array_key_exists(UserRestController::USERNAME, $json)) {
      $user->setName($json[UserRestController::USERNAME]);
    }
    
    if (array_key_exists(UserRestController::PASSSWORD, $json)) {
      $user->setFirstname($json[UserRestController::PASSSWORD]);
    }
  }
}
?>