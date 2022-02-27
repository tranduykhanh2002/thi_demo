<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="col-12">
    <table class="table">
        <thead>
            <th>Ten Giao Vien</th>
            <th>Chuyen Nganh</th>
            <th>Gioi Tinh</th>
            <th>Anh</th>
            <th>Action</th>
            <th>
                <a href="<?= BASE_URL . 'admin/giao-vien/tao-moi'?>">Them moi</a>
            </th>
        </thead>
        <tbody>
            <?php foreach($getT as $T): ?>
            <tr>
                <td>
                    <?= $T->name ?>
                </td>
                <td>
                    <?= $T->major ?>
                </td>
                <td>
                    <?php if($T->gender == 0){
                        echo "Gioi tinh nam";
                    }elseif($T->gender == 1){
                        echo "Gioi tinh nu";
                    }else{
                        echo "Khong xac dinh";
                    } ?>
                </td>
                <td>
                    <?= $T->avatar ?>
                </td>
                <td>
                    <a  href="<?= BASE_URL . 'admin/giao-vien/cap-nhat?id=' . $T->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'admin/giao-vien/xoa?id=' . $T->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>