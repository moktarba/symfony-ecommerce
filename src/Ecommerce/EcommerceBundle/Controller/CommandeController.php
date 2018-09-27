<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse;
use Ecommerce\EcommerceBundle\Entity\Commande;
use Ecommerce\EcommerceBundle\Entity\Produit;
 use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class CommandeController extends Controller
{

	public function facture(Request $request)
	{
		$session = $request->getSession();
		$em = $this->getDoctrine()->getManager();
		// $generator = $this->container->get('security.random_bytes');
		$adresse = $session->get('adresse');
		$panier = $session->get('panier');
		$commande = array();
		$totalHT = 0;
		$totalTTC = 0;
		$facturation = $em->getRepository('EcommerceEcommerceBundle:UtilisateurAdresse')->find($adresse['facturation']);
		$livraison = $em->getRepository('EcommerceEcommerceBundle:UtilisateurAdresse')->find($adresse['livraison']);
		$produits = $em->getRepository('EcommerceEcommerceBundle:Produit')->findArray(array_keys($panier));

		foreach ($produits as $produit ) {
		 	$prixHT = $produit->getPrix() * $panier[$produit->getId()];
		 	$prixTTC = $prixHT / $produit->getTva()->getMultiplicate();
		 	$totalHT +=  $prixHT;
		 	$totalTTC += $prixTTC;


		 	if (!isset($commande['tva']['%'.$produit->getTva()->getValeur()])) {
		 		$commande['tva']['%'.$produit->getTva()->getValeur()]  = round($prixTTC - $prixHT, 2);
		 	}else{
		 		$commande['tva']['%'.$produit->getTva()->getValeur()];
		 	}
		 	$commande['produit'][$produit->getId()] = array( 'reference' =>$produit->getNom(),
		 													'quantite' => $panier[$produit->getId()],
		 													'prixHT' => round($produit->getPrix(), 2),
		 													'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate())
		 	);

			 $commande['livraison'] = array( 'prenom' => $livraison->getPrenom(),
			 								 'nom' => $livraison->getNom(),
			 								 'telephone' => $livraison->getTelephone(),
			 								 'adresse' => $livraison->getAdresse(),
			 								 'cp' => $livraison->getCp(),
			 								 'ville' => $livraison->getVille(),
			 								 'pays' => $livraison->getPays(),
			 								 'complement' => $livraison->getComplement(),

			 );
			 $commande['facturation'] = array( 'prenom' => $facturation->getPrenom(),
			 								 'nom' => $facturation->getNom(),
			 								 'telephone' => $facturation->getTelephone(),
			 								 'adresse' => $facturation->getAdresse(),
			 								 'cp' => $facturation->getCp(),
			 								 'ville' => $facturation->getVille(),
			 								 'pays' => $facturation->getPays(),
			 								 'complement' => $facturation->getComplement(),

			 );

			 $commande['totalHT'] = round($totalHT, 2);
			 $commande['totalTTC'] = round($totalTTC, 2);
			 $random = random_bytes(10);
			 $commande['token'] =  bin2hex($random);

		}
		// dump($commande); die();
			 return $commande;

	}

    /**
     * @Route("/prepareCommande")
     */
    public function prepareCommandeAction(Request $request)
    {
    	$session = $request->getSession();
    	$em = $this->getDoctrine()->getManager();
    	if (!$session->has('commande')) {
    		$commande = new Commande();
    	}else{
    		$commande = $em->getRepository("EcommerceEcommerceBundle:Commande")->find($session->get('commande'));
    	}

    	$commande->setDate(new \DateTime()); 
    	$commande->setUtilisateur($this->container->get('security.token_storage')->getToken()->getUser());
    	$commande->setValider(0);
    	$commande->setReference(0);
    	$commande->setCommande($this->facture($request));


    	if (!$session->has('commande')) {
    		$em->persist($commande);
    		$session->set('commande', $commande);
    	}
    	$em->flush();
        return new Response($commande->getId());
    }

    /**
    * @Route("paiement", name="validerCommande")
    */
    public function validerCommande(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$commande = $em->getRepository("EcommerceBundle:Commande")->find($id);
    	$session = $request->getSession();

    	if ( !$commande || $commande->getValider() == 1 ) {
    		return $this->createNotFoundException('La commande n\'existe pas');
    	}

    	$commande->setValider(1);
    	$commande->setReference(1);
    	$em->flush();
    	
    	$session->remove('panier');
    	$session->remove('commande');
    	$session->remove('adresse');

    	$this->getSession()->getFlashbag()->add('success', 'Votre commande est validée avec succès');
    	
    	return $this->redirect($this->generate('produits'));	
    }

}
