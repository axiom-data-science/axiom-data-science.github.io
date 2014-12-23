

       
       

      

        <h1>Clients and Collaborators</h1>


<?php 

$clients = array(

array(
	'url'=>'http://www.aoos.org',
	'img'=>'aoos',
	'name'=>' Alaska Ocean Observing System'),
array(
	'url'=>'http://data.cencoos.org',
	'img'=>'cencoos',
	'name'=>' Central & Northern California Ocean Observing System'),
array(
	'url'=>'http://www.ioos.noaa.gov/',
	'img'=>'ioos',
	'name'=>'Integrated Ocean Observing System'),
array(
	'url'=>'http://www.axiomdatascience.com/maps/usgs.php',
	'img'=>'usgs',
	'name'=>'USGS'),
array(
	'url'=>'http://www.evostc.state.ak.us/',
	'img'=>'evos',
	'name'=>'Exxon Valdez Oil Spill Trustee Council'),
array(
	'url'=>'http://www.nprb.org/',
	'img'=>'nprb',
	'name'=>'North Pacific Research Board'),
array(
	'url'=>'http://www.noaa.gov/',
	'img'=>'noaa',
	'name'=>'NOAA'),
array(
	'url'=>'http://www.boem.gov/',
	'img'=>'boem',
	'name'=>'Bureau of Ocean Energy Management'),
array(
	'url'=>'http://www.shell.us/aboutshell/projects-locations/alaska.html',
	'img'=>'shell',
	'name'=>'Shell'),
array(
	'url'=>'http://axystechnologies.com/',
	'img'=>'axys',
	'name'=>'AXYS Technologies'),
array(
	'url'=>'https://www.chukchiscience.com/',
	'img'=>'csesp',
	'name'=>'Chukchi Sea Environmental Studies Program'),
	
array(
	'url'=>'http://www.gulfwatchalaska.org/',
	'img'=>'gulfwatch',
	'name'=>'Gulf Watch Alaska'),
array(
	'url'=>'http://www.circac.org/',
	'img'=>'circac',
	'name'=>'Cook Inlet Regional Citizens Advisory Council'),
array(
	'url'=>'http://bssn.net/',
	'img'=>'bssn',
	'name'=>'Bering Sea Sub-Network'),
array(
	'url'=>'http://www.adfg.alaska.gov/',
	'img'=>'adfg',
	'name'=>'Alaska Department of Fish & Game'),
array(
	'url'=>'http://www.fws.gov/',
	'img'=>'fish_wildlife',
	'name'=>'U.S. Fish and Wildlife Service'),
array(
	'url'=>'http://www.arctic.noaa.gov/dbo/',
	'img'=>'dbo',
	'name'=>'Distributed Ecological Observatory'),
array(
	'url'=>'http://rusalcaproject.com/',
	'img'=>'rusalca',
	'name'=>'RUSALCA'),
array(
	'url'=>'https://web.sfos.uaf.edu/wordpress/arcticeis/',
	'img'=>'arctic_eis',
	'name'=>'Arctic EIS'),
array(
	'url'=>'http://www.iser.uaa.alaska.edu/',
	'img'=>'iser',
	'name'=>'ISER'),
array(
	'url'=>'http://aknhp.uaa.alaska.edu/',
	'img'=>'aknhp',
	'name'=>'AKNHP')

);

?>



<div class="row">
	<?php foreach($clients as $key=>$client): ?>
    <?php if(!empty($client['img'])): ?>
  <div class="col-xs-3 col-md-2">
    <a href="<?php echo $client['url']; ?>" class="thumbnail" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo trim($client['name']); ?>">
      <img src="../assets/images/logos/<?php echo $client['img']; ?>.jpg" class="img-responsive" />
    </a>
  </div>
  <?php endif; ?>
  <?php endforeach; ?>
</div>

<!--

        <div class="heading"><h3>Client #1</h3></div>
        <img src="http://placehold.it/100x100&text=logo" class="img-responsive thumbnail pull-right" />

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat feugiat arcu, ac consequat sem tempor sed. Donec porttitor felis sit amet tortor lobortis iaculis. Cras sit amet sollicitudin ante. Sed fermentum luctus orci in ultricies. Aliquam erat volutpat. Nam efficitur arcu non dolor placerat, vel feugiat erat porta. Sed dictum sapien eget arcu commodo consequat.</p>


        

        <ul>
         <li> Ut dui sem, semper at diam eu, faucibus suscipit nibh.</li> 
         <li>Phasellus condimentum bibendum mi, nec vestibulum nulla. Nullam scelerisque lobortis dolor, maximus tristique nulla sollicitudin dapibus.</li> 
         <li>Donec ornare nibh quis lectus cursus ultrices sit amet vestibulum dolor. Aenean at dolor eu diam maximus auctor.</li> 
        </ul>

             <div class="heading"><h3>Client #2</h3></div>
        <img src="http://placehold.it/100x100&text=logo" class="img-responsive thumbnail pull-right" />

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat feugiat arcu, ac consequat sem tempor sed. Donec porttitor felis sit amet tortor lobortis iaculis. Cras sit amet sollicitudin ante. Sed fermentum luctus orci in ultricies. Aliquam erat volutpat. Nam efficitur arcu non dolor placerat, vel feugiat erat porta. Sed dictum sapien eget arcu commodo consequat.</p>
		<div class="projects">
         <img src="http://placehold.it/70x70&text=project" class="img-responsive thumbnail pull-left" />
          <img src="http://placehold.it/70x70&text=project" class="img-responsive thumbnail pull-left" />
           <img src="http://placehold.it/70x70&text=project" class="img-responsive thumbnail pull-left" />
          </div>
        

        

         <div class="heading"><h3>Client #3</h3></div>
        <img src="http://placehold.it/100x100&text=logo" class="img-responsive thumbnail pull-right" />

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat feugiat arcu, ac consequat sem tempor sed. Donec porttitor felis sit amet tortor lobortis iaculis. Cras sit amet sollicitudin ante. Sed fermentum luctus orci in ultricies. Aliquam erat volutpat. Nam efficitur arcu non dolor placerat, vel feugiat erat porta. Sed dictum sapien eget arcu commodo consequat.</p>


        

        <ul>
         <li> Ut dui sem, semper at diam eu, faucibus suscipit nibh.</li> 
         <li>Phasellus condimentum bibendum mi, nec vestibulum nulla. Nullam scelerisque lobortis dolor, maximus tristique nulla sollicitudin dapibus.</li> 
         <li>Donec ornare nibh quis lectus cursus ultrices sit amet vestibulum dolor. Aenean at dolor eu diam maximus auctor.</li> 
        </ul>

        <div class="heading"><h3>Client #4</h3></div>
        <img src="http://placehold.it/100x100&text=logo" class="img-responsive thumbnail pull-right" />

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat feugiat arcu, ac consequat sem tempor sed. Donec porttitor felis sit amet tortor lobortis iaculis. Cras sit amet sollicitudin ante. Sed fermentum luctus orci in ultricies. Aliquam erat volutpat. Nam efficitur arcu non dolor placerat, vel feugiat erat porta. Sed dictum sapien eget arcu commodo consequat.</p>


        

        <ul>
         <li> Ut dui sem, semper at diam eu, faucibus suscipit nibh.</li> 
         <li>Phasellus condimentum bibendum mi, nec vestibulum nulla. Nullam scelerisque lobortis dolor, maximus tristique nulla sollicitudin dapibus.</li> 
         <li>Donec ornare nibh quis lectus cursus ultrices sit amet vestibulum dolor. Aenean at dolor eu diam maximus auctor.</li> 
        </ul>


-->
      




