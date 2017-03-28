<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\PartenaireForm;
use Admin\Model\PartenaireModel;

class PartenairesController extends AbstractActionController{
    /**
     * lecture du crud
     *
     */
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $partenaireList = $em->getRepository('Application\Entity\BeziersPartenairesBw')->findAll();
        return new ViewModel(array( 'partenaireList' => $partenaireList,));
    }
    /**
     * Add action du crud
     *
     */
    public function addAction()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $message = "";
        $partenaireForm = new PartenaireForm();
        $request = $this->getRequest();

        if ($request->isPost()){
            $partenaireModel = new PartenaireModel();
            $partenaireForm->setInputFilter($partenaireModel->getInputFilter());
            $partenaireForm->setData($request->getPost());

            if($partenaireForm->isValid()){
                $partenaireModel->exchangeArray($partenaireForm->getData());
                $partenaire = new \Application\Entity\BeziersPartenairesBw();
                $partenaire->setTitre($partenaireModel->titre);
                $partenaire->setImg($partenaireModel->image);
                $partenaire->setUrl($partenaireModel->url);
                try {
                    $em->persist($partenaire);
                    $em->flush();
                    $message = "Vous avez ajouté un article";
                }catch(\Exception $ex){
                    $message = "Une erreur s'est produite, réessayez";
                }
            }
        }
            return new ViewModel(array('message' => $message,
                                       'partenaireForm' => $partenaireForm));
    }
    /**
     * delete action du crud
     *
     */
    public function deleteAction()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $id = 0;
        $message = "Impossible de supprimer le partenaire (Id invalide ?)";

        if (!empty($_GET['id'])) {
            $id = intval($_GET['id']);
        }

        if ($id > 0) {
            try {
                $partenaire = $em->getRepository('Application\Entity\BeziersPartenairesBw')->findOneById($id);
                $em->remove($partenaire);
                $em->flush();
                $message = "Partenaire supprimé avec succès";
            }
            catch(\Exception $ex) {
                $message = "Une erreur est survenue : " .  $ex->getMessage();
            }

        }

        return new ViewModel(array('message' => $message));
    }
    /**
     * edit du crud
     *
     */

    public function editAction()
    {

        $id = 0;
        $message = "";
        if (!empty($_GET['id'])) {
            $id = intval($_GET['id']);
        }
        $partenaireForm = new PartenaireForm();

        if ($id > 0) {
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $partenaire = $em->getRepository('Application\Entity\BeziersPartenairesBw')->findOneById($id);

            $partenaireForm->get('titre')->setValue($partenaire->getTitre());
            $partenaireForm->get('url')->setValue($partenaire->getUrl());
            $partenaireForm->get('image')->setValue($partenaire->getImg());

            $request = $this->getRequest();

            if ($request->isPost()) {
                $partenaireModel = new PartenaireModel();
                $partenaireForm->setInputFilter($partenaireModel->getInputFilter());
                $partenaireForm->setData($request->getPost());

                if ($partenaireForm->isValid()) {
                    $partenaireModel->exchangeArray($partenaireForm->getData());
                    $partenaire->setTitre($partenaireModel->titre);
                    $partenaire->setUrl($partenaireModel->url);
                    $partenaire->setImg($partenaireModel->image);

                    try {
                        $em->persist($partenaire);
                        $em->flush();
                        $message = "Votre article a été modifié avec succès";
                    }
                    catch(\Exception $ex) {
                        $message = "Un erreur est survenue. " . $ex->getMessage();
                    }
                }else{
                    if(!$partenaireForm->isValid()) {
                        $message = "Formulaire invalide";
                    }
                }
            }
        }
        return new ViewModel(array('message' => $message,
                    'partenaireForm' => $partenaireForm));
    }
}
