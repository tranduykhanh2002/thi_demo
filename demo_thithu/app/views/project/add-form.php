<?php include_once "./app/views/include/teamplate/header.php"; ?>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="mt-5">
                    <h3 class="text-center">Them moi project</h3>
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">code</label>
                        <input type="text" class="form-control" name="code">
                    </div>
                    <div class="form-group">
                        <label for="">start_date  </label>
                        <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="form-group">
                        <label for="">end_date</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>
                    <div class="form-group">
                        <label for="">budget</label>
                        <input type="text" class="form-control" name="budget">
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once './app/views/include/footer.php' ?>