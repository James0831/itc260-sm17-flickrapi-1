<?php
//application/views/pics/index.php
$this->load->view($this->config->item('theme') . 'header');
?>

<h2>Categories of Pictures</h2>
<h4><a href="<?=base_url("pics/mariners")?>">Mariners</a></h4>
<h4><a href="<?=base_url("pics/seahawks")?>">Seahawks</a></h4>
<h4><a href="<?=base_url("pics/sounders")?>">Sounders</a></h4>

<?php
$this->load->view($this->config->item('theme') . 'footer');


?>