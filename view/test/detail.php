
<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>class</th>
            <th>mark</th>
            <th>sex</th>
        </tr>
    </thead>
    <?php 
    $id = 1;
        if(isset($data['detail'])) {
            foreach ($data['detail'] as $result) {
    ?>
    <tbody>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['class']; ?></td>
            <td><?php echo $result['mark']; ?></td>
            <td><?php echo $result['sex']; ?></td>
        </tr>
    </tbody>
    <?php
    $id ++;
     }
    }
    ?>
</table>
<br><br>
<a href="index.php?action=view" class="btn btn-success">Go Back</a>