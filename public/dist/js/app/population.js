/** file function population controller **/

$(function() {

  var table = $('#populationTable').DataTable({
          processing: true,
          serverSide: true,       
          ajax:"./population/getAll",         
          aoColumnDefs: [                            
              { "bSortable": false, "aTargets": [ 5 ] }               
          /*     { "bSortable": false, "aTargets": [ 6 ] },               
              { "bSortable": false, "aTargets": [ 7 ] }       
*/
           ],               
          fnRowCallback: function( nRow, sData, iDisplayIndex, iDisplayIndexFull ) {
            var classRow =  sData.statusPpl;      
              if(classRow == "LIBERTAD"){
                  $(nRow).attr('class','text-success');
              }else if (classRow == "PROCESADA"){
                  $(nRow).attr('class', 'text-warning');          
              }else if (classRow == "SENTENCIADA"){
                  $(nRow).attr('class', 'text-danger');
              }                         
          },                   
          columns: [
             { data: 'id'},
             { data: 'noExpediente'},
             { data: 'apellidoPaterno'} ,
             { data: 'apellidoMaterno'} ,
             { data: 'nombreS'},
             { data: 'action', name: 'action', orderable: false, searchable: false }
          ],
          language: {
               "url": "./dist/config/Spanish.json"
          }
     });

      $( "#populationTable tbody" ).on( "click", "a#btnViewInfo", function() {
          $("#informationDetail").modal();  
            var apellidoPaterno = $( this ).data('apellidopaterno')
            var apellidoMaterno = $( this ).data('apellidomaterno');
            var nombres = $( this ).data('nombres');
            var fullName = apellidoPaterno+' '+apellidoMaterno+' '+nombres;      
            var profilePicture = $( this ).data('profilepicture');

            $("#showwValNoExpediente").text( $( this ).data('noexpedinete') );
            $("#showValNombreCompleto").text(fullName);
            $("#showValModulo").text( $( this ).data('modulo') );                       
            $("#showValPbllnHgr").text( $( this ).data('pbllnhgr') );
            $("#showValStatusPpl").text( $( this ).data('statusppl') );      


           var btnEdit = {!! link_to_route('population.editPerson', $title = "Editar", $parameters = null, $attributes = ["class"=>"fa fa-address-card-o"]) !!};
            
            console.log(VariableJS);
       //     $("#showProfilePicture").attr("src","http://localhost:81/sigesi/public"+profilePicture);

            /*
            var btnEdit = $('{!! link_to_route("population.editPerson", $title = "", $parameters = noExpediente, $attributes = ["class"=>"btn btn-warning fa fa-pencil-square-o"]) !!}');
//             var btnEdit = $("<a href ='http://localhost:81/sigesi/public/population/editPerson/' class='btn btn-warning' ><i class='fa fa-pencil-square-o'></i></a>");
            $("#controlEdit").append().html(btnEdit);
            $("#showProfilePicture").attr("src","http://localhost:81/sigesi/public"+profilePicture);*/




      });

     $("#btnRefreshTable").click(function (e) {
        refreshTable();
     });

     function refreshTable(){
        table.ajax.reload();
     }

     setTimeout(function(){$('.message').delay(100).hide(250)},3000);




});

