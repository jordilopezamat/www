<?php $this->pageTitle = 'pressEnter | ' . $post->title; ?>
<?php $this->metaDescription = substr($post->title.'. '.strip_tags(str_replace("\r\n", ' ', $post->body)), 0, 250).'...'; ?>
<div class="article full">
	<div class="header">
		<div class="published-date">
			<?php 
			$date_parts = getdate(strtotime($post->published_date));
			$date_out = "
			<span class='day'>{$date_parts['mday']}</span> de 
			<span class='month'>" . Yii::app()->locale->getMonthName($date_parts['mon'], 'wide') . "</span>
			de <span class='year'>{$date_parts['year']}</span>
			";
			?>
			<?php echo $date_out; ?>
		</div> <!-- published-date -->
		<h2><?php echo $post->title ?></h2>
	</div>
	<div class="body">
		<?php echo $post->body; ?>
	</div>
	<div class="footer">
		<?php $url = Yii::app()->getBaseUrl(true).'/news/read/'.$post->id . '/' .$post->slug; ?>
		<?php Yii::app()->controller->renderPartial('application.views.partials._social_links', array('url' => $url, 'title' => $post->title)); ?>
	</div>
</div> <!-- post -->
