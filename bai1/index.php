<?php

// 1. tạo kết nối đến db
$connect = new PDO("mysql:host=127.0.0.1;dbname=we16303-php2;charset=utf8", "root", "12345678");
// 2. chuẩn bị câu sql để lấy dữ liệu từ bảng posts
$sql = "select 
            p.*,
            u.`name` as author_name,
            (select count(*) from comments c where c.post_id = p.id) as comment_count 
        from posts p
        join users u
        on p.author_id = u.id";
// 3. thực thi câu lệnh với sql
$stmt = $connect->prepare($sql);
$stmt->execute();
// 4. thu thập dữ liệu trả về
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 5. hiển thị dữ liệu ra dạng table

?>
<table>
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Comments</th>
        <th>
            <a href="add.php">Add</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($posts as $p): ?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['title']?></td>
                <td><?= $p['author_name']?></td>
                <td><?= $p['comment_count']?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>