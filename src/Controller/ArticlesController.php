<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index ()
    {
        $articles = $this->Articles->find('all');
        $this->set(compact('articles'));
    }
    
    public function view($id = null)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }
    
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }
    
    public function edit($id = null)
    {
        $article = $this->Articles->get($id);
        if($this->request->is(['post', 'put']))
        {
            $this->Articles->PatchEntity($article, $this->request->data);
            if($this->Articles->save($article))
            {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('article', $article);
    }
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        
        $article = $this->Articles->get($id);
        if($this->Articles->delete($article))
        {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}

?>