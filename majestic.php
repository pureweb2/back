<!DOCTYPE html>
<html lang="en">
    <head>
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Ståle Refsnes">
	<meta charset="UTF-8">
	<meta content type="text/xml">
	<script type="text/javascript" src="http://partnerportal.mycitywaynow.com/js/jquery.min.js"></script>
	<script type="text/javascript">
		function get_data(command)
		{
			document.getElementById('wait').style.display = 'block';
			if(command == 'GetAnchorText')
			{
				//Website you want to scrape
				var url = 'http://enterprise.majesticseo.com/api_command?app_api_key=799542F044A9F0D43BF47A12250D7A5E&cmd=GetAnchorText&item=http://www.majesticseo.com&FilterAnchorText=majestic';
				//Send request to YahooAPI
				var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from xml where url="' + url + '"') + '&format=json&callback=?';
				
				$.getJSON(yql,function(data){  
					if(data.query.results){
						//Total numeber of records
						var rec = data.query.results.Result.DataTables.DataTable.RowsCount;
						
						//Fetch header info
						var HeadData = data.query.results.Result.DataTables.DataTable.Headers;

						//Spilt Header data into array
						$('#container').html('');
						$('#container').append('<br>'+HeadData+'<br>');
						var HeadData = HeadData.split('|');
						
						var inserted_rec = 0;
						//Fetch individual record and spilt it into arrays
						for(var i=0; i<rec; i++)
						{
							var RowData = data.query.results.Result.DataTables.DataTable.Row[i];
							$('#container').append('<br>'+RowData);
							var RowData = RowData.split('|');

							$.ajax({
									type : "POST",
									url  : "ajax.php",
									data : {HeadData:HeadData, RowData:RowData, Command:command},
									success: function(response){ 
										if(response == 'true')
										{
											inserted_rec = inserted_rec+1; 
										}
										else
										alert('Error, try later !');
										}
								});
						}
						document.getElementById('wait').style.display = 'none';
					}
				});
			}
			else if(command == 'GetBackLinkData')
			{
				var url = 'http://enterprise.majesticseo.com/api_command?app_api_key=799542F044A9F0D43BF47A12250D7A5E&cmd=GetBackLinkData&item=majesticseo.com&Count=10';
				//Send request to YahooAPI
				var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from xml where url="' + url + '"') + '&format=json&callback=?';
				
				$.getJSON(yql,function(data){  
					if(data.query.results){
						//Total numeber of records
						var rec = data.query.results.Result.DataTables.DataTable.RowsCount;
						
						//Fetch header info
						var HeadData = data.query.results.Result.DataTables.DataTable.Headers;

						//Spilt Header data into array
						$('#container').html('');
						$('#container').append('<br>'+HeadData+'<br>');
						var HeadData = HeadData.split('|');
						
						var inserted_rec = 0;
						//Fetch individual record and spilt it into arrays
						for(var i=0; i<rec; i++)
						{
							var RowData = data.query.results.Result.DataTables.DataTable.Row[i];
							$('#container').append('<br>'+RowData);
							var RowData = RowData.split('|');
							$.ajax({
								type : "POST",
								url  : "ajax.php",
								data : {HeadData:HeadData, RowData:RowData, Command:command},
								success: function(response){ 
									if(response == 'true')
									{
										inserted_rec = inserted_rec+1; 
									}
									else
									alert('Error, try later !');
									}
							});
						}
						document.getElementById('wait').style.display = 'none';
						//alert(inserted_rec + " out of " + rec + " inserted !");
					}
				});
			}
			else if(command == 'GetBackLinksHistory')
			{
				var url = 'http://enterprise.majesticseo.com/api_command?app_api_key=799542F044A9F0D43BF47A12250D7A5E&cmd=GetBackLinksHistory&item0=majesticseo.com';
				//Send request to YahooAPI
				var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from xml where url="' + url + '"') + '&format=json&callback=?';
				
				$.getJSON(yql,function(data){  
					if(data.query.results){
						//Total numeber of records
						var rec = data.query.results.Result.DataTables.DataTable[1].RowsCount;

						//Fetch header info
						var HeadData = data.query.results.Result.DataTables.DataTable[1].Headers;
						
						//Spilt Header data into array
						$('#container').html('');
						$('#container').append('<br>'+HeadData+'<br>');
						var HeadData = HeadData.split('|');

						var inserted_rec = 0;
						//Fetch individual record and spilt it into arrays
						for(var i=0; i<rec; i++)
						{
							var RowData = data.query.results.Result.DataTables.DataTable[1].Row[i];
							$('#container').append('<br>'+RowData);
							var RowData = RowData.split('|');
							
							$.ajax({
								type : "POST",
								url  : "ajax.php",
								data : {HeadData:HeadData, RowData:RowData, Command:command},
								success: function(response){ 
									if(response == 'true')
									{
										inserted_rec = inserted_rec+1; 
									}
									else
										var error = 'true';
									}
							});
						}
						document.getElementById('wait').style.display = 'none';
						//alert(inserted_rec + " out of " + rec + " inserted !");
						if(error == 'true'){ alert("Error, Try later !");}
					}
				});
			}
			else if(command == 'GetKeywordInfo')
			{
				var url = 'http://enterprise.majesticseo.com/api_command?app_api_key=799542F044A9F0D43BF47A12250D7A5E&cmd=GetKeywordInfo&item0=majestic%20seo&item1=google';
				//Send request to YahooAPI
				var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from xml where url="' + url + '"') + '&format=json&callback=?';
				
				$.getJSON(yql,function(data){  
					if(data.query.results){
						//Total numeber of records
						var rec = data.query.results.Result.DataTables.Count;
						
						//Fetch header info
						var HeadData = data.query.results.Result.DataTables.DataTable.Headers;
						
						//Spilt Header data into array
						$('#container').html('');
						$('#container').append('<br>'+HeadData+'<br>');
						var HeadData = HeadData.split('|');

						var inserted_rec = 0;
						//Fetch individual record and spilt it into arrays
						for(var i=0; i<=rec; i++)
						{
							var RowData = data.query.results.Result.DataTables.DataTable.Row[i];
							$('#container').append('<br>'+RowData);
							var RowData = RowData.split('|');
							
							$.ajax({
								type : "POST",
								url  : "ajax.php",
								data : {HeadData:HeadData, RowData:RowData, Command:command},
								success: function(response){ 
									if(response == 'true')
									{
										inserted_rec = inserted_rec+1; 
									}
									else
										var error = 'true';
									}
							});
						}
						document.getElementById('wait').style.display = 'none';
						//alert(inserted_rec + " out of " + rec + " inserted !");
						if(error == 'true'){ alert("Error, Try later !");}
					}
				});
			}
		else 
		{
			document.getElementById('wait').style.display = 'none';
			alert("Not a good selection, try some other command !");
		}
		}
	</script>
    
    </head>

    <body>
	<select onchange="get_data(this.value);">
	<option value="">							-- Select Command --		</option>
<!--<option value="AnalyseIndexItem">			AnalyseIndexItem			</option>-->
<!--<option value="DeleteDownloads">			DeleteDownloads				</option>-->
<!--<option value="DownloadBackLinks">			DownloadBackLinks			</option>-->
	<option value="GetAnchorText">				GetAnchorText				</option>
	<option value="GetBackLinkData">			GetBackLinkData				</option>
	<option value="GetBackLinksHistory">		GetBackLinksHistory			</option>
<!--<option value="GetDomainBackLinksHistory">	GetDomainBackLinksHistory	</option>-->
<!--<option value="GetDownloadsList">			GetDownloadsList			</option>-->
<!--<option value="GetHostedDomains">			GetHostedDomains			</option>-->
<!--<option value="GetIndexItemInfo">			GetIndexItemInfo			</option>-->
	<option value="GetKeywordInfo">				GetKeywordInfo				</option>
	<option value="GetLinkedDomains">			GetLinkedDomains			</option>
	<option value="GetLinkProfile">				GetLinkProfile				</option>
	<option value="GetNewLostBackLinks">		GetNewLostBackLinks			</option>
	<option value="GetNewLostBackLinkCalendar">	GetNewLostBackLinkCalendar	</option>
	<option value="GetRefDomains">				GetRefDomains				</option>
	<option value="GetRefDomainInfo">			GetRefDomainInfo			</option>
	<option value="GetSubscriptionInfo">		GetSubscriptionInfo			</option>
	<option value="GetTopBackLinks">			GetTopBackLinks				</option>
	<option value="GetTopPages">				GetTopPages					</option>
	</select>
	
	<br><br>
	<span id="wait" style="display:none"><img src="wait.gif" /></span>
	<div id="container">
		
	</div>
	
    </body>
</html>