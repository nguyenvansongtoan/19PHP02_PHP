<h1>Product detail</h1>
<div class="list_product">
	<div class="product_detail_full">
			<h2><?php echo $detailProduct['name']?></h2>
			<p><?php echo $detailProduct['price']?> VND</p>
			<img src="webroot/uploads/products/<?php echo $detailProduct['image']?>">
			<a href="index.php?controller=products&action=buy&id=<?php echo $detailProduct['id']?>">BUY NOW</a>
	</div>
</div>
<div class="comment">
	<div class="comment_list">
	<?php
		if ($commentList->num_rows > 0){
			while ($comment = $commentList->fetch_assoc()) {
	  			$id = $comment['id'];
 	?>
		<div class="comment_detail">
			<div class="comment_author"><?php echo $comment['username']?></div>
			<div class="comment_connent_detail"><?php echo $comment['content']?></div>
			<div class="comment_time"><?php echo $comment['created']?></div>
		</div>
		<?php }?>
	<?php } else {?>
		<div class="comment_detail">
			<p>No comment</p>
		</div>
	<?php }?>
	</div>
	<div class="rate">
		<div class="star_rate">
			<div><?php  ?> <img src="webroot/img/star.png" alt="star"></div>
		</div>
		<div class="submit_rate">
			<form action="index.php?controller=rates&action=rate" method="POST">
				<input type="hidden" name="product_id" value="<?php echo $detailProduct['id']?>">
				<select name="star">
					<option value="1">1 star</option>
					<option value="2">2 star</option>
					<option value="3">3 star</option>
					<option value="4">4 star</option>
					<option value="5">5 star</option>
				</select>
				<input type="submit" name="rate" value="Rate">
			</form>
		</div>
	</div>
	<div class="like">
		<div class="total_like">23 likes</div>
		<a href="#" class="submit_like">Like</a>
	</div>
	<div class="comment_content">
		<form action="index.php?controller=comment&action=add" method="POST">
			<input type="hidden" name="product_id" value="<?php echo $detailProduct['id']?>">
			<textarea cols="40" rows="6" name="content"></textarea>
			<p>
				<input type="submit" name="comment" value="Comment">
			</p>
		</form>
	</div>
	
</div>