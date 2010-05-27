
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title">Wemu iso management</h2>
					<div class="entry">
					  <p>
					       Registered ISO's : 
						<table >
						<tr><th>Name</th><th>Action</th></tr>
                                               <?php  
						  echo $this->system_info->registered_iso();			
						?>
						</table>
					      </p>
						<p>
						Available ISO  : 
                                                <table >
						<tr><th>Name</th><th>Action</th></tr>
		
						<?php  
						  echo $this->system_info->available_iso();;
                                                ?>
						</table>	
					      </p>
					      
					</div>
	                 </div>
	</div>
