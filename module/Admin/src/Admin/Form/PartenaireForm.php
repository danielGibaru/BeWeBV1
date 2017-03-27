<?php
namespace Admin\Form;
use Zend\Form\Form;

class PartenaireForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('PartenaireForm');

        $this->add(array(
            'name' => 'titre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Titre',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Nom du partenaire',

            ),
        ));

        $this->add(array(
            'name' => 'image',
            'type' => 'Text',
            'value' => 'image',
            'options' => array(
                'label' => 'Image',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Image',

            ),
        ));

        $this->add(array(
            'name' => 'url',
            'type' => 'Text',
            'value'=> 'url',
            'options' => array(
                'label' => 'url',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Url',

            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => "Valider",
                'class' => 'btn btn-primary' // Classe bootstrap
            ),
        ));
    }
}
