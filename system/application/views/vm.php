
                     <div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title">Wemu Creator</h2>
					<div class="entry"> 
					     <p>
						<?php echo form_open('lib_wemu/registration');?>
						<table id="search"s>
						  <tr><td>Vm's Name</td><td>:</td><td><input type="text" name="name"></td></tr> 
						  <tr><td>Proccessor</td><td>:</td><td><input type="text" name="name"></td></tr>
						  <tr><td>Vm's IP</td><td>:</td><td>
						  <select name="ip">
						     <?php for ($i = 2; $i <= 255; $i++) {
							    echo "<option value=\"$i\">$ip$i</option> \n" ;
							    }?>
						  </select>
                                                   </td></tr>
 						</table>
						</form>
					     </p>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<!-- end #widebar -->
		</div>
		<!-- end #page -->
	</div>