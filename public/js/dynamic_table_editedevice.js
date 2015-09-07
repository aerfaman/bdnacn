$(document).ready(function() {

    $('.edit-asset-delete').on('click',function(){
        $id=$(this).attr('id');
        data={
            'id':$id
        }
        warningCoverfun('/deleteasset',data,'确定要删除这个硬件?','/editdevice/'+$id)
    
    // });
    //     $('.delete-device-complete').on('click',function(){

    //     $id=$(this).attr('id');
    //     $url='/deletedeviceall'
    //     $('#all-cover-box').show();

    //     $('#all-cover-no').on('click',function(){
    //         $('#all-cover-box').hide();
    //     });

    //     $('#all-cover-yes').on('click',function(){
    //         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
    //         $.ajax({
    //             url:$url,
    //             type:'post',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             },
    //             data:{'id':$id},
    //             success:function(data){
    //                     if (data=='success') {
    //                         location.href='/device';
    //                     }else{
    //                             alert(data);
    //                     }
    //             }
    //         });
    //     });
    
    });

    $('.delete-device-complete').on('click',function(){
        $id=$(this).attr('id');
        data={
            'id':$id
        }
        warningCoverfun('/deletedeviceall',data,'确定要删除这个设备?这个操作会连设备中的硬件一起删除!','/device');
    });
        $('.delete-device').on('click',function(){

        $id=$(this).attr('id');
        data={
            'id':$id
        }
        warningCoverfun('/deletedevice',data,'确定要删除这个设备?','/device')
        // $url='/deletedevice'
        // $('#all-cover-box').show();

        // $('#all-cover-no').on('click',function(){
        //     $('#all-cover-box').hide();
        // });

        // $('#all-cover-yes').on('click',function(){
        //     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
        //     $.ajax({
        //         url:$url,
        //         type:'post',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //         },
        //         data:{'id':$id},
        //         success:function(data){
        //                 if (data=='success') {
        //                     location.href='/device';
        //                 }else{
        //                         alert(data);
        //                 }
        //         }
        //     });
        // });
    
    });

});