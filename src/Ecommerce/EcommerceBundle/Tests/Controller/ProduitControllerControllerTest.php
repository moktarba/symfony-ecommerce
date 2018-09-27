<?php

namespace Ecommerce\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerControllerTest extends WebTestCase
{
    public function testCategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'categoryProduits');
    }

    public function testProduits()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'produits');
    }

    public function testProduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'produit');
    }

}
