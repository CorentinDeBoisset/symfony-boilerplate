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
            $this->get('jms_serializer')->serialize("nullll", 'json'),
            200
        );
    }

    public function getUsersAction()
    {
        return array('a'=>3333);
    }

    public function postUsersAction()
    {
        return array('a'=>34);
    }

    public function getUserAction($id)
    {
        return array('a'=>35);
    }

    public function patchUserAction($id)
    {
        return array('a'=>36);
    }

    public function deleteUserAction($id)
    {
        return array('a'=>37);
    }
}
