<?php 
    
    function m_view()
    {
       $query = "SELECT * FROM student";
       include "connection.php";
       $result = mysqli_query($conn, $query);
       $rows = [];
       if($result && mysqli_num_rows($result) > 0){
           foreach ($result as $record) {
              $rows[] = $record;
           }
       }
       return $rows; 
    }
    function m_add_data($data){
        include 'connection.php';
        $fullname = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];
        $sex = $_POST['sex'];

        $query = "INSERT INTO student(name,class,mark,sex)
                    VALUES('$fullname','$class','$mark','$sex')";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function m_detail(){
        include "connection.php";
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
        return $query;
    }

    function m_delete(){
        include "connection.php";
        $id = $_GET['id'];
        $query = mysqli_query($conn, "DELETE FROM student WHERE id=$id");
        return $query;
    }
    
    function m_edit($data){
        include "connection.php";
        $id = $_GET['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];
        $sex = $_POST['sex'];
        $query = mysqli_query($conn, "UPDATE student SET name='$name', class='$class',mark='$mark',sex='$sex' WHERE id=$id");
        return $query;
    }

?>