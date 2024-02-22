$(document).ready(function(){

    let status = '';
    let next_meeting = '';
    let remarks = '';
    let base_url = $('meta[name="base-url"]').attr('content');

    $('.pending_next_meeting').change(function(){

         next_meeting = jQuery(this).val();
        // alert();
    });

    $('.pending_remarks').change(function(){
      
        remarks = jQuery(this).val();
        // alert();
    });

    $('.pending_status').change(function(){
      
         status = jQuery(this).val();
        // alert(status);
    });

    $('.wcp-pull-right').click(function(e){
        e.preventDefault();
        next_meeting = jQuery('.pending_next_meeting').val();
        remarks = jQuery('.pending_remarks').val();
        status = jQuery('.pending_status').val();

        if(next_meeting == ''){
            alert("please fill the next meeting");
            return false;
        }
        if(remarks == ''){
            alert("please fill the remarks");
            return false;
        }
        if(status == ''){
            alert("please fill the status");
            return false;
        }
        
        let followup_id = jQuery('.followup_id').val();
        let obj = {'next_meeting':next_meeting,'remarks': remarks,'status': status ,'followup_id':followup_id};
       
        $.ajax({
            type: "POST",
            url: base_url+'/followup/update',
            data:obj,
            success:function(data){

            let response = data;
            if(response.is_success == true){
               
                alert(response.message);
                window.location.reload();
                return false;
            }
            else{

                alert(response.error);
                window.location.reload();
                return false;
           
            }
         }
    });
  });
});

