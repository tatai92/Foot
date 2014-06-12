<?php

namespace Werkstatt\Bundle\FootBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Werkstatt\Bundle\FootBundle\Entity\Team;
class Teams implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $noms = array('Paris Saint-Germain', 'FC Metz', 'FC Nantes', 'AS Monaco FC');
    foreach($noms as $i => $nom)
    {
      // On crée la catégorie
      $liste[$i] = new Team();
      $liste[$i]->setName($nom);
      // On la persiste
      $manager->persist($liste[$i]);
    }
    // On déclenche l'enregistrement
    $manager->flush();
  }
}