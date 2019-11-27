<a href="index.php?action=add" class="btn btn-success">Add New</a>
<br><br>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>class</th>
            <th>mark</th>
            <th>sex</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
    $id = 1;
        if(isset($data['view'])) {
            foreach ($data['view'] as $rows) {
    ?>
    <tbody>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['class']; ?></td>
            <td><?php echo $rows['mark']; ?></td>
            <td><?php echo $rows['sex']; ?></td>
            <td>
                <a href="index.php?action=detail&id=<?php echo $rows['id']; ?>"><i class="material-icons">remove_red_eye</i></a>
                <a href="index.php?action=edit&id=<?php echo $rows['id']; ?>"><i class="material-icons text-success">edit</i></a>
                <a href="index.php?action=delete&id=<?php echo $rows['id']; ?>"><i class="material-icons text-danger" onclick="return comfirm('Are you sure to delete???')">delete</i></a>
            </td>
        </tr>
    </tbody>
    <?php
    $id ++;
     }
    }
    ?>
</table>