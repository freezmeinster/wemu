
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><a href="#">Welcome to Pluralism</a></h2>
					<div class="entry"><p>
						Available ISO  :    
							<table >
								<tr><th>Name</th><th>Type</th><th>Size</th><th>Action</th></tr>
                                   <?php foreach ($available_iso as $nguk){ 
                                      if ( $nguk != "." && $nguk != ".."){
									   $hdd = $this->system_info->hdd_info($nguk);
                             echo "<tr><td class=\"nguk\">$nguk</td><td class=\"nguk\">";
							 echo $hdd['type'];
						     echo  "</td><td class=\"nguk\">";
						     echo $hdd['size'];
							 echo  "</td><td class=\"nguk\">";
							 echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/del_hd/$nguk\"> delete</a> | ";
							  echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/edit_hd/$nguk\"> edit</a>";
						     echo  "</td></tr>";
						       }
						  }?>
						</table>
							
					      </p>
			</div>
			<!-- end #content -->
			<!-- end #widebar -->
		</div>
		<!-- end #page -->
	</div>
