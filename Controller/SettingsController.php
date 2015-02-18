<?php

namespace Dt\SettingsBundle\Controller;

use Dt\SettingsBundle\Form\SettingsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SettingsController extends Controller
{
    public function indexAction()
    {
        
        $form = $this->createCreateForm();
        
        return $this->render('DtSettingsBundle:Settings:index.html.twig', [
            'form'   => $form->createView(),
        ]);
    }
    
    /**
     * Creates a form to create a Settings entity.
     *
     * @param Settings $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm()
    {
        $form = $this->createForm(new SettingsType(), null, array(
            'action' => $this->generateUrl('dt_settings_edit'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
}


