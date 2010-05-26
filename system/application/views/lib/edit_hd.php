
                     <div id="page">
			<div id="content">
				<div class="post" align="center">
					<h2 class="title">Edit Hardisk <strong><i><?php echo $hdd; ?></i></strong> </a></h2>
					<div class="entry"> 
                      <?php echo form_open('lib_wemu/fix_hd');?>
		     <input type="hidden" name="path" value="<?php echo $hdd; ?>">			  
						  <table>
						    <input type="hidden" name="hd_name" value="<?php echo $name;?>"/>
						     <tr><td>Type</td><td>:</td><td><select name="type">
										    <option value="<?php echo $type;?>">----------</option>	
										    <option value="qcow2">qcow2</option>
										    <option value="qcow">qcow</option>
										    <option value="cow">cow</option>
										    <option value="raw">raw</option>
										    </select></td></tr>
						      <tr><td>Size</td><td>:</td><td><select name="size">
										    <option value="<?php echo $size;?>">------------</option>	
											    <?php 

														
												for( $i=0; $i <= 50; $i+=10){
if ( $i != "0"){												echo "<option value=$i";
												echo "G>$i Gigabytes</option>\n";    
											  }}
												    ?>		      
										    </select></td></tr>
						      
						    <tr><td></td><td></td><td><input type="submit" value="Edit"/></td></tr>
						  </table>
						 </form>
					</div>
				</div>
			</div>
		</div>
