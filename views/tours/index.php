<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tour</title>
    <style>
        table { width: 60%; border-collapse: collapse; margin: 20px auto; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Danh sách Tour</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên tour</th>
            <th>Danh mục</th>
            <th>Hình ảnh</th>
        </tr>

        <?php foreach ($tours as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['ten_tour'] ?></td>
            <td><?= $item['danh_muc'] ?></td>
            <td>
                <?php 
                    $imgs = json_decode($item['hinh_anh'], true);
                    echo $imgs ? implode(", ", $imgs) : 'Không có';
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
