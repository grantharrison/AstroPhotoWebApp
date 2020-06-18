function getPictureInfo() {
			var xmlHttp = new XMLHttpRequest();
		
			xmlHttp.onload = function() {
				if (xmlHttp.status == 200) {
					var xmlDoc = xmlHttp.responseXML;
				
					var output = '';
                    
                    var assignment = xmlDoc.getElementsByTagName('picInfo');
                    
					console.dir(assignment); 
				
					for (i = 0; i < assignment.length; i++) {
						output += assignment[i].childNodes[0].nodeValue + "<br>";
					}
            
					var divObj = document.getElementById('displayBox');

                    divObj.innerHTML = output;
				}
			}
            
            document.getElementById('displayBox').innerHTML = "Loading...";
		
			xmlHttp.open("GET", "http://ec2-18-224-95-131.us-east-2.compute.amazonaws.com/FinalProject/pictureInfo.xml", true);
			xmlHttp.send();
		}