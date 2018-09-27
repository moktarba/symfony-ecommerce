<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse;
use Ecommerce\EcommerceBundle\Entity\Utilisateur;
use Ecommerce\EcommerceBundle\Form\UtilisateurAdresseType;
 use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class PanierController extends Controller
{


    public function menuAction(Request $request)
    {
    	$session = $request->getSession();
    	if (! $session->get('panier')) {
    		$articles = 0;
    	}else{
    		$articles = count($session->get("panier"));
    	}
    	
    	return $this->render("EcommerceEcommerceBundle:Default:panier/modulesUsed/menu.html.twig", array(
    		'articles' => $articles
    	));
    }

    /**
     * @Route("/supprimer/{id}", name ="supprimer")
     */
    public function supprimerAction($id, Request $request)
    {
    	$session = $request->getSession();
    	$panier = $session->get('panier');
    	if (array_key_exists($id, $panier)) {
    		unset($panier[$id]);

    	$session->set('panier', $panier);
    	}
    	$this->get('session')->getFlashBag()->add('supp-article ', 'Votre article a bien été retiré du panier');
    	return $this->redirect($this->generateUrl('panier'));
    }

    /**
     * @Route("/ajouter/{id}", name ="ajouter")
     */
    public function ajouterAction($id, Request $request)
    {
   		$session = $request->getSession();

    	if (!$session->has('panier')) 
    	{
    		$panier = $session->set('panier' , array());
    	}
    	$panier = $session->get('panier');

    	if (array_key_exists($id, $panier)) 
    	{
    		if ($request->query->get('qte') != null) 
    		{
    			$panier[$id] = $request->query->get('qte');
    		}
    	}
    	else
    	{
    		if ($request->query->get('qte') != null) 
    		{
    			$panier[$id] = $request->query->get('qte');
    		}
    		else 
    		{
    			$panier[$id] = 1;
    		}
    	}

    	$session->set('panier', $panier);
    	$this->get('session')->getFlashBag()->add('success', "Vous avez bien ajouté l'article dans votre panier");
    	return $this->redirect($this->generateUrl('panier'));
    }

    /**
     * @Route("/panier", name ="panier")
     */
    public function panierAction(Request $request)
    {
    	$session = $request->getSession();
    	if(!$session->has('panier')){
    		$panier = $session->set('panier', array());
    	}
    	$panier = $session->get('panier');
    	// var_dump(count($panier)); die();
    	$em = $this->getDoctrine()->getManager();

    	$produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
        return $this->render('EcommerceEcommerceBundle:Default:panier/Layout/panier.html.twig', array(
        	'produits' => $produits,
        	'panier' => $session->get('panier')

        ));

    	
    }


    /**
    * @Route("/livraison", name = "livraison")
    */
    public function livraisonAction(Request $request,  $utilisateur = null)
    {
    	$em = $this->getDoctrine()->getManager();
	 	$securityContext = $this->container->get('security.token_storage')->getToken();
	 	$utilisateur = $securityContext->getUser();

    	$adresses = $em->getRepository('EcommerceEcommerceBundle:UtilisateurAdresse')->findByUtilisateur($utilisateur);
    	$utilisateurAdresse = new UtilisateurAdresse();
    	$session = $request->getSession();
    	if (!$session->has('panier')) 
    	{
    		$session->set('panier', array());
    	}

    	$form = $this->createForm(UtilisateurAdresseType::class, $utilisateurAdresse);
    	$form->handleRequest($request);

    	if ($request->getMethod() == "POST") {

    		if ($form->isSubmitted() && $form->isValid()) {
    		$utilisateurAdresse->setUtilisateur($utilisateur);
    		$em->persist($utilisateurAdresse);
    		$em->flush();
    		return $this->redirect($this->generateUrl('livraison'));

    		}
    	}
    	
    	return $this->render("EcommerceEcommerceBundle:Default:panier/Layout/livraison.html.twig", 
    		array(
    				'form' => $form->createView (),
    				'adresses' => $adresses,
    				'panier' => $session->get('panier')
    			)
    	);
    }

 

    /**
    * @Route("/livraison/adresse/supression/{id}",  name = "adresse_supprimer")
    */
    public function adresseSupressionAction(Request $request, $id )
    {

    	$session = $request->getSession();
    	$em= $this->getDoctrine()->getManager();
    	$user = $this->container->get('security.token_storage')->getToken()->getUser();
    	$adresse = $em->getRepository('EcommerceEcommerceBundle:UtilisateurAdresse')->find($id);
    	if ($user != $adresse->getUtilisateur() || !$adresse) 
    		return $this->redirect($this->generateUrl('livraison'));

    	$em->remove($adresse);
    	$em->flush();
    	return $this->redirect($this->generateUrl('livraison'));
    
    }

    public function setLivraisonOnSession(Request $request)
    {
    	$session = $request->getSession();
    	if (!$session->has('adresse')) {
    		$session->set('adresse', array());
    	}
    	$adresse = $session->get('adresse');

    	if ($request->request->get('livraison') != "null"  && $request->request->get('facturation') != "null" ) {
    		$adresse['livraison'] = $request->request->get('livraison');
    		$adresse['facturation'] = $request->request->get('facturation');
    	}else{
    		return $this->redirect($this->generateUrl('validation'));
    	}
    	$session->set('adresse', $adresse);
    	return $this->redirect($this->generateUrl('validation'));
    }

    /**
    * @Route("/validation", name = "validation")
    */
    public function validationAction(Request $request)
    {
    	$session = $request->getSession();
    	if ($request->getMethod() == 'POST' ) {
    		$this->setLivraisonOnSession($request);
    	}
    	$em  = $this->getDoctrine()->getManager();
    	$prepareCommande = $this->forward('EcommerceEcommerceBundle:Commande:prepareCommande'); 

    	$commande = $em->getRepository('EcommerceEcommerceBundle:Commande')->find($prepareCommande->getContent());
    	// $session = $request->getSession();
    	// $adresse = $session->get('adresse');
    	// $panier = $session->get('panier');


    	// $produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
    	// $livraison =  $em->getRepository('EcommerceEcommerceBundle:UtilisateurAdresse')->find($adresse['livraison']);
    	// dump($commande); die();
    	return $this->render("EcommerceEcommerceBundle:Default:panier/Layout/validation.html.twig",
    		array(
    			'commande' =>$commande
    		)
    	);
    }



/**
* @Route("/paiement", name = "paiement")
*/
	public function paiementAction(Request $request)
    {
    	return $this->render('EcommerceEcommerceBundle:Default:panier/Layout/paiement.html.twig');
    }

}
