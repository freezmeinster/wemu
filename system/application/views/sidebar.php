<div id="sidebar">
			<ul>
                                <li><strong>Operating system status:</strong>
                                     <ul>
                                     <li>This System running <?php echo $ostype; ?></li>
   				     <li>With Kernel <?php echo $kernel; ?></li> 	
                                     <li>And the hostname is <?php echo $host; ?></li>
                                     </ul>
                                </li>
				<li><strong>Memory Status:</strong> 
                                    <ul>
                                        <li>Total Memory is <?php echo $total; ?> Mb</li>
                                        <li>System Used <?php echo $used; ?>Mb</li>
           				<li>Free Memory is <?php echo $free; ?>Mb</li>
                                    </ul>
                                </li>
				<li><strong>Qemu Status:</strong>
				    <ul>
					<li>Qemu version is <?php echo $qemu_version; ?></li>
					<li>Base Dir : <?php echo $wemu_base; ?></li> 
					<li>Qemu Partition <?php echo $wemu_part; ?></li>
				    </ul>
				</li>
				<li><strong>Harddisk Status:</strong>
				    <ul>
					<li>Root Partition /dev/<?php echo $part_disk; ?></li>
					 
				    </ul>
				</li>
               		        	
			</ul>
		</div>