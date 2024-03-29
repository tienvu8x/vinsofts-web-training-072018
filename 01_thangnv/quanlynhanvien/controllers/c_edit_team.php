<?php
    class c_edit_team extends controller{
        public function __construct(){
            parent::__construct();

            $tb="";
            $action=$_GET['action'];
            $id=$_GET['id'];
            $team = $this->m_teams->get_id($id);
            $list_id_user = $this->model->get_all("select id,name from users");
            sort($list_id_user);
            $new_id=$this->m_teams->get_new_id();

            if($action=="delete"){
                $this->m_teams->delete($_GET['id']);
                header("location:index.php?controller=c_teams");
            }
            else{
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $data=$_POST;

                if($data['name']=="")
                    $tb="Name";

                if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                    $uploaddir      =   "images/teams";
                    $fileinfo       =   PATHINFO($_FILES['image']['name']);
                    $newfilename    =   "upload_".$fileinfo['filename'].".".$fileinfo['extension'];
                    $filetmp        =   $_FILES['image']['tmp_name'];
                        $data["image"]           =   "$uploaddir/$newfilename";
                    if (!file_exists("images/teams/".$newfilename))
                        move_uploaded_file($filetmp,"$uploaddir/$newfilename");
                }
                else{
                    $data["image"]="-1";
                }
                switch ($action){
                    case "add":
                    $this->m_teams->insert($data);
                        break;

                    default:
                        if($data['leader_id']==0){
                            $data['leader_id']=$team->leader_id;
                        }
                        if($data["image"] =="-1"){
                            $this->m_teams->update_no_up_img($data);
                        }else{
                            $this->m_teams->update($data);
                        }
                        break;
                }
                header("location:index.php?controller=c_edit_team&action=edit&id=".$_POST['id']);
                }
            }
            include "views/v_edit_team.php";
        }
    }
    new c_edit_team();
?>