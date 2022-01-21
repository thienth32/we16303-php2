<table>
    <thead>
        <th>Mã môn</th>
        <th>Tên môn</th>
        <th>
            <a href="<?= BASE_URL . 'mon-hoc/tao-moi'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($subjects as $sub): ?>
            <tr>
                <td><?= $sub->id ?></td>
                <td><?= $sub->name ?></td>
                <td>
                    <a href="<?= BASE_URL . 'mon-hoc/cap-nhat?id=' . $sub->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'mon-hoc/xoa?id=' . $sub->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>