<?php

 if (isset($_GET['EventCodes'])) {
 	
	$EventCodes=$_GET['EventCodes'];
	
	 }   
	 
	// $EventCodes = "RS6215-1911464";
	 
	 
	 $Main_URL="https://corporate.rasiseeds.com/corporate/FarmerRegisteration/farmer_register.php?Eventcode=".$EventCodes;
	 //$Main_URL="https://corporate.rasiseeds.com/corporate/FarmerRegisteration/farmer_register.php?Eventcode=".$EventCodes";

	
	
	
	
  
 


?>
<!DOCTYPE html>
<html>
	<head>
	
	
	 <script src="jquery.min.js" type="text/javascript"></script>
	  <script src="qr-code-styling.js" type="text/javascript"></script>
	  
	
	<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}


.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

canvas {
  width: 40vh;
  height: 80vh;
}
</style>
	
	  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
		<link rel="stylesheet" href="index.css" />
		<link
			rel="stylesheet"
			href="w3.css"
		/>
		<link
			rel="stylesheet"
			href="font-awesome.min.css"
		/>
		<link rel="icon" href="./images/rasi_vijay.png" />
		
		
		
	</head>

	<title>EVETN QR</title>
	<body>
		
			<div class="row" >
			
			
         <div class="col-3">

		<div style="display: none" >

			<label>URL*:</label>
			<input class="w3-input" id="text" type="text"  value="<?php echo $Main_URL; ?>" />
			</div>
			</br>	

			<div class="center" >
			
		    <div id="canvas" ></div></br>
			
			

			<div class="center"  style="display: none" >
		     <button class="btn"   id ="download_btn" name ="download_btn" onclick="qr_downlaod()"><i class="fa fa-download" ></i> DOWNLAOD</button><BR><BR>
			
			</div>	
			</div>

			

	
		</div>

		
		</div>
		
	<a id="link" ></a>
	
	
		<div id="qr_section_div" style="display:block;width: 32%;position: absolute;">
				
				<br>
				

				<div style="text-align:center;">
					<!-- <img src="" id="qr_section_img"> -->

					<div id="qr_section_img_str"></div>
				</div>
				<br>
				<br>

				<div style="text-align:center;">
					<label for="event" style="border: 3px solid blue;padding: 12px;font-size: 20px;">Event No : <?php echo $EventCodes; ?></label></br>
				</div>
				<br>
				<br>

		</div>


			<div class="center"  style="display: none" >
			<button
					class="w3-button w3-white w3-border w3-border-blue btn" id ="download_btn" name ="download_btn"
					style="margin: 0 auto;font-size: 30px;color: white !important;background-color: blue !important; "
					onclick="hdownload()"
				>
					Download
				</button>

			</div>
		
		
		
		
	</body>
	
	
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

 

<script type="text/javascript">

  // Grab url input
  elementText = document.getElementById("text");
  url = elementText.value;



    const qrCode = new QRCodeStyling({
        width: 300,
		 		height: 300,
        type: "svg",
        data: url,
        image: "rasi_final_logo.png",
        dotsOptions: {
            color: "black",
            type: "dots",
		    
        },
        backgroundOptions: {
            color: "white",
			
        },
		
		imageOptions: {
            crossOrigin: "anonymous",
            margin: 1,
						imageSize:1.2
        },
		
        qrOptions: {            
            errorCorrectionLevel: 'L',
			
        },
		
		  cornersSquareOptions: {
      type: "extra-rounded",
      gradient: {
        type: "linear",
        rotation: Math.PI / 2,
        colorStops: [{
          offset: 1,
          color: 'green'
        }, {
          offset: 1,
          color: 'green'
        }]
      },
    },
	
	cornersDotOptions: {
      type: "extra-rounded",
      gradient: {
        type: "linear",
        rotation: Math.PI / 2,
        colorStops: [{
          offset: 1,
          color: 'green'
        }, {
          offset: 1,
          color: 'green'
        }]
      },
    },
    });

    qrCode.append(document.getElementById("qr_section_img_str"));

</script>

<script>

window.onload=function(){
	
 
  
  document.getElementById("download_btn").click();
   hdownload();
 
};


function hdownload()
{
	  const file_path ="<?php echo $EventCodes; ?>";
	
	if (!canvas) {
    alert("Error: no QR code to download");
    return;
  }


		html2canvas($("#qr_section_div")[0],{
	   scale: 5,  // Increase scale for better quality
 			allowTaint: true,
 			useCORS:true
    }).then(canvas => {
			  var ctx = canvas.getContext('2d');
			
				var canvasWidth = canvas.width;
    		var canvasHeight = canvas.height;

		    var img = new Image();
		   	img.src = 'rasi_final_logo.png'; // Your logo image
		    img.onload = function() {
		    		console.log(canvasWidth);
		        // Draw the image onto the canvas at the specific position
		        if(canvasWidth <= 1570) {
		        	//for mobile and tablet
		        	ctx.drawImage(img, 125, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 1640 && canvasWidth < 1760){
		        	//for small screen laptop
		        	ctx.drawImage(img, 130, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 1760 && canvasWidth < 1920){
		        	//for small screen laptop
		        	ctx.drawImage(img, 145, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 1920 && canvasWidth < 2165){
		        	//for small screen laptop
		        	ctx.drawImage(img, 160, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 2165 && canvasWidth < 2305){
		        	//for small screen laptop
		        	ctx.drawImage(img, 183, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 2305 && canvasWidth < 2460){
		        	//for medium screen laptop
		        	ctx.drawImage(img, 200, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 2460 && canvasWidth < 4100){
		        	//for large screen laptop
		        	ctx.drawImage(img, 215, 225, 63, 56); // Adjust the position and size as needed
		        } else if(canvasWidth >= 4100){
		        	//for large screen laptop
		        	ctx.drawImage(img, 375, 225, 63, 56); // Adjust the position and size as needed
		        } 

		        // Convert the canvas to an image
		        var imageData = canvas.toDataURL('image/png');
		        var link = document.createElement('a');
		        link.href = imageData;
		        link.download = 'qr_section_image.png';
		        link.click();
		    };
      	
     });

}
</script>


