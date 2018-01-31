<?php

class CustomerController extends ControllerBase
{


    public function onConstruct(){
        $this->assets->addCss('bootstrap/css/bootstrap.css');
        $this->assets->addCss('css/font-awesome.min.css');
        $this->assets->addCss('css/style.css');

        $this->assets->addJs('jquery/editProject.js');

    }
    public function indexAction()
    {

    }


    public function testformAction(){

    }
    public function formpassageAction(){
      
    }


    public function createPassAction(){




    }

    public function checkStatusAction(){
        $parameters["order"] = "CusName";
        $pass = Pass::find($parameters);

        if (count($pass) == 0) {
            $this->flash->notice("The search did not find any activity");

            $this->dispatcher->forward([
                "controller" => "pass",
                "action" => "index"
            ]);
            return;
        }
        $this->view->pass = $pass;

    }


    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "admin",
                'action' => 'index'
            ]);

            return;
        }


        $teacher = new Teacher();
        $teacher->idTeacher = $this->request->getPost("idTeacher");
        $teacher->Title = $this->request->getPost("Title");
        $teacher->FirstName = $this->request->getPost("FirstName");
        $teacher->LastName = $this->request->getPost("LastName");
        $teacher->Password = $this->request->getPost("Password");
        $teacher->status = $this->request->getPost("status");
        $teacher->image =$path;



        if (!$teacher->save()) {
            foreach ($teacher->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "admin",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("teacher was created successfully");

        $this->dispatcher->forward([
            'controller' => "admin",
            'action' => 'index'
        ]);
    }

    public function onGoingSaveAction(){
        $pass  = new Pass();
        $pass->CusName = $this->request->getPost("CusName");
        $pass->CusSir = $this->request->getPost("CusSir");
        $pass->Here = $this->request->getPost("Here");
        $pass->Going = $this->request->getPost("Going");

        $pass->save();

    }

}
