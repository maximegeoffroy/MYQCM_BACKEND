<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use IIA\webServiceBundle\Entity\Qcm;

class QcmAdmin extends Admin
{
    // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('startDate', null, array('label' => 'Start at'))
            ->add('endDate', null, array('label' => 'End at'))
            ->add('duration', null, array('label' => 'Duration'))
            ->add('category', null, array('label' => 'Category'))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('startDate', null, array('label' => 'Start at'))
            ->add('endDate', null, array('label' => 'End at'))
            ->add('duration', null, array('label' => 'Duration'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Update at'))
            ->add('questions', null, array('label' => 'Questions list'))
            ->add('category', null, array('label' => 'Category'))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('startDate', null, array('label' => 'Start at'))
            ->add('endDate', null, array('label' => 'End at'))
            ->add('duration', null, array('label' => 'Duration'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Update at'))
            ->add('questions', null, array('label' => 'Questions list'))
            ->add('category', null, array('label' => 'Category'))

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
            ->add('name', null, array('label' => 'Name'))
            ->add('startDate', null, array('label' => 'Start at'))
            ->add('endDate', null, array('label' => 'End at'))
            ->add('duration', null, array('label' => 'Duration'))
            ->add('createdAt', null, array('label' => 'Create at'))
            ->add('updatedAt', null, array('label' => 'Update at'))
            ->add('questions', null, array('label' => 'Questions list'))
            ->add('category', null, array('label' => 'Category'))
        ;
    }	
}

?>