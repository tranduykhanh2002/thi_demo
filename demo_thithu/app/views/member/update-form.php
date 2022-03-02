<?php include_once "./app/views/include/teamplate/header.php";?>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="mt-5">
                    <h3 class="text-center">Cap nhat member</h3>
                    <?php foreach($getS as $S){ ?>
                        <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" value="<?= $S->name?>" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">is_leader</label>
                        <select class="form-select" name="is_leader" aria-label="Default select example">
                            <option value="0">Leader</option>
                            <option value="1">thanh vien</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="is_leader"> -->
                    </div>
                    <div class="form-group">
                        <label for="">salary</label>
                        <input type="text" class="form-control" value="<?= $S->salary?>" name="salary">
                    </div>
                    <div class="form-group">
                        <label for="">department</label>
                        <input type="text" class="form-control" value="<?= $S->department?>" name="department">
                    </div>
                    <div class="form-group">
                        <label for="">phone</label>
                        <input type="text" class="form-control" value="<?= $S->phone?>" name="phone">
                    </div>
                    <?php } ?>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once './app/views/include/footer.php' ?>