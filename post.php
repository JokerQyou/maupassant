<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
			</header>
			<date class="post-meta meta-date">
				<?php $this->date('F j, Y'); ?>
			</date>
			<div class="post-meta meta-category">
				，归类于 <?php $this->category(' '); ?>
			</div>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
			<div class="post-meta meta-tags">
				<?php if ($this->tags): ?>
				<ul class="clearfix">
				<?php foreach ($this->tags as $tag){
					echo '<li><a href="'.$tag['permalink'].'">'.$tag['name'].'</a></li>';
				}
				?>
				</ul>
				<?php else: ?>
				<!-- No tags -->
				没有标签
				<?php endif; ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
