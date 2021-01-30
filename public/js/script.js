﻿$(document).ready(function(){


	//Progress
    $(document).on('click', '.Accept', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/patient/accept',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'Patient Status Accept Updated', {timeOut: 30, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	

    //Complete
    $(document).on('click', '.Pending', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/patient/pending',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'Patient Status Pending Updated', {timeOut: 30, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	


	//Ban Tution
    $(document).on('click', '.banTution', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/tution/ban',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'Banned Tution', {timeOut: 200, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	

    //Unban Tution
    $(document).on('click', '.unbanTution', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/tution/unban',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'Tution Confirm', {timeOut: 200, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	

       //Ban Users
    $(document).on('click', '.banUsers', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/users/ban',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'Banned', {timeOut: 200, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	

        //Unban User
    $(document).on('click', '.unbanFreelancer', function(){ 
    	var id = $(this).data('id');
    	$('.loading').show();
    		$.ajax({ 
	        type: 'post',
	        url: '/panel/freelancer/unban',
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        data: {
	       	  id: id
	        },success: function(data) {  
	            location.reload();
	            toastr.success(' ', 'User APPROVE', {timeOut: 200, positionClass: 'toast-top-center'});
	            $('.loading').hide();
	        }
	    });
    });	
    


});//document.ready