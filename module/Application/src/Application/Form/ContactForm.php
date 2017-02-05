<?php
namespace Application\Form;
use Zend\Form\Form;

class ContactForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('contactletter');

        // Input email
        $this->add(array(
            'name' => 'email_contact',
            'type' => 'email',
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'vous@exemple.com',
            ),
        ));

        $this->add(array(
            'name' => 'objet',
            'type' => 'text',
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'objet du message',
            ),
        ));

        $this->add(array(
            'name' => 'message',
            'type' => 'textarea',
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'Votre message',
            ),
        ));


        // Bouton submit
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => "S'inscrire",
                'class' => 'btn btn-primary' // Classe bootstrap
            ),
        ));
    }
}
