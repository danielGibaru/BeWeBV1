<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Form\NewsletterForm;
use Application\Model\NewsletterModel;

use Application\Form\ContactForm;
use Application\Model\ContactModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // Entity manager
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        // Variable qui nous sert à afficher un message dans la vue
        $message = "";

        // Liste d'articles recup depuis la bdd en tenant compte de la position (ordre ascendant)
        $articleList = $em->getRepository('Application\Entity\BeziersLandingpageBw')->findBy(array(), array('position'=>'asc'));

        // Liste des partenaires recup depuis la bdd
        $partenaireList = $em->getRepository('Application\Entity\BeziersPartenairesBw')->findAll();

        // Menu recup depuis la bdd en tenant compte de la position (ordre ascendant)
        $navbar = $em->getRepository('Application\Entity\BeziersMenuBw')->findBy(array(), array('position'=>'asc'));

        // Debut formulaire newsletter
        $newsletterForm = new NewsletterForm();
        $request = $this->getRequest();

        // Si une requête de type post a été émise
        if ($request->isPost()) {
            $newsletterModel = new NewsletterModel();
            $newsletterForm->setInputFilter($newsletterModel->getInputFilter());
            $newsletterForm->setData($request->getPost());

            // Si formulaire valide
            if ($newsletterForm->isValid()) {
                $newsletterModel->exchangeArray($newsletterForm->getData());

                // On crée un nouvel objet de type newsletter correspondant à notre entité
                $newsletter = new \Application\Entity\BeziersNewsletterBw();
                $newsletter->setEmail($newsletterModel->email); // Email
                $newsletter->setdate(time()); // Date courante

                // On essaye d'inserer dans la bdd
                try {
                    $em->persist($newsletter);
                    $em->flush();
                    $message = "Votre email a été enregistré avec succès";
                }
                catch(\Exception $ex) {
                    $message = "Un erreur est survenue. Etes-vous déjà inscrit ?";
                }
            }
            else {
                $message = "Formulaire newsletter invalide";
            }
        }
        // Fin formulaire newsletter

        // Appel formulaire contact
        $contactForm = new ContactForm();
        $request = $this->getRequest();

        // Si une requête de type post a été émise
        if ($request->isPost()) {
            $contactModel = new ContactModel();
            $contactForm->setInputFilter($contactModel->getInputFilter());
            $contactForm->setData($request->getPost());

            // Si formulaire valide
            if ($contactForm->isValid()) {
                $contactModel->exchangeArray($contactForm->getData());

                // On crée un nouvel objet de type newsletter correspondant à notre entité
                $contact = new \Application\Entity\BeziersContactBw();
                $contact->setEmail($contactModel->email); // Email
                $contact->setObjet($contactModel->objet); // objet
                $contact->setMessage($contactModel->message); // message
                $contact->setDate(time()); // Date courante

                // On essaye d'inserer dans la bdd
                try {
                    $em->persist($contact);
                    $em->flush();
                    $message = "Votre message a été envoyé avec succès";
                }
                catch(\Exception $ex) {
                    $message = "Un erreur est survenue. " . $ex->getMessage();
                }
            }
            else {
                if(!$newsletterForm->isValid()) {
                    $message = "Formulaire contact invalide";
                }
            }
        }
        // Fin formulaire contact


        // Appel de la vue
        return new ViewModel(array('message' => $message,
                                   'menu' => $navbar,
                                   'articleList' => $articleList,
                                   'partenaireList' => $partenaireList,
                                   'newsletterForm' => $newsletterForm,
                                   'contactForm' => $contactForm));
    }
}
