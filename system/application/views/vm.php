
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title">Wemu Creator</h2>
					<div class="entry"> 
					     <p>
						<?php echo form_open('lib_wemu/vm_register');?>
						<table id="search" >
						  <tr><td>Vm's Name</td><td>:</td><td><input type="text" name="name"></td></tr> 
						  <tr><td>Memory</td><td>:</td><td><select name="mem">
								                   <option value="32">32</option>
										   <option value="64">64</option>
										   <option value="128">128</option>
										   <option value="256">256</option>
										   <option value="358">358</option>
									           <option value="512">512</option>
										   </select> Megabytes
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
						  <select name="hdd">
						     <?php foreach ($available_iso as $nguk){ 
                                      if ( $nguk != "." && $nguk != ".."){
                                                    echo "<option value=\"$nguk\">$nguk</option>\n";
						
						       }
						  }?>
						  </select>
                                                   </td></tr>
						  <tr><td title="Wemu use VNC to let user to comunicate with the Virtual Machine they created, please specify the port.">Remote Port</td><td>:</td><td>
						  <select name="ip">
						     <?php for ($i = 1; $i <=8; $i++) {
							    echo "<option value=\":$i\">590$i</option> \n" ;
							    }?>
						  </select>
                                                   </td></tr>
 						</table>
						</form>
					     </p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
