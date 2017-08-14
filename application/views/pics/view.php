<?php
//application/views/pics/view.php
$this->load->view($this->config->item('theme') . 'header');

//echo '<h2>'.$news_item['title'].'</h2>';
//echo $news_item['text'];
/*<li><a href="<?=base_url("pics/mariners")?>">Mariners</a></li>
			<li><a href="<?=base_url("pics/seahawks")?>">Seahawks</a></li>
			<li><a href="<?=base_url("pics/sounders")?>">Sounders</a></li>
*/

foreach($pics as $pic){

	$size = 'm';
	$photo_url = '
	http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

	echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

	}





$this->load->view($this->config->item('theme') . 'footer');

?>




<h3>Click the links below to see the coolest pics</h3>
<a href="<?=site_url("pics/kittens")?>">Search for the coolest Kittens</a><br />
<a href="<?=site_url("pics/bunnies")?>">Search for the coolest Bunnies</a><br />
<a href="<?=site_url("pics/bears")?>">Search for the coolest Bears</a><br />

<div class="form">
<h2>Ok, here they are! </h2>
<h2><?php echo $title; ?></h2>
<h3>Enter your word to search the pics</h3>
<form method="post">
<input type="text" name="searchword"><br />
<input type="submit" name="submit" value="submit"><br />
</form>
</div>

<!--add some style for the pics-->
<style>
    h4 {text-align: center; color:pink;}    
    div.pic {text-align: center;}
    div.form {font-size:20px; color:pink;text-align: center}
</style>

<?php foreach ($pics as $pic): ?>
<h4><?php echo $pic->title?> </h4>

<?php   
$size = 'm';
$photo_url = '
http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
?>

<div class="pic">
<?php echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />"; ?>
</div>

<?php endforeach; ?>
