$(document).ready(function(){
	$(document).on('click','#form-submit',function(){
		$name=$('input[name="name"]').val();
		$type=$('input[name="type"]').val();
		$address=$('input[name="address"]').val();
		$username=$('input[name="username"]').val();
		$password=$('input[name="password"]').val();
		$ip=$('input[name="ip"]').val();
		$remark=$('input[name="remark"]').val();
		$('#create_service').submit();
	});

    $('#dynamic-table').dataTable( {
        "aaSorting": [[ 4, "desc" ]]
    } );

    /*
     * Insert a 'details' column to the table
     */
    var nCloneTh = document.createElement( 'th' );
    var nCloneTd = document.createElement( 'td' );
    nCloneTd.innerHTML = '<img src="images/details_open.png">';
    nCloneTd.className = "center";

    $('#hidden-table-info thead tr').each( function () {
        this.insertBefore( nCloneTh, this.childNodes[0] );
    } );

    $('#hidden-table-info tbody tr').each( function () {
        this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
    } );

    /*
     * Initialse DataTables, with no sorting on the 'details' column
     */
    var oTable = $('#hidden-table-info').dataTable( {
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0 ] }
        ],
        "aaSorting": [[1, 'asc']]
    });

    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $(document).on('click','#hidden-table-info tbody td img',function () {
        var nTr = $(this).parents('tr')[0];
        if ( oTable.fnIsOpen(nTr) )
        {
            /* This row is already open - close it */
            this.src = "images/details_open.png";
            oTable.fnClose( nTr );
        }
        else
        {
            /* Open this row */
            this.src = "images/details_close.png";
            var aData = oTable.fnGetData( nTr );
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url:'getassetfromdevice',
        type:'post',
        headers: {

'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

},
        data:{'id':aData[1]},
        success:function(data){
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Owner: </td><td>'+data['owner']['name']+'</td></tr>';
            for (var d in data){
                if (d=='owner') continue;
                sOut += '<tr><td>'+data[d]['type']+': </td><td>'+data[d]['name']+'</td></tr>';
            }
            sOut += '</table>';
            oTable.fnOpen( nTr, sOut, 'details' );
        }
    });
            
        }
    } );
    $(document).on('click','.idle_asset',function(){
        var idle_value=$(this).html();
        var this_input=$(this).parents('.input-group').children(":last");
        var this_input_val=this_input.val();
        if (this_input_val=="") {
            this_input.val(idle_value);
            return;
        }
        if (this_input_val.indexOf(idle_value)>=0) {
            return;
        }
        else
        {
            this_input.val(this_input_val+';'+idle_value);
        }
    });
    $(document).on('click','#form-submit',function(){
        
    });
});