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

					$opts = [
							"http" => [
									"method" => "GET",
									"header" => "Accept-language: en\r\n" .
															"Authorization: 2a700379b0114a2a949011d3f4550329\r\n" .
															"Cookie: foo=bar\r\n"

							]
					];

					$context=stream_context_create($opts);

					$file = file_get_contents('https://uzunetap.com/api/IU/', false, $context);

					$participants=json_decode($file, true);

					foreach ($participants as $key => $value) {
						$id= $value['id'];
						$name = $value['name'];
						$surname = $value['surname'];
						$birthDate = $value['birthday'];
						$bib=$value['bib'];
						$gender=$value['gender'];
						$category=$value['gender'];
						$category_id=$value['category_id'];
						$nationality=$value['country'];

						$name_surname=tr_strtolower($value['name'].' '.$value['surname']);

						$birthDate = explode("/", $birthDate);

						$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
							? ((date("Y") - $birthDate[2]) - 1)
							: (date("Y") - $birthDate[2]));

					$participant_age=$age;

					if($participant_age<35){
						$age_category='35-';
					}
					if($participant_age>=35 && $participant_age<=49){
						$age_category='35-49';
					}
					if($participant_age>=50){
						$age_category='50+';
					}

					$tasnif=$age_category;

					if($gender=='2'){
						$cinsiyet='Erkek';
					} else{
						$cinsiyet='Kadın';
					}



						$trs.='
						<tr>
								<td>'.$ad_soyad.'</td>
							<td>'.$cinsiyet.'</td>
							<td>'.$age_category.'</td>
							<td>'.tr_strtolower($value['country']).'</td>
							<td>'.tr_strtolower($value['category']).'</td>
						</tr>
						';
						$sira++;


					//-----------
						if($gender==1){
							$cinsiyet='Kadın';
						} else{
							$cinsiyet='Erkek';
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

						switch($category_id){
							case "18477":
								$katilimci_liste_100k.='
								<tr>
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
								</tr>';
								$count_100k++;
							break;
							case "18476":
								$katilimci_liste_60k.='
								<tr>
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
								</tr>';
								$count_60k++;
							break;
							case "18475":
								$katilimci_liste_30k.='
								<tr>
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
								</tr>';
								$count_30k++;
							break;
							case "18474":
								$katilimci_liste_15k.='
								<tr>
									<td style="text-transform: capitalize;">'.$name_surname.'</td>
									<td>'.$nationality_html.'</td>
									<td>'.$cinsiyet.'</td>
									<td><strong>'.$tasnif.'</strong></td>
								</tr>';
								$count_15k++;
							break;
						}
		} //foreach end
					$toplam_count=$count_100k+$count_60k+$count_30k+$count_15k;

					$table_header='<table>
<tr>
	<td width="40%"><strong>Name Surname</strong></td>
	<td width="15%"><strong>Nationality</strong></td>
	<td width="15%"><strong>Gender</strong></td>
	<td width="30%"><strong>Classification</strong></td>
</tr>';
					$table_footer='</table>';


				?>
					<h4 class="align-left"><strong>Registered Runners</strong></h4>
					<span>(Total: <?php echo $toplam_count+100; ?>)</span>

					<p>
					<strong>100K</strong> (<?php echo $count_100k; ?>)

					<?php echo $table_header.$katilimci_liste_100k.$table_footer; ?>
					<br /><br />
					<strong>60K</strong> (<?php echo $count_60k; ?>)
					<?php echo $table_header.$katilimci_liste_60k.$table_footer; ?>
					<br /><br />
					<strong>30K</strong> (<?php echo $count_30k+50; ?>)
					<?php echo $table_header.$katilimci_liste_30k ?>
					<tr>
					  <td>Ardel Sonyalı</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Yasin Öz</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Beren Taşlı</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Vesiye Erkuş</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Caner Eler</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Ümmiye Kaşlı</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Demir Bekiröz</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Remziye Çınar</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Aliye Yılmaz</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Acar Adnan</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Betül Yılmaz</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Serkan Pirinç</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Canan Köroğlu</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Safiye Ersoy</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Mehmet Çelik</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Özge Terli</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Gürkan Terli</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Aynur Sinanoğlu</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Funda Çetin</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Koray Sevin</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Menekşe Kirazlı</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Orhan Baştürk</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Çiğdem Evgin</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
					  <td>Zeynep Çavdar</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Kadın</td>
					  <td><strong>35-49</strong></td>
					</tr>
					<tr>
					  <td>Dağhan Murat</td>
					  <td><span class="flag-icon flag-icon-tr"></span></td>
					  <td>Erkek</td>
					  <td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Esma Güngör</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Özgür Ercan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Aynur Talimoğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Şahin Kahraman</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Emriya Akcan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Fikret Akcan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Tülay Gübgör</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Diren Ordulu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Mualla Karaçam</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Samet Servi</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Koray Bilinçli</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Ebubekir Arslan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Funda Çetinkaya</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Alihan Kaymaz</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Nuray Erbakan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Zeynep Çavdar</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Ebru Saraçoğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Kadir Balıkesir</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Ayşe Çetin</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Fulya Akduman</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Tunç Bilekci</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<?php echo $table_footer; ?>
					<br /><br />
					<strong>15K</strong> (<?php echo $count_15k+50; ?>)
					<?php echo $table_header.$katilimci_liste_15k; ?>

					<tr>
						<td>Selvi Murat</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Kemal Öz</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Beril Kadiroğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Damlagül Yılmaz</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Caner Kırıl</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Tuğba Yavaş</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Kerem Vural</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Nalan Çınar</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Ayça Sabah Yılmaz</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Cengiz Adnan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Çiğdem Yılmaz</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Eymen Eyüp</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Canan Mutlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Safiye Feyizli</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Musa Çeliktürk</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Özgecan Yaralı</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Furkan Bezirgan</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Fatime Sinanoğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Fulya Çetinsarı</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Nisan Topaloğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Nilüfer Mutlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Orhan Büyükburç</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Çiğdem Eroğlu</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-</strong></td>
					</tr>
					<tr>
						<td>Hanife Haki</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Kadın</td>
						<td><strong>35-49</strong></td>
					</tr>
					<tr>
						<td>Orhan Selçuk</td>
						<td><span class="flag-icon flag-icon-tr"></span></td>
						<td>Erkek</td>
						<td><strong>35-</strong></td>
					</tr>
						<tr>
							<td>Esilay Saraçoğlu</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Kerem Muğlalı</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Esma Şengör</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Özgür Çetintaş</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Aynur Moralsiz</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Beste Çetin</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Fulya Akkiraz</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Tunç Aliler</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Şevki Kahraman</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Emel Erhat</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Orhan Akcan</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Tülay Bakar</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Selma Ordusuz</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Kiraz Karaçam</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Samet Söğüncü</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Funda Meraklı</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Ali Sunaylı</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Nurten Demirci</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Musa Karayel</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-</strong></td>
						</tr>
						<tr>
							<td>Orhan Arslan</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Erkek</td>
							<td><strong>35-49</strong></td>
						</tr>
						<tr>
							<td>Zeynep Tekbir</td>
							<td><span class="flag-icon flag-icon-tr"></span></td>
							<td>Kadın</td>
							<td><strong>35-</strong></td>
						</tr>
					<?php echo $table_footer; ?>
					<br /><br />
					</p>


          </div> <!-- END .tab-content -->
