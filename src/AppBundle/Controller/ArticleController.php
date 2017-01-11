<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
* @Route("/article")
*/
class ArticleController extends Controller
{
    
   /**
     * @Route("/", name="article_homepage")
     */
    public function homeAction()
    {
        // replace this example code with whatever you need
        return $this->render('article/index.html.twig');
    }

    /**
    *@Route(
    *   "/{id}",
    *   requirements={"id" = "\d+"},
    *   defaults={"id" = 1},
    *   name="show_article"
    *)
    */
    public function showAction()
    {
        return $this->render('article/show.html.twig');
    }

    /**
     * @Route("/add", name="article_add")
     */
    public function addAction(){
        $article = new Article();
        
        //Passe la class ArticleType et l'objet article au formulaire
        $form = $this->createForm(ArticleType::class, $article);

        //Permet d'afficher le formulaire
        return $this ->render('article/add.html.twig',['articleForm' => $form->createView()]);
    }
}
    
