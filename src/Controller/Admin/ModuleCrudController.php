<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class ModuleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Module::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
            yield Field::new('Nom');
            yield AssociationField::new('filiere');
            yield AssociationField::new('semestre');
            yield AssociationField::new('enseignant');


    }
    
   

}
