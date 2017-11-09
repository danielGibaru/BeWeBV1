<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\ArticleForm;
use Admin\Model\ArticleModel;

class ContacteController extends AbstractActionController{
    /**
     * View pour contact
     * @return [Read du CRUD] [(>*_*)>]
     */
    public function indexAction(){
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $contacteListe = $em->getRepository('Application\Entity\BeziersContactBw')->findAll();

        return new ViewModel(array( 'contacteListe'  =>  $contacteListe));
    }
    /**
     * Delete pour contact
     * @return [$message] [pour info sur la manoeuvre] [(>o_o)>]
     */
    public function deleteAction(){
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $id = 0;
        $message = 'Impossible de supprimer le mail (Id invalide ?)';

        if (!empty($_GET['id'])) {
            $id = intval($_GET['id']);
        }
        if($id > 0){
            try {
                $contacte = $em->getRepository('Application\Entity\BeziersContactBw')->findOneById($id);
                $em->remove($contacte);
                $em->flush();
                $message = 'Mail supprimé avec succès';
                return $this->redirect()->toUrl('/admin/contacte/index');
                //$this->_redirector->gotoUrl('http://beweb.my/admin/contacte/index');
            }
            catch(\Exception $ex){
                $message = "Une erreur est survenue : " .  $ex->getMessage();
            }
        }
        return new ViewModel(array('message' => $message));
    }
}
