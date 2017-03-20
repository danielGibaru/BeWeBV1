<?php

namespace Application\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;

class ContactModel implements InputFilterAwareInterface
 {
    public $email;

    public $objet;

    public $message;

    protected $inputFilter;

    public function exchangeArray($data)
     {
         $this->email = (isset($data['email_contact']))  ? $data['email_contact']  : null;
         $this->objet = (isset($data['objet']))  ? $data['objet']  : null;
         $this->message = (isset($data['message']))  ? $data['message']  : null;
     }

     // Add content to these methods:
     public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }

    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            // Validation champ email
            $inputFilter->add(array(
               'name'     => 'email_contact',
               'required' => true,
               'filters'  => array(
                  array('name' => 'StripTags'),
                  array('name' => 'StringTrim'),
            ),
            'validators' => array(
               array(
                  'name'    => 'StringLength',
                  'options' => array(
                     'encoding' => 'UTF-8',
                     'min'      => 2,
                     'max'      => 255,
                     ),
                  ),
               ),
            ));

            $inputFilter->add(array(
               'name'     => 'objet',
               'required' => true,
               'filters'  => array(
                  array('name' => 'StripTags'),
                  array('name' => 'StringTrim'),
            ),
            'validators' => array(
               array(
                  'name'    => 'StringLength',
                  'options' => array(
                     'encoding' => 'UTF-8',
                     'min'      => 2,
                     'max'      => 255,
                     ),
                  ),
               ),
            ));


            $inputFilter->add(array(
               'name'     => 'message',
               'required' => true,
               'filters'  => array(
                  array('name' => 'StripTags'),
                  array('name' => 'StringTrim'),
            ),
            'validators' => array(
               array(
                  'name'    => 'StringLength',
                  'options' => array(
                     'encoding' => 'UTF-8',
                     'min'      => 50,
                     'max'      => 3000,
                     ),
                  ),
               ),
            ));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
 }
