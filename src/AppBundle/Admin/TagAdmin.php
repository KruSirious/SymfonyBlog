<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 04/04/2015
 * Time: 01:49
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TagAdmin extends Admin
{


    /**
     * Fields to be shown on create/edit forms
     *
     *{@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')

        ;
    }

    /**
     * Fields to be shown on filter forms
     *
     *{@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name');

    }

    /**
     * Fields to be shown on lists
     *
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name')

        ;
    }


    /**
     * Fields to be shown on show action
     *
     *{@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')

        ;
    }
}