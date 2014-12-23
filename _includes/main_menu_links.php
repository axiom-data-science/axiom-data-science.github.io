<?php

	$links = array(
		array('home','Home'),
		array('about','About'),
		array('contact','Contact'),		
		array('clients','Clients'),
		array('capabilities','Capabilities'),
		array('tech','Technology')
	)

?>

<?php foreach($links as $link): ?>
	<li<?php if($link[0] == PAGE){echo ' class="active"';} ?>><a href="?p=<?php echo $link[0]; ?>"><?php echo $link[1]; ?></a></li>
<?php endforeach; ?>