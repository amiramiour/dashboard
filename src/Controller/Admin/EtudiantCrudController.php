<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;



class EtudiantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function configureFields(string $pageName): iterable
    {
        yield Field::new('nom');
        yield Field::new('prenom');
        yield Field::new('adresse');
        yield Field::new('ine');
        yield DateField::new('DateNaissance')->setFormat('long');
        //yield DateField::new('DateNaissance')->renderAsText();
        yield ImageField::new('image')
        ->setUploadDir('public/images');
         
    }
}
