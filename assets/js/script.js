/*function formSubmit(){

	
	var form = document.getElementById('#formUser').reset();
	return false;
*/
$(document).ready(function(){
	
	$("#btnAddUser").click(function(){
		
		var name = $("#name").val();
		var surname = $("#surname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var IDno = $("#IDno").val();
		var role = $("#role").val();
		//var date = date('Y');
		
		
		if(name !="" && surname !="" && email !="" && role != "" && phone != "" && IDno != "")
		{
			
			 $.ajax({

				url:"addUser_process.php",
				type:"post",
				data:{name:name, surname:surname, email:email, role:role, phone:phone, IDno:IDno},
				dataType:'html',
				success:function(response)
				{
					console.log(response);
					
						$.alert({
                        title: 'Success',
						content: 'Successfully Added a User',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-green'
                                }
                        }
                    });
					$("#formUser")[0].reset(); 
				}
			 });
			 
		} 
		else
		{
					//alert('Nooooo')
			
			$.alert({
                        title: 'Alert alert!',
						content: 'All fields are required',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-red'
                                }
                        }
                    });
					
		}
		
		
		
	});
	
	


	


//Update Assets
	/*$("#UpdateAsset").click(function(){
		
		var assetName = $("#assetName").val();
		var accDepreciation = $("#accDepreciation").val();
		var accImpairments = $("#accImpairments").val();
		var condAssessment = $("#condAssessment").val();
		var cost = $("#cost").val();
		var description = $("#description").val();
		var assetHierarchy = $("#assetHierarchy").val();
		var usefulLife = $("#usefulLife").val();
		var valuationInfo = $("#valuationInfo").val();
		var carryingValue = $("#carryingValue").val();
		var AssetID = $("#AssetID").val();
		
		if(assetName!= '', accDepreciation !="" && accImpairments !="" && condAssessment !="" && cost != "")
		{
			
			 $.ajax({

				url:"updateProcess.php",
				type:"post",
				data:{assetName:assetName, accDepreciation:accDepreciation, accImpairments:accImpairments, condAssessment:condAssessment, cost:cost,
					description:description, assetHierarchy:assetHierarchy, usefulLife:usefulLife, valuationInfo:valuationInfo, carryingValue:carryingValue, AssetID:AssetID},
				dataType:'html',
				success:function(response)
				{
					console.log(response);
					
						$.alert({
                        title: 'Success',
						content: 'Successfully Updated Asset Info',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-blue'
                                }
                        }
                    });
				}
			 });
			 
		} 
		else
		{
					//alert('Nooooo')
			$.alert({
                        title: 'Alert alert!',
						content: 'All fields are required',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-blue'
                                }
                        }
                    });
					
		}	
	
	
	
	});*/
	
	
	
	//Update User
	$("#btnEdit").click(function(){
		
		var name = $("#name").val();
		var surname = $("#surname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var role = $("#role").val();
		var userID = $("#userID").val();
		var activate = $("#activate").val();
		//var activ = $("#activate").val();
		
		/*const active = document.getElementById('activate');
		if(active.checked == true){
			var act = 1;
		}else{
			act = 0;
		}*/
		

		if(name !="" && surname !="" && email !="" && role != "" && phone != "")
		{
			
			$.ajax({

				url:"updateProcess.php",
				type:"post",
				data:{name:name, surname:surname, email:email, role:role, userID:userID, phone:phone},
				dataType:'html',
				success:function(response)
				{
					console.log(response);
					
						$.alert({
                        title: 'Success',
						content: 'Successfully Updated an Asset',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-green'
                                }
                        }
                    });
					
				}
			 });
			 
		} 
		else
		{
					//alert('Nooooo')
			
			$.alert({
                        title: 'Alert alert!',
						content: 'All fields are required',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-red'
                                }
                        }
                    });
					
		}
		
		
		
	});
	
	
	
	
	//btnUpdtMyProfile User
	$("#btnUpdtMyProfile").click(function(){
		//alert('Ajax');
		var name = $("#name").val();
		var surname = $("#surname").val();
		var email = $("#email").val();
		var profileID = $("#profileID").val();
		var phone = $("#phone").val();
		
		if(name !="" && surname !="" && email !="" )
		{
			
			 $.ajax({
				 
				url:"updateProfileProcess.php",
				type:"post",
				data:{name:name, surname:surname, email:email, profileID:profileID, phone:phone},
				dataType:'html',
				success:function(response)
				{
					console.log(response);
					
						$.alert({
                        title: 'Success',
						content: 'Successfully Updated Your Profile',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-green'
                                }
                        }
                    });
					
				}
			 });
			 
		} 
		else
		{
					//alert('Nooooo')
			
			$.alert({
                        title: 'Alert alert!',
						content: 'Unable to update profile',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-blue'
                                }
                        }
                    });
					
		}
		
		
		
	}); 
	
	//Delete Assets
	$('#example').on('click','tr .delete_btn',function(){
			var id = $(this).attr('id');
			
			var result = confirm("Are you sure you want to delete Asset?");
		
			if(result)
			{
				$(this).closest('tr').fadeOut(3000);
				jQuery.ajax({
					type: "POST",
					url:"deleteAsset_process.php",
					data: {id:id},
					dataType: 'json',
					success: function(response)
					{
						//console.log(response);
						alert("Asset Removed");
					}
				})
			}else
			{
				return false;
			}
	});
	
	
	
	//Delete User
	$('#example').on('click','tr .deleteUser_btn',function(){
			var id = $(this).attr('id');
			
			var result = confirm("Are you sure you want to delete User?");
		
			if(result)
			{
				$(this).closest('tr').fadeOut(3000);
				jQuery.ajax({
					type: "POST",
					url:"deleteUser_process.php",
					data: {id:id},
					dataType: 'json',
					success: function(response)
					{
						//console.log(response);
						alert("User Removed");
					}
				})
			}else
			{
				return false;
			}
	});
	
	
	
	//Activate New Users
	$('#example').on('click','tr .btnActivate',function(){
			var id = $(this).attr('id');
		
			var result = confirm("Activate This User");
		
			if(result)
			{
				$(this).closest('tr').fadeOut(3000);
				jQuery.ajax({
					type: "POST",
					url:"activateProcess.php",
					data: {id:id},
					dataType: 'html',
					success: function(response)
					{
						console.log(response);
						alert("User Activated");
					}
				})
			}else
			{
				return false;
			}
	});
	
	
	
	
	
	
	
});


$(document).ready(function() {	
	
    var table = $('#example').DataTable( {
        "scrollY": "300px",
        "paging": false,
		
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
			'print'
        ]


	
    } );
 
    $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
} );




	
	//Add Assets
	$(document).ready(function (e) {
	$("#formAsset").on('submit',(function(e) {
		e.preventDefault();
				
		if(accDepreciation !="" && accImpairments !="" && condAssessment !="" && cost != "")
		{
			
	
			 $.ajax({

				url:"asset_process.php",
				type:"POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success:function(data)
				{
					console.log(data);
					
							//$("#preview").html(data).fadeIn();
							alert("Successfully Added The Asset")
							/*$.alert({
								title: 'Alert alert!',
								content: 'Successfuly Added an Asset',
								icon: 'fa fa-rocket',
								animation: 'scale',
								closeAnimation: 'scale',
								buttons: {
									okay: {
										text: 'Okay',
										btnClass: 'btn-blue'
										}
								}
							});*/
							$("#formAsset")[0].reset(); 
						
				}   
				
				
				
			 });
			

			
		} 
		else
		{
					//alert('Nooooo')
			
			$.alert({
                        title: 'Alert alert!',
						content: 'All Fields are required ',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-blue'
                                }
                        }
                    });
					
		}
		

	}));
	
});




//Update Assets
	$(document).ready(function (e) {
	$("#UpdateAssetForm").on('submit',(function(e) {
		e.preventDefault();
				
		if(accDepreciation !="" && accImpairments !="" && condAssessment !="" && cost != "")
		{
		
			 $.ajax({

				url:"updateProcess.php",
				type:"POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success:function(data)
				{
					console.log(data);
					
						if(data=='invalid'){
						 $("#err").html("Invalid File !").fadeIn();
						
					
						}else{
							//$("#preview").html(data).fadeIn();
							
							//$("#UpdateAssetForm")[0].reset(); 
							alert('Successfuly Updated the Asset');
							document.location.reload(true);
						}
					
					
				}   
				
				
				
			 });
			

			
		} 
		else
		{
					//alert('Nooooo')
			
			$.alert({
                        title: 'Alert alert!',
						content: 'All fields are required',
                        icon: 'fa fa-rocket',
                        animation: 'scale',
                        closeAnimation: 'scale',
                        buttons: {
                            okay: {
                                text: 'Okay',
                                btnClass: 'btn-blue'
                                }
                        }
                    });
					
		}
		

	}));
	
});

