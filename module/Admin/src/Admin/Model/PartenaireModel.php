<?php

namespace Admin\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;

class PartenaireModel implements InputFilterAwareInterface
{
    public $titre;
    public $image;
    public $url;

    protected $inputFilter;

    public function exchangeArray($data)
     {
         $this->titre = (isset($data['titre']))  ? $data['titre']  : null;
         $this->image = (isset($data['image']))  ? $data['image']  : null;
         $this->url = (isset($data['url']))  ? $data['url']  : null;
     }
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
               'name'     => 'titre',
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
               'name'     => 'image',
               'required' => false,
               'filters'  => array(
                  array('name' => 'StripTags'),
                  array('name' => 'StringTrim'),
            ),
            'validators' => array(
               array(
                  'name'    => 'StringLength',
                  'options' => array(
                     'encoding' => 'UTF-8',
                     'min'      => 0,
                     'max'      => 255,
                     ),
                  ),
               ),
            ));
            $inputFilter->add(array(
               'name'     => 'url',
               'required' => false,
               'filters'  => array(
                  array('name' => 'StripTags'),
                  array('name' => 'StringTrim'),
            ),
            'validators' => array(
               array(
                  'name'    => 'StringLength',
                  'options' => array(
                     'encoding' => 'UTF-8',
                     'min'      => 0,
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
