<?php
namespace App\Backend\Modules\Commentaires;

use \OCFram\BackController;
use \OCFram\HTTPRequest;
use \Entity\News;
use \Entity\Comment;
use \FormBuilder\CommentFormBuilder;
use \OCFram\FormHandler;

class CommentairesController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Gestion des commentaires');

    $manager = $this->managers->getManagerOf('Comments');
    $this->page->addVar('listeCommentaires', $manager->getList());
  }

  public function executeDeleteComment(HTTPRequest $request)
  {
    $this->managers->getManagerOf('Comments')->delete($request->getData('id'));
    
    $this->app->user()->setFlash('Le commentaire a bien été supprimé !');
    
    $this->app->httpResponse()->redirect('.');
  }


  public function executeUpdateComment(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Modification d\'un commentaire');

    if ($request->method() == 'POST')
    {
      $comment = new Comment([
        'id' => $request->getData('id'),
        'auteur' => $request->postData('auteur'),
        'contenu' => $request->postData('contenu')
      ]);
    }
    else
    {
      $comment = $this->managers->getManagerOf('Comments')->get($request->getData('id'));
    }

    $formBuilder = new CommentFormBuilder($comment);
    $formBuilder->build();

    $form = $formBuilder->form();

    $formHandler = new FormHandler($form, $this->managers->getManagerOf('Comments'), $request);

    if ($formHandler->process())
    {
      $this->app->user()->setFlash('Le commentaire a bien été modifié');

      $this->app->httpResponse()->redirect('/admin/');
    }

    $this->page->addVar('form', $form->createView());
  }
}