<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$title = $site_title;
	$date = "today";
	$author = "Doomlol";
?>
<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>
    <link rel="stylesheet" href="blog.css">
<section>
	<aside>
		<ul>
		<?php foreach ($keypaths as $path => $id): ?>
			<?php $post = parse_file($path); ?>
			   

			<li class="blog">
				<a href="post.php?id=<?= $id ?>">
					<?= $post['title'] ?>
				</a>
				<?php echo renderMarkdown($titleAndSummary); ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</aside>
</section>

<?php include 'include/footer.php'; 
?>