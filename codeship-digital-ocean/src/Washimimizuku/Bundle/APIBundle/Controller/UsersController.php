<?php

namespace Washimimizuku\Bundle\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Washimimizuku\Bundle\APIBundle\Entity\User;

class UsersController extends Controller {

    /**
     * @return Array
     * @View()
     */
    public function getUsersAction() {
        $users = $this->getDoctrine()
                      ->getRepository('WashimimizukuAPIBundle:User')
                      ->findAll();

        return array('users' => $users);
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="WashimimizukuAPIBundle:User")
     */
    public function getUserAction(User $user) {

        return array('user' => $user);
    }
}
