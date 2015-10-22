$(document).ready(function() {

	$('#search-submit').click(function(e){
		$('.info-box').hide();
		e.preventDefault();
		searchvalue=$('#Search-input').val();
		$('.info-box .info-box-header').html(searchvalue);
		var mactemp = /[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}:[A-Fa-f0-9]{2}/;
		var mactemp2 = /[A-Fa-f0-9]{2}-[A-Fa-f0-9]{2}-[A-Fa-f0-9]{2}-[A-Fa-f0-9]{2}-[A-Fa-f0-9]{2}-[A-Fa-f0-9]{2}/;
		var iptemp = /([0-9]{1,3}\.{1}){3}[0-9]{1,3}/;
		if (!mactemp2.test(searchvalue)&&!mactemp.test(searchvalue)&&!iptemp.test(searchvalue)) 
		{
     		$('.info-box .info-box-dl').html('<dl>格式不正确,暂时支持IP和MAC搜索:</dl><dl><dl>IP格式:192.168.8.1</dl><dl>MAC格式:aa:bb:cc:dd:ee:ff或者aa-bb-cc-dd-ee-ff</dl>');
			$('.info-box').show(400);
			return;
		}
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
			                $('.info-box .info-box-dl').html(data['html']);
							$('.info-box').show(400);
			            }else{
			                    alert('data');
			            }
			    }
		});
	});
});