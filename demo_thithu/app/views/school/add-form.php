<?php include_once "./app/views/include/teamplate/header.php";?>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="mt-5">
                    <h3 class="text-center">Tao moi truong hoc</h3>
                    <div class="form-group">
                        <label for="">Ten truong hoc</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Dia chi</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="text" class="form-control" name="logo">
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