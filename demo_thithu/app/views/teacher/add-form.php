<?php include_once "./app/views/include/teamplate/header.php"; ?>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="mt-5">
                    <h3 class="text-center">Them moi giao vien</h3>
                    <div class="form-group">
                        <label for="">Ten</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Gioi tinh</label>
                        <select name="gender" class="form-select" aria-label="Default select example">
                            <option value="0">Nam</option>
                            <option value="1">Nu</option>
                            <option value="2">Khong xac dinh</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="gender"> -->
                    </div>
                    <div class="form-group">
                        <label for="">Chuyen nganh</label>
                        <input type="text" class="form-control" name="major">
                    </div>
                    <div class="form-group">
                        <label for="">Avatar</label>
                        <input type="text" class="form-control" name="avatar">
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