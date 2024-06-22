<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($postId == $post['id']) {
            $currentPost = $post;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit maxime libero dignissimos ducimus culpa minus, eaque rerum, animi quia beatae eligendi aperiam sint nulla, enim magnam placeat quam unde quod!
            Vitae placeat minus deserunt incidunt eius officiis, modi commodi harum tempore possimus. Officiis quo quidem corporis, quibusdam vel ducimus culpa laudantium magni accusamus ipsum, ea ipsa. Vel nemo eum rerum.
            Sapiente tempora, provident repudiandae dolorem facere possimus reiciendis exercitationem nostrum, aperiam animi aliquam amet molestiae recusandae hic quod earum enim vel vitae fuga necessitatibus impedit cum, nemo mollitia. Dolor, nulla?
            Veritatis excepturi porro praesentium quos officiis libero, maiores ullam nostrum dicta! Adipisci laboriosam exercitationem quae quo distinctio cum, ipsa sequi earum similique optio qui nobis quod id recusandae vitae vero.
            Vitae soluta fuga, necessitatibus nostrum voluptatum dolore est quos blanditiis quas sapiente et mollitia repellat tempora rerum corporis autem pariatur aut! Tempore corporis atque facilis, eaque harum repellendus quo doloribus?</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit maxime libero dignissimos ducimus culpa minus, eaque rerum, animi quia beatae eligendi aperiam sint nulla, enim magnam placeat quam unde quod!
            Vitae placeat minus deserunt incidunt eius officiis, modi commodi harum tempore possimus. Officiis quo quidem corporis, quibusdam vel ducimus culpa laudantium magni accusamus ipsum, ea ipsa. Vel nemo eum rerum.
            Sapiente tempora, provident repudiandae dolorem facere possimus reiciendis exercitationem nostrum, aperiam animi aliquam amet molestiae recusandae hic quod earum enim vel vitae fuga necessitatibus impedit cum, nemo mollitia. Dolor, nulla?
            Veritatis excepturi porro praesentium quos officiis libero, maiores ullam nostrum dicta! Adipisci laboriosam exercitationem quae quo distinctio cum, ipsa sequi earum similique optio qui nobis quod id recusandae vitae vero.
            Vitae soluta fuga, necessitatibus nostrum voluptatum dolore est quos blanditiis quas sapiente et mollitia repellat tempora rerum corporis autem pariatur aut! Tempore corporis atque facilis, eaque harum repellendus quo doloribus?</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit maxime libero dignissimos ducimus culpa minus, eaque rerum, animi quia beatae eligendi aperiam sint nulla, enim magnam placeat quam unde quod!
            Vitae placeat minus deserunt incidunt eius officiis, modi commodi harum tempore possimus. Officiis quo quidem corporis, quibusdam vel ducimus culpa laudantium magni accusamus ipsum, ea ipsa. Vel nemo eum rerum.
            Sapiente tempora, provident repudiandae dolorem facere possimus reiciendis exercitationem nostrum, aperiam animi aliquam amet molestiae recusandae hic quod earum enim vel vitae fuga necessitatibus impedit cum, nemo mollitia. Dolor, nulla?
            Veritatis excepturi porro praesentium quos officiis libero, maiores ullam nostrum dicta! Adipisci laboriosam exercitationem quae quo distinctio cum, ipsa sequi earum similique optio qui nobis quod id recusandae vitae vero.
            Vitae soluta fuga, necessitatibus nostrum voluptatum dolore est quos blanditiis quas sapiente et mollitia repellat tempora rerum corporis autem pariatur aut! Tempore corporis atque facilis, eaque harum repellendus quo doloribus?</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
</main>


<?php
include_once("templates/footer.php");
?>