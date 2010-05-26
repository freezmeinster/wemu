
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title">Harddisk Creator</h2>
					<div class="entry"> 
 
					  <p>
						Available Hardisk :    
							<table >
								<tr><th>Name</th><th>Type</th><th>Size</th><th>Action</th></tr>
                                   <?php foreach ($available_hdd as $nguk){ 
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
					      <p>
						  Create Hardisk:
						<?php echo form_open('lib_wemu/create_hd');?>
						  
						  <table>
						     <tr><td>Name</td><td>:</td><td><input type="text" name="hd_name"/></td></tr>
						     <tr><td>Type</td><td>:</td><td><select name="type">
										    <option value="qcow2">----------</option>	
										    <option value="qcow2">qcow2</option>
										    <option value="qcow">qcow</option>
										    <option value="cow">cow</option>
										    <option value="raw">raw</option>
										    </select></td></tr>
						      <tr><td>Size</td><td>:</td><td><select name="size">
										    <option value="10G">------------</option>	
											    <?php 

														
												for( $i=0; $i <= 50; $i+=10){
if ( $i != "0"){												echo "<option value=$i";
												echo "G>$i Gigabytes</option>\n";    
											  }}
												    ?>		      
										    </select></td></tr>
						      
						    <tr><td><input type="reset" value="Reset"/></td><td></td><td><input type="submit" value="Create"/></td></tr>
						  </table>
						 </form>
                                              </p></td><td>

					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<!-- end #widebar -->
		</div>
		<!-- end #page -->
	</div>
