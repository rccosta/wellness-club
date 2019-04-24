<?php
session_start();
require_once '../../Config.php';

use Vimeo\Vimeo;

$client = new Vimeo("592aab3ec7aac0a0de1a67f4faf7365151e789fb", "jMP9OKTq5t9t4RIIR9AZgaimnqRpbLEalrisYUkytFzeWBUVfUMx0d8QbW4DyupmIpu5CfxHTNpTAWJk/Btg5Xv/DYG/1oBg5MnuiT2WCzcfp1wZKhlqlCU+hC8G98wf", "cff72c5cb16af2c6cecace3c98ddae50");

// $response = $client->request('/me/videos/', array(), 'GET');
$response = $client->request('/me/projects/' . $_GET['xCategoria'] . '/videos/', array(), 'GET');

$body = $response['body'];
$data = $body['data'];
?>
<div class="row">
	<?php foreach ($data as $video) : ?>
	<div class="col-lg-4 col-md-4 col-sm-6 ">
		<div class="card">
			<img
				class="card-img-top img-fluid"
				src="<?php echo $video['pictures']['sizes'][3]['link']?>"
				alt="Card image cap">
			<div class="card-block">
				<h5 class="card-title"><?php echo $video['name']?></h5>
				<p class="card-text text-muted"><?php echo $video['description']?></p>
				<p class="card-text">
					<small class="text-muted"><?php echo $video['release_time']?></small>
				</p>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>