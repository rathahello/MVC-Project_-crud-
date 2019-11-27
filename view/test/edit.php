<?php
foreach($data['edit_data'] as $result) {

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-success">Students Management</h2>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white"><b>
                            <h2>Student Edit Information</h2>
                        </b></div>
                    <div class="card-body">
                        <form action="index.php?action=form_edit&id=<?php echo $result['id'];?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" name="name" value="<?php echo $result['name'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Class:</label>
                                <select  name="class" class="form-control">
                                    <option <?php if ($result['class'] == "Web2020A") { ?> selected="selected" <?php } ?> value="Web2020A" name="class">Web2020A</option>
                                    <option <?php if ($result['class'] == "Web2020B") { ?> selected="selected" <?php } ?> value="Web2020B" name="class">Web2020B</option>
                                    <option <?php if ($result['class'] == "SNA") { ?> selected="selected" <?php } ?> value="SNA" name="class">SNA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mark:</label>
                                <input type="number" name="mark" value="<?php echo $result['mark'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label><br>
                                <input type="radio" <?php if ($result['sex'] == "Male") { ?> checked="checked" <?php } ?> value="Male" name="sex"> Male <br>
                                <input type="radio" <?php if ($result['sex'] == "Female") { ?> checked="checked" <?php } ?> value="Female" name="sex"> Female
                            </div>

                            <div class="card-footer">
                                <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                                <input type="submit" name="edit" id="edit" class="btn btn-success float-right" value="Edit Information">
                            </div>
                        <?php

                        }

                        ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>