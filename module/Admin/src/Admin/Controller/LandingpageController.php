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
use Admin\Form\ArticleForm;
use Admin\Model\ArticleModel;

class LandingpageController extends AbstractActionController
{
    public function indexAction()
    {
        // Entity manager
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $articleList = $em->getRepository('Application\Entity\BeziersLandingpageBw')->findBy(array(), array('position'=>'asc'));

        // Appel de la vue
        return new ViewModel(array( 'articleList' => $articleList,));
    }

    public function deleteAction()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $id = 0;
        $message = "Impossible de supprimer l'article (Id invalide ?)";

        if (!empty($_GET['id'])) {
            $id = intval($_GET['id']);
        }

        if ($id > 0) {
            try {
                $article = $em->getRepository('Application\Entity\BeziersLandingpageBw')->find($id);
                $em->remove($article);
                $em->flush();
                $message = "Article supprimé avec succès";
            }
            catch(\Exception $ex) {
                $message = "Une erreur est survenue : " .  $ex->getMessage();
            }

        }

        return new ViewModel(array('message' => $message));
    }

    public function editAction()
    {
        $id = 0;
        $message = "";
        if (!empty($_GET['id'])) {
            $id = intval($_GET['id']);
            echo"poney";
        }
        $articleForm = new ArticleForm();

        if ($id > 0) {
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $article = $em->getRepository('Application\Entity\BeziersLandingpageBw')->findOneById($id);

            // Appel formulaire article
            $articleForm->get('titre')->setValue($article->getTitre());
            $articleForm->get('contenu')->setValue($article->getContenu());
            $articleForm->get('image')->setValue($article->getImage());

            $request = $this->getRequest();

            // Si une requête de type post a été émise
            if ($request->isPost()) {
                $articleModel = new ArticleModel();
                $articleForm->setInputFilter($articleModel->getInputFilter());
                $articleForm->setData($request->getPost());

                // Si formulaire valide
                if ($articleForm->isValid()) {
                    $articleModel->exchangeArray($articleForm->getData());

                    // On crée un nouvel objet de type newsletter correspondant à notre entité
                    $article->setTitre($articleModel->titre); // Email
                    $article->setContenu($articleModel->contenu); // objet
                    $article->setImage($articleModel->image); // message

                    // On essaye d'inserer dans la bdd
                    try {
                        $em->persist($article);
                        $em->flush();
                        $message = "Votre article a été modifié avec succès";
                    }
                    catch(\Exception $ex) {
                        $message = "Un erreur est survenue. " . $ex->getMessage();
                    }
                }
                else {
                    if(!$articleForm->isValid()) {
                        $message = "Formulaire invalide";
                    }
                }
            }
            // Fin formulaire article
        }
        return new ViewModel(array('message' => $message,
                                   'articleForm' => $articleForm));
    }
    public function addAction(){
        // Entity manager
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        //$em = $this->getDoctrine()->getManager();
        $message = "";
        $addForm = new ArticleForm();
        $request = $this->getRequest();

            if ($request->isPost()){
                $addModel = new ArticleModel();
                $addForm->setInputFilter($addModel->getInputFilter());
                $addForm->setData($request->getPost());
                $message = "ispost";
                // Si le form est valide
                if($addForm->isValid()){
                    $addModel->exchangeArray($addForm->getData());
                    // RISQUE ERREUR !!!!!
                    $add = new \Application\Entity\BeziersLandingpageBw();
                    $add->setTitre($addModel->titre);
                    $add->setContenu($addModel->contenu);
                    $add->setImage($addModel->image);

                    try {
                        $em->persist($add);
                        $em->flush();
                        $message = "Vous avez ajouté un article";
                        // $this->redirect('/index');
                        // $this->redirect('admin/index/index');

                    } catch (\Exception $ex) {
                        $message = "Une erreur s'est produite, réessayez";
                    }
                }
            }
            return new ViewModel(array('message' => $message,
                                       'addForm' => $addForm));


    }
}
