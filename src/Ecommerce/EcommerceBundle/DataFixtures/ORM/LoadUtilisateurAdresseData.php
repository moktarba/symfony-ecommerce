<?php //src/DataFixtures/ORM/LoadProduitData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadUtilisateurAdresseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdresse1 = new UtilisateurAdresse();
        $userAdresse1->setNom('Ba');
        $userAdresse1->setPrenom('Moussa');
        $userAdresse1->setAdresse('Rue 11 X Blaise Diagne');
        $userAdresse1->setTelephone('0109877912');
        $userAdresse1->setCp("99000" );
        $userAdresse1->setVille('Dakar');
        $userAdresse1->setPays('Sénégal');
        $userAdresse1->setComplement('à la médina');
        $userAdresse1->setUtilisateur($this->getReference('user1'));
        $manager->persist($userAdresse1);

        $userAdresse2 = new UtilisateurAdresse();
        $userAdresse2->setNom('Ka');
        $userAdresse2->setPrenom('Baba');
        $userAdresse2->setAdresse('Rue 12 X Sangalkam');
        $userAdresse2->setTelephone('0709877872');
        $userAdresse2->setCp("99000" );
        $userAdresse2->setVille('Sangalkam');
        $userAdresse2->setPays('Sénégal');
        $userAdresse2->setComplement('face à la mère');
        $userAdresse2->setUtilisateur($this->getReference('user2'));
        $manager->persist($userAdresse2);
        
        $manager->flush();

        $this->addReference('userAdresse1', $userAdresse1);
        $this->addReference('userAdresse2', $userAdresse2);
 
    }

    public function getOrder()
    {
        return 7;
    }
}