<?php //src/DataFixtures/ORM/LoadCategoryData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
     public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setNom('Légumes');
        $category1->setImage($this->getReference('media1'));
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setNom('Fruits');
        $category2->setImage($this->getReference('media2'));
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setNom('Patisseries');
        $category3->setImage($this->getReference('media3'));
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setNom('Céréales');
        $category4->setImage($this->getReference('media4'));
        $manager->persist($category4);

      

        $manager->flush();

        $this->addReference('category1', $category1);
        $this->addReference('category2', $category2);
        $this->addReference('category3', $category3);
        $this->addReference('category4', $category4);
   
    }

    public function getOrder()
    {
        return 2;
    }
}