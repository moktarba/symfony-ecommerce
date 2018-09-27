<?php //src/DataFixtures/ORM/LoadProduitData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Utilisateur;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadUtilisateurData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new Utilisateur();
        $user1->setNom('Ba');
        $user1->setPrenom('Moussa');
        $user1->setUsername('moussa');
        $user1->setEmail('moussa@gmail.com');
        $user1->setEnabled(1);
        $user1->setSalt(md5(time()));
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user1);
        $user1->setPassword($encoder->encodePassword('moussa', $user1->getSalt()));
        $manager->persist($user1);
        $manager->persist($user1);

        $user2 = new Utilisateur();
        $user2->setNom('Ka');
        $user2->setPrenom('Baba');
        $user2->setUsername('baba');
        $user2->setEmail('baba@gmail.com');
        $user2->setEnabled(1);
        $user2->setSalt(md5(time()));
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user2);
        $user2->setPassword($encoder->encodePassword('baba', $user2->getSalt()));
        $manager->persist($user2);

        $user3 = new Utilisateur();
        $user3->setNom('Dia');
        $user3->setPrenom('Samba');
        $user3->setUsername('samba');
        $user3->setEmail('samba@gmail.com');
        $user3->setEnabled(1);
        $user3->setSalt(md5(time()));
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user3);
        $user3->setPassword($encoder->encodePassword('samba', $user3->getSalt()));
        $manager->persist($user3);

        $user4 = new Utilisateur();
        $user4->setNom('Baal');
        $user4->setPrenom('Daba');
        $user4->setUsername('daba');
        $user4->setEmail('daba@gmail.com');
        $user4->setEnabled(1);
        $user4->setSalt(md5(time()));
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user4);
        $user4->setPassword($encoder->encodePassword('daba', $user4->getSalt()));
        $manager->persist($user4);

        $manager->flush();

        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
        $this->addReference('user3', $user3);
        $this->addReference('user4', $user4);
    }

    public function getOrder()
    {
        return 5;
    }
}