<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Phprepos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PhpreposController extends Controller
{
    
     /**
     * @Route("/phprepos/create", name="phprepos_create")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->createQuery('DELETE AppBundle:Phprepos')->execute();
        $client = new \Github\Client();
        $repositories = $client->api('search')->repositories('language:php', 'stars', 'desc');
        
        foreach ($repositories['items'] as $repository) {
            $phprepos = new Phprepos;
            $phprepos->setRepositoryID($repository['id']);
            $phprepos->setName($repository['name']);
            $phprepos->setUrl($repository['html_url']);
            $created_at = new\DateTime($repository['created_at']);
            $pushed_at = new\DateTime($repository['pushed_at']);
            $phprepos->setCreatedDate($created_at);
            $phprepos->setLastPushDate($pushed_at);
            $phprepos->setDescription(addslashes($repository['description']));
            $phprepos->setStars($repository['stargazers_count']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($phprepos);
            $em->flush();
        }
        return $this->render('phprepos/create.html.twig');
    }
}