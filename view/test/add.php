
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
                    <div class="card-header text-center bg-primary text-white"><b><h2>Student Add Information</h2></b></div>
                    <div class="card-body">
                        <form action="index.php?action=form_data" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Class:</label>
                                <select name="class"class="form-control">
                                    <option value="Web2020A" name="class">Web2020A</option>
                                    <option value="Web2020B" name="class">Web2020B</option>
                                    <option value="SNA" name="class">SNA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mark:</label>
                                <input type="number" name="mark" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label><br>
                                <input type="radio" value="Male" name="sex"> Male <br>
                                <input type="radio" value="Female" name="sex"> Female
                            </div>
                            
                            <div class="card-footer">
                                <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                                <input type="submit" name="submit" id="submit" class="btn btn-primary float-right" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-3"></div>
        </div>
    </div>
