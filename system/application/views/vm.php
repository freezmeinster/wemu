
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title">Virtual Machine Creator</h2>
					<div class="entry"> 
<p>
						Available Virtual Machine :    
							<table >
								<tr><th>Name</th><th>Memory</th><th>Harddisk</th><th>ISO</th><th>Vnc's Port</th><th>Editor</th><th>Run</th></tr>
                                   <?php foreach ($available_vm as $nguk){ 
                                      if ( $nguk != "." && $nguk != ".."){
                                     $vm = $this->system_info->vm_info($nguk);
                             echo "<tr><td class=\"nguk\">$nguk</td><td class=\"nguk\">";
						     echo $vm['memory'];
						     echo  "</td><td class=\"nguk\">";
						     echo $vm['disk'];
					             echo  "</td><td class=\"nguk\">";
                                                     echo $vm['iso'];
						     echo  "</td><td class=\"nguk\">590";
						      echo $vm['port'];
						     echo  "</td><td class=\"nguk\">";
					             echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/del_vm/$nguk\"> delete</a>\n  ";
							  echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/edit_vm/$nguk\"> edit</a></td><td class=\"nguk\">\n";
						      echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/start_vm/$nguk\"> start</a>\n";
							  echo  "<a href=\"";
						     echo  site_url();
						     echo  "/lib_wemu/stop_vm/$nguk\"> stop</a>\n";
						     echo  "</td></tr>\n";
						       }
						  }?>
						</table>
							
					      </p>
					     <p>
						<?php echo form_open('lib_wemu/vm_register');?>
						<table id="search" >
						  <tr><td>Vm's Name</td><td>:</td><td><input type="text" name="name"></td></tr> 
						  <tr><td>Memory</td><td>:</td><td><select name="mem">
										   <option value="256">------</option>
								                   <option value="32">32</option>
										   <option value="64">64</option>
										   <option value="128">128</option>
										   <option value="256">256</option>
										   <option value="358">358</option>
									           <option value="512">512</option>
										   </select> Megabytes ( Default memory is 256 Mb)
										</td></tr>
									<tr><td>Harddisk to use</td><td>:</td><td>
						  <select name="hdd">
						     <?php foreach ($available_hdd as $nguk){ 
                                      if ( $nguk != "." && $nguk != ".."){
                                                    echo "<option value=\"$nguk\">$nguk</option>\n";
						
						       }
						  }?>
						  </select>

                                                   </td></tr>
						<tr><td>ISO to use</td><td>:</td><td>
						  <select name="iso">
						     <?php foreach ($available_iso as $nguk){ 
                                      if ( $nguk != "." && $nguk != ".."){
                                                    echo "<option value=\"$nguk\">$nguk</option>\n";
						
						       }
						  }?>
						  </select>
                                                   </td></tr>
						  <tr><td title="Wemu use VNC to let user to comunicate with the Virtual Machine they created, please specify the port.">Remote Port</td><td>:</td><td>
						  <select name="port">
						     <?php for ($i = 1; $i <=8; $i++) {
							    echo "<option value=\"$i\">590$i</option> \n" ;
							    }?>
						  </select>
                                                   </td></tr>
						<tr><td colspan="3"><input type="submit" value="Register VM"></td></tr>
 						</table>
						</form>
					     </p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
