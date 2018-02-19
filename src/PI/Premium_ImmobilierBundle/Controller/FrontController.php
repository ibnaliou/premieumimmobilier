<?php

namespace PI\Premium_ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PI\Premium_ImmobilierBundle\Entity\TypeBien;
use PI\Premium_ImmobilierBundle\Entity\Localite;
use PI\Premium_ImmobilierBundle\Entity\Bien;
use PI\Premium_ImmobilierBundle\Entity\Image;
use Symfony\Component\HttpFoundation\Request;




class FrontController extends Controller

{

    
    /**
     * @Route("/acceuil")
     */
   public function acceuilAction()
    {   
        /*liste type de bien */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:TypeBien');
        $listtypebien= $repositiry->findAll();

        /*liste localite */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Localite');
         $localite= $repositiry->findAll();

        /*liste  des biens */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien')
        ;
         $listebien= $repositiry->listBien();

        return $this->render('PremiumBundle::acceuil.html.twig',array("types"=>$listtypebien,"localites"=>$localite,"biens"=>$listebien));
    }

    
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction(Request $request )
    {

  $localite=$request->get('localite');
  $type=$request->get('typebien');
        /*liste type de bien */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:TypeBien');
        $listtypebien= $repositiry->findAll();

        /*liste localite */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Localite');
         $localite= $repositiry->findAll();

        /*liste  des biens par rechercche  */
        $repositiry=$this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PremiumBundle:Bien')
        ;
         $listebien= $repositiry->findTypeBudjetLocalite($localite,$type);

        return $this->render('PremiumBundle::acceuil.html.twig',array("types"=>$listtypebien,"localites"=>$localite,"biens"=>$listebien));
    }

    /**
     * @Route("/front/bien/reserver")
     */
    public function reserverBienAction()
    {
        return $this->render('PremiumBundle:Front:reserver.html.twig', array(
            // ...
        ));
    }

}
