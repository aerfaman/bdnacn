$(document).ready(function() {

    $('.edit-asset-delete').on('click',function(){

        $id=$(this).attr('id');
        $url='/deleteasset'
        $('#all-cover-box').show();

        $('#all-cover-no').on('click',function(){
            $('#all-cover-box').hide();
        });

        $('#all-cover-yes').on('click',function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url:$url,
                type:'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data:{'id':$id},
                success:function(data){
                        if (data=='success') {
                            location.reload();
                        }else{
                                alert('data');
                        }
                }
            });
        });
    
    });
        $('.delete-device-complete').on('click',function(){

        $id=$(this).attr('id');
        $url='/deletedeviceall'
        $('#all-cover-box').show();

        $('#all-cover-no').on('click',function(){
            $('#all-cover-box').hide();
        });

        $('#all-cover-yes').on('click',function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
            $.ajax({
                url:$url,
                type:'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data:{'id':$id},
                success:function(data){
                        if (data=='success') {
                            location.href='/device';
                        }else{
                                alert(data);
                        }
                }
            });
        });
    
    });

        $('.delete-device').on('click',function(){

        $id=$(this).attr('id');
        $url='/deletedevice'
        $('#all-cover-box').show();

        $('#all-cover-no').on('click',function(){
            $('#all-cover-box').hide();
        });

        $('#all-cover-yes').on('click',function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
            $.ajax({
                url:$url,
                type:'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data:{'id':$id},
                success:function(data){
                        if (data=='success') {
                            location.href='/device';
                        }else{
                                alert(data);
                        }
                }
            });
        });
    
    });

});