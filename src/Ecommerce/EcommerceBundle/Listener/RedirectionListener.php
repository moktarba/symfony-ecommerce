<?php 
	 namespace Ecommerce\EcommerceBundle\Listener;

	 use Symfony\Component\DependencyInjection\ContainerInterface;
	 use Symfony\Component\HttpFoundation\Session\Session;
	 use Symfony\Component\HttpFoundation\RedirectResponse;
	 use Symfony\Component\HttpKernel\Event\GetResponseEvent;
	 use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
	 use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

	 class RedirectionListener 
	 {
	 	public function __construct(ContainerInterface $container, Session $session)
	 	{
	 		$this->session = $session;
	 		$this->router = $container->get('router');
	 		$this->securityContext = $container->get('security.token_storage');

	 	}
	 	public function onKernelRequest(GetResponseEvent $event)
	 	{

	 		$route = $event->getRequest()->attributes->get('_route');


	 		if($route == 'livraison'  || $route == 'paiement')
	 		{
	 			// var_dump($this->session->get('panier')); die();
	 			if ($this->session->has('panier')) 
	 			{
	 				if ( empty($this->session->get('panier')  )) 
	 				{
	 					$event->setResponse(new RedirectResponse($this->router->generate('panier')));
	 				}
	 			}
	 		}
	 //		if (!is_object($this->securityContext->getToken()->getUser())) 
 			{
 				 // die('pas de user');
 				// $this->session->getFlashBag()->add('notification', 'Vous devez vous authentifier...');
 				// $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
 			}
	 		
	 	}

	 }