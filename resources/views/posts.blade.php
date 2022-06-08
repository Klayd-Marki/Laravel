<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/my.css">
    <title>Blog posts</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <?= $post ?>
    </article>
    <?php endforeach; ?>
</body>
</html>
