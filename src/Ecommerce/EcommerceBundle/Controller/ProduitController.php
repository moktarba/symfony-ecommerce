<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Category;
use Symfony\Component\Form\Form;
class ProduitController extends Controller
{
    /**
     * @Route("/produits/{categorie}" , name="produits")
     */
    public function ProduitsAction(Request $request, Category $categorie = null)
    {
        $panier = "";
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        if (!$categorie == null) {
            $produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->byCategorie($categorie);  
        }else{
            // $produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->findBy(array('disponible' => '1'));
            $produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->findAll();
        }

        if ($session->has('panier')) {
            $panier = $session->get('panier');
        }else $paner = false;

        return $this->render('EcommerceEcommerceBundle:Default:Layouts/produits.html.twig',
            array("produits" => $produits,
                "panier" => $panier
        ));
    }

    // /**
    //  * @Route("/produits", name = "produits")
    //  */
    // public function ProduitsAction(Request $request)
    // {
    //   $session = $request->getSession();
    //   $em = $this->getDoctrine()->getRepository('EcommerceEcommerceBundle:Produit');
    //   $produits = $em->findAll();

    //   if ($session->has('panier')) {
    //         $panier = $session->get('panier');
    //     }else $paner = false;

    //     return $this->render('EcommerceEcommerceBundle:Default:Layouts/produits.html.twig', array(
    //         "produits" => $produits
    //     ));
    // }

    /**
     * @Route("/produit/{id}", name="produit")
     */
    public function ProduitAction(Request $request, $id)
    {
      $session = $request->getSession();

      $em = $this->getDoctrine()->getRepository('EcommerceEcommerceBundle:Produit');
      $produit = $em->find($id);

      if ($session->has('panier')) {
            $panier = $session->get('panier');
        }else $panier = false;

      return $this->render('EcommerceEcommerceBundle:Default:Layouts/produit.html.twig', array(
        "produit" => $produit
      ));
    }
    /**
     *
     */
    public function RechercheAction()
    {
      $form = $this->createForm( RechercheType::class);
      return $this->render('EcommerceEcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array(
        "form" => $form->createView()
      ));
    }
    /**
     * @Route("recherche" , name = "rechercheProduit")
     */
    public function RechercheTraitementAction(Request $request)
    {
      $form = $this->createForm(RechercheType::class);
      if($request->getMethod() == 'POST'){
        // $form->bind($this->get('request_stack')->getCurrentRequest());
        $form->handleRequest($request);
        // var_dump($form['recherche']->getData()) ; die();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('EcommerceEcommerceBundle:Produit');
        $produits = $repository->recherche($form["recherche"]->getData());
        return $this->render('EcommerceEcommerceBundle:Default:Layouts/produits.html.twig', array(
          'produits' => $produits,
        ));
      }else{
        throw new createNotFoundException('Aucun produit trouvé');
      }
    }

}
