<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

class UserController extends AbstractController
{
    /**
     * @Route("/register", name="register" ,methods={"post"})
     */
    public function register(Request $request): Response
    {
        $result = json_decode($request->getContent(), true);
       // dd($result);
         $em=$this->container->get('doctrine')->getManager();
         $client=$em->getRepository(client::class)->findOneBy(array('emailClient'=>$result['emailClient']));
         if(!$client){
             $client=new client();
             $client->setNomClient($result['nomClient'])
             ->setPrenomClient($result['prenomClient'])
             ->setEmailClient($result['emailClient'])
             ->setPasseClient($result['passeClient'])
             ->setAdresseClient($result['adresseClient'])
             ->setTelephoneClient($result['telephoneClient']);
             $em->persist($client);
             $em->flush();
             $response=new Response();
             $response->setContent(json_encode(array('msg'=>'job done!',)));
             $response->setStatusCode(200);
             $response->headers->set('Content-type','application/json');
             return $response;
             //dd('user not found you can add new user');



         }
         $response=new Response();
         $response->setContent(json_encode(array('msg'=>'client exist!')));
         $response->setStatusCode(400);
         $response->headers->set('Content-type','application/json');
         return $response;


         
            
        
    }
    
}
