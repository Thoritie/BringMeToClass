<?php

class CustomerController extends ControllerBase
{

    public function indexAction() 
    {

    }

    
    public function testformAction(){

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



    public function acsaveAction($id)
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "admin",
                'action' => 'activityList'
            ]);

            return;
        }

        // $idActivity = $this->request->getPost("id");
        $activitys = Activity::findFirst($id);

        if (!$activitys) {
            $this->flashSession->error("activity does not exist " . $idActivity);

            $this->dispatcher->forward([
                'controller' => "Admin",
                'action' => 'activityList'
            ]);

            return;
        }

        $activitys->ActivityName= $this->request->getPost("nameAc");
        $activitys->Detail= $this->request->getPost("detail");
        $activitys->StartDate= $this->request->getPost("datest");
        $activitys->StartTime= $this->request->getPost("timest");
        $activitys->EndDate= $this->request->getPost("dateed");
        $activitys->Endtime= $this->request->getPost("timeed");
        $activitys->Teacher_idTeacher= $this->request->getPost("teacherID");

        if($this->request->getPost("place")==99){
          $locations= new Location;
          $numL = Location::maximum(
            [
            "column" => "idLocation",
            ]
          );
          $locations->idLocation= $numL+1;
          $locations->LocationName= $this->request->getPost("otherPlace");
          $locations->room= $this->request->getPost("otherRoom");
          $locations->save();
          $activitys->Location_idLocation= $numL+1;
          }
        else
        {
          $activitys->Location_idLocation= $this->request->getPost("place");
        }

        $activitys->Yearofeducation_Semester= $this->request->getPost("semeter");
        $activitys->Yearofeducation_Year= $this->request->getPost("year");
        $AHY= ActivityHaveYear::findFirst($id);
        if($this->request->getPost("chkyear1"))
          $AHY->activity_have_year1 = 1;
        else
          $AHY->activity_have_year1 = 0;


        if($this->request->getPost("chkyear2"))
          $AHY->activity_have_year2 = 1;
        else
          $AHY->activity_have_year2 = 0;

        if($this->request->getPost("chkyear3"))
          $AHY->activity_have_year3 = 1;
        else
          $AHY->activity_have_year3 = 0;

        if($this->request->getPost("chkyear4"))
          $AHY->activity_have_year4 = 1;
        else
          $AHY->activity_have_year4 = 0;
        $AHY->save();

        if (!$activitys->save()) {
            foreach ($activitys->getMessages() as $message) {
                $this->flashSession->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "admin",
                'action' => 'acedit'
            ]);

            return;
        }

        $this->flashSession->success("Activity was created successfully");

        $this->dispatcher->forward([
            'controller' => "admin",
            'action' => 'activitylist'
        ]);

}


   

}

