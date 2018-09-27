<?php //src/DataFixtures/ORM/LoadMediaData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Media;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadMediaData extends AbstractFixture implements OrderedFixtureInterface 
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://www.lorempixel.com/400/400');
        $media1->setAlt('Légumes');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://www.lorempixel.com/400/400');
        $media2->setAlt('Fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://www.lorempixel.com/400/400');
        $media3->setAlt('Patisseries');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://www.lorempixel.com/400/400');
        $media4->setAlt('Céréales');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://www.lorempixel.com/400/400');
        $media5->setAlt('Pomme');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('http://www.lorempixel.com/400/400');
        $media6->setAlt('Concombre');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://www.lorempixel.com/400/400');
        $media7->setAlt('Tomates');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('http://www.lorempixel.com/400/400');
        $media8->setAlt('Mangue');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('http://www.lorempixel.com/400/400');
        $media9->setAlt('Riz');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('http://www.lorempixel.com/400/400');
        $media10->setAlt('Mil');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('http://www.lorempixel.com/400/400');
        $media11->setAlt('Mais');
        $manager->persist($media11);

        $media12 = new Media();
        $media12->setPath('http://www.lorempixel.com/400/400');
        $media12->setAlt('Chausson aux pommes');
        $manager->persist($media12); 

        $media13 = new Media();
        $media13->setPath('http://www.lorempixel.com/400/400');
        $media13->setAlt('Croissant au chocolat');
        $manager->persist($media13);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
        $this->addReference('media10', $media10);
        $this->addReference('media11', $media11);
        $this->addReference('media12', $media12);
        $this->addReference('media13', $media13);
 
    }

    public function getOrder()
    {
        return 1;
    }
}