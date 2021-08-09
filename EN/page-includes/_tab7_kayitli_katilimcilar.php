<div class="tab-content tab7"> <!-- START .tab-content -->

				<?php

        //----functions
        function tr_strtolower($text){
            $search=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
            $replace=array("ç","i","ı","ğ","ö","ş","ü");
            $text=str_replace($search,$replace,$text);
            $text=strtolower($text);
            return $text;
        }

function getparam($id, $table_name, $param){
	$query = mysql_query("SELECT ".$param." FROM ".$table_name." WHERE id = '".$id."'");

	if(mysql_num_rows($query)==0){
	$result='-';
	} else{
	$result=mysql_result($query, 0, $param);
	}

	return $result;
}
					$katilimci_liste_100k='';
					$katilimci_liste_60k='';
					$katilimci_liste_30k='';
					$katilimci_liste_15k='';

					$count_100k=0;
					$count_60k=0;
					$count_30k=0;
					$count_15k=0;


	//$select_cr=mysql_query("SELECT user_id, event_id, category_id, payment_status, MAX(id) FROM t2_competitor_events WHERE event_id='2' AND id>'24938' GROUP BY user_id ORDER BY payment_time ASC");

	$select_cr=mysql_query("SELECT id, user_id, event_id, category_id, payment_status
FROM t2_competitor_events
WHERE id IN (SELECT MAX(id) AS id
             FROM t2_competitor_events
             WHERE  event_id='21' AND id>'24941'
             GROUP BY user_id)
ORDER BY id");

	//$select_cr=mysql_query("SELECT user_id, event_id, category_id, payment_status FROM t2_competitor_events WHERE payment_status='1' AND event_id='2' AND id>'17940' ORDER BY payment_time ASC");



					$runners=array();
					while($row_cr=mysql_fetch_array($select_cr)){

						//getparam($id, $table_name, $param);
						$t2_id=$row_cr["id"];
						$name=getparam($row_cr["user_id"], "t1_competitor_details", "name");
						$surname=getparam($row_cr["user_id"], "t1_competitor_details", "surname");



						$birthdate=getparam($row_cr["user_id"], "t1_competitor_details", "birthdate");
						$gender=getparam($row_cr["user_id"], "t1_competitor_details", "gender");
						$name_surname=tr_strtolower($name.' '.$surname);
						$nationality=getparam($row_cr["user_id"], "t1_competitor_details", "nationality");

						$payment_status=$row_cr["payment_status"];
						if($payment_status==0){
							$payment_status_text='<span class="payment-not">Pending</span>';
						} else{
							$payment_status_text='<span class="payment-success">Confirmed</span>';
						}

						//---tasnif
						$birthDate = explode("/", $birthdate);
						  //get age from date or birthdate
						  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
							? ((date("Y") - $birthDate[2]) - 1)
							: (date("Y") - $birthDate[2]));


							if($age<35){
								$tasnif='35-';
							}
							if($age>=35 && $age<50){
								$tasnif='35-49';
							}
							if($age>49){
								$tasnif='50+';
							}


							if($birthDate[2]>=1985){
								$tasnif='35-';
							}
							if($birthDate[2]>=1970 && $birthDate[2]<=1984){
								$tasnif='35-49';
							}
							if($birthDate[2]<1969){
								$tasnif='50+';
							}
						//--tasnif


						if($gender==1){
							$cinsiyet='Woman';
						} else{
							$cinsiyet='Man';
						}

						$nationality_html=$nationality;

						if($nationality=='TUR' || $nationality=='TR' || $nationality==''){
							$nationality_html='<span class="flag-icon flag-icon-tr"></span>';
						}
						if($nationality=='RUS'){
							$nationality_html='<span class="flag-icon flag-icon-ru"></span>';
						}
						if($nationality=='UA'){
							$nationality_html='<span class="flag-icon flag-icon-ua"></span>';
						}
						if($nationality=='AZE'){
							$nationality_html='<span class="flag-icon flag-icon-az"></span>';
						}
						if($nationality=='MLT'){
							$nationality_html='<span class="flag-icon flag-icon-mt"></span>';
						}
						if($nationality=='JOR'){
							$nationality_html='<span class="flag-icon flag-icon-jo"></span>';
						}
						if($nationality=='TKS'){
							$nationality_html='<span class="flag-icon flag-icon-tc"></span>';
						}
						if($nationality=='UKR'){
							$nationality_html='<span class="flag-icon flag-icon-ua"></span>';
						}
						if($nationality=='POL'){
							$nationality_html='<span class="flag-icon flag-icon-pl"></span>';
						}
						if($nationality=='SUI'){
							$nationality_html='<span class="flag-icon flag-icon-CH"></span>';
						}
						if($nationality=='SRI'){
							$nationality_html='<span class="flag-icon flag-icon-lk"></span>';
						}
						if($nationality=='FRA'){
							$nationality_html='<span class="flag-icon flag-icon-fr"></span>';
						}
						if($nationality=='TJ'){
							$nationality_html='<span class="flag-icon flag-icon-tj"></span>';
						}
						if($nationality=='IRI'){
							$nationality_html='<span class="flag-icon flag-icon-ir"></span>';
						}
						if($nationality=='AZ'){
							$nationality_html='<span class="flag-icon flag-icon-az"></span>';
						}
						if($nationality=='IRQ'){
							$nationality_html='<span class="flag-icon flag-icon-iq"></span>';
						}
						if($nationality=='GB'){
							$nationality_html='<span class="flag-icon flag-icon-gb"></span>';
						}
						if($nationality=='USA'){
							$nationality_html='<span class="flag-icon flag-icon-us"></span>';
						}
						if($nationality=='GBR'){
							$nationality_html='<span class="flag-icon flag-icon-gb"></span>';
						}
						if($nationality=='NOR'){
							$nationality_html='<span class="flag-icon flag-icon-no"></span>';
						}
						if($nationality=='GER'){
							$nationality_html='<span class="flag-icon flag-icon-de"></span>';
						}
						if($nationality=='ITA'){
							$nationality_html='<span class="flag-icon flag-icon-it"></span>';
						}
						if($nationality=='xxxx'){
							$nationality_html='<span class="flag-icon flag-icon-xxx"></span>';
						}
						if($nationality=='xxxx'){
							$nationality_html='<span class="flag-icon flag-icon-xxx"></span>';
						}
						if($nationality=='xxxx'){
							$nationality_html='<span class="flag-icon flag-icon-xxx"></span>';
						}

						switch($row_cr["category_id"]){
							case "18449": //100K
								$katilimci_liste_100k.='
								<tr data-id="'.$t2_id.'">
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
									<td>'.$payment_status_text.'</td>
								</tr>';
								$count_100k++;
							break;
							case "18450": //37K
								$katilimci_liste_60k.='
								<tr data-id="'.$t2_id.'">
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
									<td>'.$payment_status_text.'</td>

								</tr>';
								$count_60k++;
							break;
							case "18451": //37K
								$katilimci_liste_30k.='
								<tr data-id="'.$t2_id.'">
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
									<td>'.$payment_status_text.'</td>

								</tr>';
								$count_30k++;
							break;
							case "18452": //21K
								$katilimci_liste_15k.='
								<tr data-id="'.$t2_id.'">
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
									<td>'.$payment_status_text.'</td>
								</tr>';
								$count_15k++;
							break;
						}
					}
					$toplam_count=$count_100k+$count_60k+$count_30k+$count_15k;

					$table_header='<table>
<tr>
	<td width="40%"><strong>Name Surname</strong></td>
	<td width="15%"><strong>Nationality</strong></td>
	<td width="15%"><strong>Gender</strong></td>
	<td width="30%"><strong>Classification</strong></td>
	<td width="30%"><strong>Reg. Status</strong></td>
</tr>';
					$table_footer='</table>';

				?>
					<h4 class="align-left"><strong>RUNNERS’ LIST</strong></h4>
					<span>(total: <?php echo $toplam_count; ?>)</span>

					<p>
					<strong>100K Participant List</strong> (<?php echo $count_100k; ?>)

					<?php echo $table_header.$katilimci_liste_100k.$table_footer; ?>
					<br /><br />
					<strong>60K Participant List</strong> (<?php echo $count_60k; ?>)
					<?php echo $table_header.$katilimci_liste_60k.$table_footer; ?>
					<br /><br />
					<strong>30K Participant List</strong> (<?php echo $count_30k; ?>)
					<?php echo $table_header.$katilimci_liste_30k.$table_footer; ?>
					<br /><br />
					<strong>15K Participant List</strong> (<?php echo $count_15k; ?>)
					<?php echo $table_header.$katilimci_liste_15k.$table_footer; ?>
					<br /><br />
					</p>


          </div> <!-- END .tab-content -->
