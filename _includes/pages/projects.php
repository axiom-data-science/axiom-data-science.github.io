<?php 

$projects = array(

	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	),
	
	
	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	),
	
	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	),
	
	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	),
	
	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	),
	
	array(
		'name'=>'Real-time sensors',
		'img'=>'sensors',
		'url'=>'projects/sensors'
	)
	


);



?>

<h1>Our work</h1>

<div class="row">
	<?php foreach($projects as $key=>$project): ?>
    <?php if(!empty($project['img'])): ?>
  <div class="col-xs-6 col-md-4">
     
    <a href="?p=<?php echo $project['url']; ?>" >
    <h3><?php echo $project['name']; ?></h3>
      <!--<img src="../assets/images/projects/<?php echo $client['img']; ?>.jpg" class="img-responsive" />-->
      <img src="http://placehold.it/300x200&text=img" class="img-responsive thumbnail" />
    
   
    </a>
    <!--<p><?php echo $project['description']; ?></p>-->
  </div>
  <?php endif; ?>
  <?php endforeach; ?>
</div>