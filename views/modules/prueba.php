<?php
						if (isset($_POST['minprice'])) {

					    //if (!empty($_POST['minprice'])) {
					        $minprice = (int)$_POST['minprice'];
					        echo $minprice;
					    //}
					}else
					{
						echo 'no entro';
					}
?>