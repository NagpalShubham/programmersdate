<?php
include('distance.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
			#header{
						background-image: url('https://www.getthatright.com/wp-content/uploads/2017/09/List-of-Top-10-Best-Hospitals-in-India.jpg');
						background-repeat: no-repeat;
						background-size: cover;
                        background-size: 100% 100%;
                        height: 50%;
                        padding-top: 20%;
                        padding-bottom: 10%;
                        text-align: center;
                        color: white;
		</style>
		    <style>
		    	     .note{
              padding-top: 5%;
                    
                    }
			}
		    </style>
	<title>Hospitals</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/87c01c2f4d.js" crossorigin="anonymous"></script> 
	
</head>
<body>
<div id ="header">
  <h1 class="display-2"><strong>Hospitals</h1></strong>
</div>



	<!--1-->
  
<div class="card">
  <h4 class="card-header">AIIMS, All Indian Institute of Medical Sciences, Delhi</h4>
  
  <div class="card-body">
    <p class="card-text">All India Institute of Medical Sciences (AIIMS) IN New Delhi has reinforced its position as one of the best hospitals in India, on account of having the best doctors, along with excellent infrastructural and research facilities for various diseases. The institute, which was established in 1956, is also a leading training institute for medical students.</p>
    <div class="row">
    	<div class="col-lg-6 note">
    		<p><i class="fas fa-map-marker-alt fas-xs  "></i><strong>  Address:</strong>  Ansari Nagar, New Delhi, Delhi 110029<br>
              <i class="fas fa-phone-alt fas-xs"></i> <strong> Phone:</strong> 011 2658 8500<br>
              <strong>  Website :</strong><a href="http://www.aiims.edu" > http://www.aiims.edu/</a> 
              <h3> distance = <?php echo $total_distance[0]; ?> km  <h3>
              <h3> beds available = <?php echo $total_beds[0]; ?>   <h3>
    	</div>
    	<div class="col-lg-6">
    		<img src="https://bel-india.com/wp-content/uploads/2019/07/AIIMS-Top-Hospital-in-India.jpg">
    	</div>
    </div>
    <a href="http://localhost/bedcheckerfinal/billindex.php/" class="btn btn-primary">Book Bed</a>
    <a href="https://www.google.com/maps/dir/23.3773263,85.2815392/All+India+Institute+Of+Medical+Sciences,+New+Delhi,+Sri+Aurobindo+Marg,+Ansari+Nagar,+Ansari+Nagar+East,+New+Delhi,+Delhi+110029/@25.9094083,76.8735573,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390ce26f903969d7:0x8367180c6de2ecc2!2m2!1d77.2100451!2d28.5671773" class="btn btn-primary">Direction</a>
    <a href="https://www.google.com/maps/place/All+India+Institute+Of+Medical+Sciences,+New+Delhi/@28.5671773,77.2078564,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0x8367180c6de2ecc2!8m2!3d28.5671774!4d77.2100456!9m1!1b1" class="btn btn-danger">Reviews</a>

  </div>
</div>
<br><br><br>
<!--2-->
<div class="card">
  <h4 class="card-header">Aakash Healthcare Super Speciality Hosptial, Dwarka, New Delhi</h4>
  <div class="card-body">
    <p class="card-text">Aakash Healthcare is the healthcare vertical of Aakash Education Services Pvt Ltd (Aakash Institutes) the leading educational brand in India lead by Mr J C Chaudhry, Chairman- Aakash Education Services Pvt Ltd. Aakash Healthcare Private Limited is a Super Specialty Hospital, with state-of-the-art infrastructure, path breaking technology, offering unrivalled healthcare services. Dr Aashish Chaudhry, the founder and Managing Director of Aakash Healthcare Private Limited, aims to make AHPL the most preferred healthcare brand & a chain, by providing compassionate and world class healthcare services, with a talented team of doctors, and ultra-modern technology. AHPL, is a comprehensive bouquet of clinical programs and covers more than 40 super-specialities and 8 Centres of Excellence that brings together over 150 doctors, over 700 nurses and paramedics.</p>
    <div class="row">
    	<div class="col-lg-6 note">
    		<p><i class="fas fa-map-marker-alt fas-xs  "></i><strong> Address: </strong>Road NO 201 Sector 3 DwarkaIndia,Delhi India<br>
              <i class="fas fa-phone-alt fas-xs"></i> <strong> Phone:</strong> 0416-2281000,3070000<br>
            <strong>  Website: </strong> <a href="http://www.aakashhealthcare.com">www.aakashhealthcare.com </a></p>
            <h3> distance = <?php echo round($total_distance[1]); ?> km  <h3>
            <h3> beds available = <?php echo $total_beds[1]; ?> 
          </div>
    	<div class="col-lg-6">
    		<img src="http://www.indiahealthcaretourism.com/thumbnail.php?file=hospitals/Aakash-Healthcare-05-12.jpg&width=473&height=278">
    	</div>
    </div>
    <a href="#" class="btn btn-primary">Book Bed</a>
    <a href="https://www.google.com/maps/dir/23.3773263,85.2815392/google+reviews+about+Aakash+Healthcare+Super+Speciality+Hospital,+Dwarka,+New+Delhi/@25.9218137,76.8100804,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390d053340000001:0x4611150c2d27d1fc!2m2!1d77.0533869!2d28.6052594" class="btn btn-primary">Direction</a>
    <a href="https://www.google.com/maps/place/Aakash+Healthcare:+Super+Speciality+Hospital+-Dwarka/@28.6052594,77.0511928,17z/data=!3m1!4b1!4m7!3m6!1s0x390d053340000001:0x4611150c2d27d1fc!8m2!3d28.6052594!4d77.0533869!9m1!1b1"class="btn btn-danger">Reviews</a>

  </div>
</div>
<br><br><br>
<!--3-->
<div class="card">
  <h4 class="card-header">Sir Ganga Ram Hospital,New Delhi</h4>
  <div class="card-body">
  
    <p class="card-text">This is a 675-bed multi-specialty hospital located in New Delhi. The Minimal Access Surgery Department of the hospital is the first of its kind in South Asia. The hospital reserves its 20% beds for financially weaker patients and 40% of its OPD patients are treated free of cost.</p>
    <div class="row">
    	<div class="col-lg-6 note">
    		<p><i class="fas fa-map-marker-alt fas-xs  "></i><strong> Address:</strong> Rajinder Nagar, New Delhi, Delhi 110060<br>
              <i class="fas fa-phone-alt fas-xs"></i><strong> Phone: </strong>011 2575 0000<br>
              <strong> Website: </strong><a href="http://www.sgrh.com/"> http://www.sgrh.com/</a></p>
              <h3> distance = <?php echo round($total_distance[2]); ?> km  <h3>    	
              <h3> beds available = <?php echo $total_beds[2]; ?>   
            </div>
    	<div class="col-lg-6">
    		<img src="https://bel-india.com/wp-content/uploads/2019/07/Sir-Ganga-Ram-Hospital.jpg">
    	</div>
    </div>
    <a href="#" class="btn btn-primary">Book Bed</a>
    <a href="https://www.google.com/maps/dir/23.3773263,85.2815392/Sir+Ganga+Ram+Hospital,+Sarhadi+Gandhi+Marg,+near+Bal+Bharati+Public+School,+Old+Rajinder+Nagar,+Rajinder+Nagar,+New+Delhi,+Delhi+110060/@25.941271,76.8640228,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390d02a17c4ab835:0xecd838535c0fa0f6!2m2!1d77.1897435!2d28.6385337" class="btn btn-primary">Direction</a>
    <a href="https://www.google.com/maps/place/Sir+Ganga+Ram+Hospital/@28.6385337,77.1875494,17z/data=!3m1!4b1!4m7!3m6!1s0x390d02a17c4ab835:0xecd838535c0fa0f6!8m2!3d28.6385337!4d77.1897435!9m1!1b1" class="btn btn-danger">Reviews</a>



  </div>
</div>
<br><br><br>
<!--4-->
<div class="card">
  <h4 class="card-header">Batra Hospital & Medical Research Centre, New Delhi</h4>
  <div class="card-body">
    <p class="card-text">Batra hospital & Medical Research Centre established in 1987 by Ch. Aishi Ram Batra Public Charitable Trust with an infrastructure comprising of 495 beds, 14 Operation Theatres, 112 ICU Beds, 24x7 Emergency facilities, full range of state-of-the-art diagnostic laboratories and a comprehensive rehabilitation facilities. Batra Hospital is the capital’s first multi-specialty private hospital of Delhi. Our aim has always been to bring world-class medical care within the reach of common man.</</p>
    	  <div class="row">
    	<div class="col-lg-6 note">
    		<p><i class="fas fa-map-marker-alt"></i><strong> Address: </strong> Tughlakabad Institutional Area, Vayusenabad, New Delhi<br>
                <i class="fas fa-phone-alt fas-xs"></i><strong> Phone:</strong>9990926302 <br>
               <strong>Website: </strong><a href="http://www.batrahospitaldelhi.org/"> www.batrahospitaldelhi.org</a></p>
               <h3> distance = <?php echo round($total_distance[3]); ?> km  <h3>    	
               <h3> beds available = <?php echo $total_beds[3]; ?> 
              </div>
    	<div class="col-lg-6">
<img src="http://www.indiahealthcaretourism.com/thumbnail.php?file=hospitals/banner/Batra-Hospital-04-12.jpg&width=979&height=278">    	
</div>
   </div>
  <a href="#" class="btn btn-primary">Book Bed</a>
    <a href="https://www.google.com/maps/dir/23.3773263,85.2815392/Batra+Hospital+%26+Medical+Research+Centre,+1,+Mehrauli+-+Badarpur+Rd,+Tughlakabad+Institutional+Area,+Vayusenabad,+New+Delhi,+Delhi+110062/@25.8959642,76.8924029,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390ce17498536571:0x3f5d6c5cdcac9bfd!2m2!1d77.2457897!2d28.5130972" class="btn btn-primary">Direction</a>
    <a href="https://www.google.com/maps/place/Batra+Hospital+%26+Medical+Research+Centre/@28.5130972,77.2435956,17z/data=!3m1!4b1!4m7!3m6!1s0x390ce17498536571:0x3f5d6c5cdcac9bfd!8m2!3d28.5130972!4d77.2457897!9m1!1b1"class="btn btn-danger">Reviews</a>
</div>
</div>
<br><br><br>
<!--5-->
<div class="card">
  <h4 class="card-header">BLK Super Speciality Hospital,Delhi</h4>
  <div class="card-body">
    <p class="card-text">BLK Super Specialty Hospital is one of the largest tertiary care private hospitals in the country. Spread over five acres of land, the 650 beds Hospital is being managed by Radiant Life Care Private Limited which aims at facilitating the ongoing pursuit of excellence at the Hospital by assisting and bringing-in not only the best clinical and non-clinical talent but also the ultra-modern equipment and technology enabling delivery of the highest standards of healthcare in our country</p>
  <div class="row">
    	<div class="col-lg-6 note">
    		<p><i class="fas fa-map-marker-alt"></i><strong> Address: </strong>Pusa Road,Delhi-110005<br>
<i class="fas fa-phone-alt fas-xs"></i><strong> Phone:</strong> Phone:  +91-11-30653122<br>
<strong> Website: </strong><a href="http://www.blkhospital.com">http://www.blkhospital.com</a> </p>
<h3> distance = <?php echo round($total_distance[4]); ?> km  <h3>
<h3> beds available = <?php echo $total_beds[4]; ?> 
      </div>
    	<div class="col-lg-6">
    		<img src="http://www.indiahealthcaretourism.com/thumbnail.php?file=hospitals/banner/hosp_24.jpg&width=979&height=278">
    </div>
</div>
    <a href="#" class="btn btn-primary">Book Bed</a>
    <a href="https://www.google.com/maps/dir/23.3773263,85.2815392/BLK+Super+Speciality+Hospital,+Pusa+Road,+Prasad+Nagar,+Rajendra+Place,+New+Delhi,+Delhi/@25.941271,76.8593744,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390d029633b6af21:0x9a67323b63bcc188!2m2!1d77.1797051!2d28.6433034" class="btn btn-primary">Direction</a>
    <a href="https://www.google.com/maps/place/BLK+Hospital/@28.6433034,77.177511,17z/data=!4m7!3m6!1s0x390d029633b6af21:0x9a67323b63bcc188!8m2!3d28.6433034!4d77.1797051!9m1!1b1" class="btn btn-danger">Reviews</a>
</div>
</div>
</body>
</html>