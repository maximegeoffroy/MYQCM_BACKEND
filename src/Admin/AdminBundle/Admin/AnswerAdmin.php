<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use IIA\webServiceBundle\Entity\Answer;

class AnswerAdmin extends Admin
{
    // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt'
    );
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('content', null, array('label' => 'Content'))
            ->add('point', null, array('label' => 'Point'))
            ->add('isValid', null, array('label' => 'Is valid'))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('content', null, array('label' => 'Content'))
            ->add('point', null, array('label' => 'Point'))
            ->add('isValid', null, array('label' => 'Is valid'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('content', null, array('label' => 'Content'))
            ->add('point', null, array('label' => 'Point'))
            ->add('isValid', null, array('label' => 'Is valid'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))

            # Action sur l'objet
           ->add('_action', 'actions', array(
               'actions' => array(
                   'view' => array(),
                   'edit' => array(),
                   'delete' => array(),
               )
           ))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('content', null, array('label' => 'Content'))
            ->add('point', null, array('label' => 'Point'))
            ->add('isValid', null, array('label' => 'Is valid'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
        ;
    }
}

?>