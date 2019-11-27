<?php 
    $data = array();
    manage_call_function($data);
    function manage_call_function(&$data)
    {
        $function = 'view';
        if(isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['view'] = m_view();
        $data['page'] = "test/view";
    }
    function add(&$data){
        $data['page'] = "test/add";
    }
    function form_data(&$data){
        $add_data = m_add_data($_POST);
        if($add_data){
            $action = "view";
        }else{
            $action = "add";
        }
        header("Location: index.php?action=$action");
    }

    function detail(&$data){
        $data['detail'] = m_detail();
        $data['page'] = "test/detail";
    }

    function delete(&$data){
        $data['delete'] = m_delete();
        $data['page'] = "test/delete";
    }

    function edit(&$data){
        $data['edit_data'] = m_detail();
        $data['page'] = "test/edit";
    }

    function form_edit(&$data){
        $edit_data = m_edit($_POST);
        if($edit_data){
            $ections = "view";
        }else{
            $ections = "edit";
        }
        header("Location: index.php?=$ections");
    }
?>