<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
if(!empty($errors) || !empty($success)): ?>

<div id="status">	
	

	<?php if(!empty($errors)): ?>

		<!-- Error Status -->
		<div class="error">
			<?php if($errors): ?>
			<ul>
				<?php 
					foreach($errors as $error):
						echo "<li>$error</li>\n";
					endforeach; 
				?>
			</ul>
			<?php endif; ?>
		</div>

	<?php endif; ?>





	<?php if(!empty ($success)): ?>

		<!-- Success Status -->
		<div class="success">
			<ul>
			<?php
				foreach($success as $item)
				{
					echo "<li>$item</li>\n";
				}
			?>
			</ul>
		</div>

	<?php endif;?>

</div>

<?php endif;









