<?php

namespace App\Tests;

use App\Entity\Chauffeur;
use PHPUnit\Framework\TestCase;

class ChauffeurUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $chauffeur = new Chauffeur();

        $chauffeur  ->setNom('nom')
                    ->setCommune('commune');
                
                
        $this->assertTrue($chauffeur->getNom() === 'nom');
        $this->assertTrue($chauffeur->getCommune() === 'commune');
    }

    public function testIsFalse()
    {
        $chauffeur = new Chauffeur();

        $chauffeur  ->setNom('nom')
                    ->setCommune('commune');
                

        $this->assertFalse($chauffeur->getNom() === 'false');
        $this->assertFalse($chauffeur->getCommune() === 'false');
     
    }

    public function testIsEmpty()
    {
        $chauffeur = new Chauffeur();
        
        $this->assertEmpty($chauffeur->getNom());
        $this->assertEmpty($chauffeur->getCommune());
        
    }
}
