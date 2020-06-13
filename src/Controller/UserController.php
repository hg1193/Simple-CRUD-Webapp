<?php
    namespace App\Controller;

    use App\Entity\User;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class UserController extends AbstractController {
        /**
         * @Route("/", name="user_list")
         * @Method({"GET"})
         */
        public function index() {
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();

            return $this->render('users/index.html.twig', array('users' => $users));
        }

        /**
        * @Route("/user/{id}", name="user_show")
        */
        public function show($id) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
  
            return $this->render('users/show.html.twig', array('user' => $user));
        }
  
    }