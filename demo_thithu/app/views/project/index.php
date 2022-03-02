<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="col-12">
    <table class="table">
        <thead>
            <th>name</th>
            <th>code</th>
            <th>start_date </th>
            <th>end_date </th>
            <th>budget</th>
            <th>created_at</th>
            <th>update_at</th>
            <th>action</th>
            <th>
                <a href="<?= BASE_URL . 'admin/project/tao-moi'?>">Them moi</a>
            </th>
        </thead>
        <tbody>
            <?php foreach($getP as $T): ?>
            <tr>
                <td>
                    <?= $T->name ?>
                </td>
                <td>
                    <?= $T->code ?>
                </td>
                <td>
                   <?= $T->start_date?>
                </td>
                <td>
                    <?= $T->end_date ?>
                </td>
                <td>
                    <?= $T->budget ?>
                </td>
                <td>
                    <?= $T->end_date ?>
                </td>
                <td>
                    <?= $T->created_at ?>
                </td>
                <td>
                    <?= $T->update_at ?>
                </td>
                <td>
                    <a  href="<?= BASE_URL . 'admin/project/cap-nhat?id=' . $T->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'admin/project/xoa?id=' . $T->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>