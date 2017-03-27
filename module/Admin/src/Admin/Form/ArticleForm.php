<?php
namespace Admin\Form;
use Zend\Form\Form;

class ArticleForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('ArticleForm');

        // Input titre
        $this->add(array(
            'name' => 'titre',
            'type' => 'text',
            'options' => array(
                'label' => 'Titre',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Titre',


            ),
        ));
        // Input image
        $this->add(array(
            'name' => 'image',
            'type' => 'text',
            'options' => array(
                'label' => 'Image',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Image',

            ),
        ));
//        Input contenu
        $this->add(array(
            'name' => 'contenu',
            'type' => 'textarea',
            'options' => array(
                'label' => 'Contenu',
            ),
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Texte',

            ),
        ));
        //
        // $this->add(array(
        //     'name' => 'url',
        //     'type' => 'text',
        //     'options' => array(
        //         'label' => 'url',
        //     ),
        //     'attributes' => array(
        //         'class' => 'form-control', // Classe bootstrap
        //     ),
        // ));


        // Bouton submit
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
