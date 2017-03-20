<?php
namespace Application\Form;
use Zend\Form\Form;

class NewsletterForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('newsletter');
        
        // Input email
        $this->add(array(
            'name' => 'email',
            'type' => 'email',
            'attributes' => array(
                'class' => 'form-control', // Classe bootstrap
                'placeholder' => 'vous@exemple.com',
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