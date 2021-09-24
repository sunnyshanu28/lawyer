<?php include 'lock.php' ?>
<?php 

            $cinno=$_POST['cnr_no'];
            $court_id=$_POST['court_id'];
            $cinno=str_replace("-","",$cinno);
            $courtqry="SELECT * from court_master where court_id='$court_id' limit 1";
            $courtres=mysqli_query($con,$courtqry);
            $courtdata=mysqli_fetch_assoc($courtres);

            $court_code=$courtdata['court_code'];
            $state_code=$courtdata['state_code'];
            $dist_code=$courtdata['dist_code'];

            

            $url = 'https://services.ecourts.gov.in/ecourtindia_v4_bilingual/cases/o_civil_case_history.php';
            $data = array("court_code" => $court_code,  "state_code" => $state_code,  "dist_code" => $dist_code,  "cino" => $cinno);
            
            $data_string = json_encode($data);
            
            $ch = curl_init ($url);
       curl_setopt ($ch, CURLOPT_POST, true);
       curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec ($ch); 
	   
	  
       echo  $response;
	  
       
       curl_close($ch);
                
   ?>     