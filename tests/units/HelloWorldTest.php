<?php
# src/Vendor/Project/tests/units/HelloWorld.php
 
// La classe de test à son propre namespace :
// Le namespace de la classe à tester + "tests\units"
namespace tests\units;
 
// Vous devez inclure la classe à tester
require_once __DIR__ . '/../../HelloWorld.php';
 
use \atoum;
 
/*
 * Classe de test pour \HelloWorld
 
 * Remarquez qu’elle porte le même nom que la classe à tester
 * et qu’elle dérive de la classe atoum
 */
class HelloWorld extends atoum
{
    /*
     * Cette méthode est dédiée à la méthode getHiAtoum()
     */
    public function testGetHiAtoum ()
    {
        // création d’une nouvelle instance de la classe à tester
        $helloToTest = new \Vendor\Project\HelloWorld();
 
        $this
            // nous testons que la méthode getHiAtoum retourne bien
            // une chaîne de caractère...
            ->string($helloToTest->getHiAtoum())
                // ... et que la chaîne est bien celle attendue,
                // c’est-à-dire 'Hi atoum !'
                ->isEqualTo('Hi atoum !')
        ;
    }
}
?>