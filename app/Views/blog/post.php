<section>
    <div class="container">
      <article class="blog-post">
        <h1><?= $post['title'] ?></h1>
        <div class="details">
            Posted on: <?= date('M d Y', strtotime($post['created_at']))?> By <a href="https://liamo2546.github.io/Updated-Portfolio/">Liam Oflaherty</a>
        </div>
        <?= $post['body'] ?>
      </article>
    </div>
</section>