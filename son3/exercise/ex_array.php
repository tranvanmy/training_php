<?php
$authors = array(
    array(
        'name' => 'Nguyễn Văn Cường',
        'blog' => 'freetuts.net',
        'position' => 'admin'
    ),
    array(
        'name' => 'Trương Phúc Hoài Minh',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Hoàng Văn Tuyền',
        'blog' => 'freetuts.net',
        'position' => 'author'
    ),
    array(
        'name' => 'Nguyễn Tình',
        'blog' => 'freetuts.net',
        'position' => 'author'
    )
);
echo '<ul>';
foreach ($authors as $key => $author)
{
    echo '<li>';
    echo 'Name: ' . $author['name'] . '<br/>';
    echo 'Blog: ' . $author['blog'] . '<br/>';
    echo 'Position: ' . $author['position'] . '<br/>';
    echo '</li>';
}
echo '</ul>';

?>