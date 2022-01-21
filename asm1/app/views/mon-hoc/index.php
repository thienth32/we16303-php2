<table>
    <thead>
        <th>Mã môn</th>
        <th>Tên môn</th>
    </thead>
    <tbody>
        <?php foreach($subjects as $sub): ?>
            <tr>
                <td><?= $sub->id ?></td>
                <td><?= $sub->name ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>