$(document).ready(function() {

	$('#search-submit').click(function(e){
		$('.info-box').hide();
		e.preventDefault();
		searchvalue=$('#Search-input').val();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
			    url:'/search',
			    type:'post',
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			    },
			    data:{'mac':searchvalue},
			    success:function(data){
			            if (data['status']=='success') {
			                $('.info-box .info-box-dl').html('<dt>'+data['device'][0]['name']+'</dt>');
							$('.info-box').show(400);
			            }else{
			                    alert('data');
			            }
			    }
		});
	});
});