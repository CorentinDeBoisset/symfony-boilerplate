<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class UsersController extends FOSRestController
{
    /**
     * @Route\Post("/login")
     */

    public function loginAction()
    {
        return new Response(
            $this->get('jms_serializer')->serialize(null, 'json'),
            200
        );
    }

    public function getUsersAction()
    {
        return array();
    }

    public function postUsersAction()
    {
        return array();
    }

    public function getUserAction($id)
    {
        return array();
    }

    public function patchUserAction($id)
    {
        return array();
    }

    public function deleteUserAction($id)
    {
        return array();
    }
}
