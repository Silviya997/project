<?php
	$pics = array('img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/5.jpg');
	
?>
	<hr>
	<center><h3>Accomodation</h3>
    <div>
    <p>Vila Best is a place with a favorable central location, elegantly combining 
	comfort and a calm atmosphere. We offer to our guests a comfortable stay in 
	spacious rooms. Vila Best has 4 air-conditioned apartments. They harmoniously blend the home-like cosiness and the comforts of a luxury hotel: satellite TV and movie catalogue, free Internet (wireless and cable), IDD telephone, in-room safe, individually controlled air-conditioning, soundproof windows.</p>
    </div>
		<table width="100%" cellspacing="3" cellpadding="3">
			<tr>
				<?php
					for($i = 0; $i < count($pics) / 1; $i++) {
						echo '<td align="center"><img src="';
						echo $pics[$i];
						echo '"width="140"></td>';
					}
				?>
			</tr>
		</table>

	</center>
			<hr>