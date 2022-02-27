<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="col-12">
    <table class="table">
        <thead>
            <th>Ten Mon</th>
            <th>Dia chi</th>
            <th>Logo</th>
            <th>Giao Vien</th>
            <th>Action</th>
            <th>
                <a href="<?= BASE_URL . 'admin/truong-hoc/tao-moi'?>">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php foreach($getS as $S): ?>
            <tr>
                <td>
                <a href="<?= BASE_URL . 'quiz?subjectId=' . $S->id?>"><?= $S->name ?></a>
                </td>
                <td>
                    <?= $S->address ?>
                </td>
                <td>
                    <?= $S->logo ?>
                </td>
                <td>
                <?php foreach($S->getTeacher as $T){ ?>
                    <?= $T->name ?>
                <?php }?>
                </td>
                <td>
                    <a  href="<?= BASE_URL . 'admin/truong-hoc/cap-nhat?id=' . $S->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'admin/truong-hoc/xoa?id=' . $S->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>