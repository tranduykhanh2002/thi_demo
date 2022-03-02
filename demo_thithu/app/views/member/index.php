<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="col-12">
    <table class="table">
        <thead>
            <th>name</th>
            <th>is_leader</th>
            <th>project_id</th>
            <th>department  </th>
            <th>salary  </th>
            <th>phone  </th>
            <th>created_at  </th>
            <th>updated_at  </th>
            <th>Action</th>
            <th>
                <a href="<?= BASE_URL . 'admin/member/tao-moi'?>">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php foreach($getM as $S): ?>
            <tr>
                <td>
                <?= $S->name?>
                </td>
                <td>
                    <?= $S->is_leader ?>
                </td>
                <td>
                    <?= $S->project_id ?>
                </td>
                <td>
                 <?= $S->department?>
                </td>
                <td>
                 <?= $S->salary?>
                </td>
                <td>
                 <?= $S->phone?>
                </td>
                <td>
                 <?= $S->created_at?>
                </td>
                <td>
                 <?= $S->updated_at?>
                </td>
                <td>
                    <a  href="<?= BASE_URL . 'admin/member/cap-nhat?id=' . $S->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'admin/member/xoa?id=' . $S->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>