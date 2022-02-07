<h3>Môn học: <?= $subject->name ?></h3>
<table>
    <thead>
        <th>Name</th>
        <th>Score</th>
    </thead>
    <?php foreach($quizs as $q): ?>
        <tr>
            <td><?= $q->name ?></td>
            <td><?= $q->getStudentScore() ?></td>
        </tr>
    <?php endforeach?>
</table>