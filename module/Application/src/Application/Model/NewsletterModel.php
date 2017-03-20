<?php

namespace Application\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;
 
class NewsletterModel implements InputFilterAwareInterface
 {
    public $email;
    
    protected $inputFilter;
    
    public function exchangeArray($data)
     {
         $this->email = (isset($data['email']))  ? $data['email']  : null;
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
               'name'     => 'email',
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
            
            $this->inputFilter = $inputFilter;
        }
        
        return $this->inputFilter;
    }
 }