<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use IIA\webServiceBundle\Entity\User;

class UserAdmin extends Admin
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
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('password', null, array('label' => 'Password'))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('password', null, array('label' => 'Password'))
            ->add('createdAt', null, array('label' => 'Created at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('password', null, array('label' => 'Password'))
            ->add('createdAt', null, array('label' => 'Created at'))
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
            ->add('name', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('password', null, array('label' => 'Password'))
            ->add('createdAt', null, array('label' => 'Created at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
        ;
    }
}

?>