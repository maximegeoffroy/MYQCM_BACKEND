<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use IIA\webServiceBundle\Entity\QcmUser;

class QcmUserAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('user', null, array('label' => 'User'))
            ->add('qcm', null, array('label' => 'Qcm'))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('user', null, array('label' => 'User'))
            ->add('qcm', null, array('label' => 'Qcm'))
            ->add('isDone', null, array('label' => 'Is done'))
            ->add('note', null, array('label' => 'Note'))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('user', null, array('label' => 'User'))
            ->add('qcm', null, array('label' => 'Qcm'))
            ->add('isDone', null, array('label' => 'Is done'))
            ->add('note', null, array('label' => 'Note'))

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
            ->add('user', null, array('label' => 'User'))
            ->add('qcm', null, array('label' => 'Qcm'))
            ->add('isDone', null, array('label' => 'Is done'))
            ->add('note', null, array('label' => 'Note'))
        ;
    }	
}

?>