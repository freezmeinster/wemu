<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Wemu, Web based Qemu managemen</title>
<link href="<?php echo base_url();?>/style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header">
			<div id="logo">
				<h1>Wemu</h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>index.php/wemu/hardisk">Harddisk</a></li>
					<li><a href="<?php echo base_url();?>index.php/wemu/iso">ISO</a></li>
                    <li><a href="<?php echo base_url();?>index.php/wemu/vm">VM</a></li>	
					<li><a href="<?php echo base_url();?>index.php/wemu/about">About</a></li>
                                        <?php
                                            $stat = $this->permision->check_user();
                                            if ($stat == "1") {
					      echo "<li><a href=\"";
                                              echo base_url(); 
                                              echo "index.php/lib_wemu/logout\">Logout</a></li>";
					     }
					    else if ($stat == "0") {
					    echo "";
					     }
                                        ?>
				</ul>
			</div>
		</div>
