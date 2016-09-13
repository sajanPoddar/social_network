 $(document).ready( function() {
 
 $("#add_li").click( function() {
    $("p_scents p").append("p_scnt");
 });
 
  $("#remove_li").click( function() {
    $("li:last").remove();
 });
 
});




//      $(function() {
//         var scntDiv = $('#p_scents');
//         var i = $('#p_scents p').size() + 1;
        
//         $('#addScnt').live('click', function() {
//                 $('<p><div class="form-group" id="p_scnt"><label for="group" class="control-label col-md-3">Phone/E-mail</label><div class="col-md-3"><select name="contact_type_id[]" id="group" class="form-control"><option value="">contact type</option>@foreach($contact_type as $type)<option value="{{$type->id}}">{{$type->type_name}}</option>@endforeach</select></div><div class="col-md-5"><div class="input-group"><input type="text" name="phoneNo_email[]" id="new_group" class="form-control"></div></div></div> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
//                 i++;
//                 return false;
//         });
        
//         $('#remScnt').live('click', function() { 
//                 if( i > 2 ) {
//                         $(this).parents('#p_scnt').remove();
//                         i--;
//                 }
//                 return false;
//         });
// });