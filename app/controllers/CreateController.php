<?php

use Phalcon\Mvc\Controller;

class CreateController extends Controller
{
    public function indexAction()
    {
       
    }
    public function submitAction()
	{
       
		$fname = $this->request->get('fname');
		$lname = $this->request->get('lname');
        $birthday = $this->request->get('birthday');
        $shortbio = $this->request->get('shortbio');
        $interests = $this->request->get('interests');
        
        
		$this->view->fname = $fname;
		$this->view->lname = $lname;
		$this->view->birthday = $birthday;
        $this->view->shortbio = $shortbio;
        $this->view->interests = $interests;
        
        
        
    }
    public function uploadAction()
    {
       
    }
}