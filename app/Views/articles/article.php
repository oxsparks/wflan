<?php $this->layout('layout', ['title' => 'Article']) ?>
<?php $this->start('main_content') ?>

<?php  if (isset($article)): ?>
<div class="container-fluid">
    <h1>Article</h1>
    <article class="txtArticle col-xs-8 col-xs-offset-2">
        <h1><?= $article['title'] ?></h1>
        <img src="<?= $article['pictures'] ?>" alt="<?= $article['description_pictures'] ?>" class="img-responsive">
        <p><?= $article['text'] ?></p>
        <hr>
        <p class="infoArticle"></p>
        <small class="form-text text-muted">Par <?= $article['author'] ?>, le <?= $article['publishdate'] ?>.</small>
    </article>
    <!--Side Nav Bar -->
    <nav class="col-xs-2 bs-docs-sidebar sidebar-custom">
        <ul id="sidebar" class="nav nav-stacked fixed style="padding-bottom: 10px;"">
          <h3>Nos articles:</h3>
            <li>
                <ul class="nav nav-stacked fixed">
                    <li><a href="#GroupASub1" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                    <li><a href="#GroupASub2" class="sideCSS">Articles</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<?php endif; ?>
<?php $this->stop('main_content') ?>
