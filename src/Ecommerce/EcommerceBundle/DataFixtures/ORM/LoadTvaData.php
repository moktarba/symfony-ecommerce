<?php //src/DataFixtures/ORM/LoadTvaData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Tva;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadTvaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tva1 = new Tva();
        $tva1->setNom('Tva 1.75%');
        $tva1->setMultiplicate('0.982'); 
        $tva1->setValeur('1.75'); 
        $manager->persist($tva1);

        $tva2 = new tva();
        $tva2->setNom('Tva 20%');
        $tva2->setMultiplicate('0.833'); 
        $tva2->setValeur('20');  
        $manager->persist($tva2);

        $manager->flush();

        $this->addReference('tva1', $tva1);
        $this->addReference('tva2', $tva2);   

    }

     public function getOrder()
    {
        return 3;
    }
}