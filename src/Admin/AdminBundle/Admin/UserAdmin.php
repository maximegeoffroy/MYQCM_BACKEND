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
            ->add('username', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',))
            ->add('email', null, array('label' => 'Email'))
            ->add('userType',null,array('label' => 'User type'))
            ->add('userGroup',null,array('label' => 'User group'))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('createdAt', null, array('label' => 'Created at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
            ->add('userType',null,array('label' => 'User type'))
            ->add('userGroup',null,array('label' => 'User group'))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('username', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('createdAt', null, array('label' => 'Created at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
            ->add('userType',null,array('label' => 'User type'))
            ->add('userGroup',null,array('label' => 'User group'))

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
            ->add('username', null, array('label' => 'Name'))
            ->add('firstname', null, array('label' => 'Firstname'))
            ->add('email', null, array('label' => 'Email'))
            ->add('createdAt', null, array('label' => 'Created at'))
            ->add('updatedAt', null, array('label' => 'Updated at'))
            ->add('userType',null,array('label' => 'User type'))
            ->add('userGroup',null,array('label' => 'User group'))
        ;
    }
}
?>