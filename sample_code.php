<form action="upload.php" method="post" enctype="multipart/form-data" id="YOUR_FORM_ID"  accept-charset="utf-8">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<script>

    var $VAR_YOUR_FORM_ID = $('#YOUR_FORM_ID'); 

    $VAR_YOUR_FORM_ID.on('submit', function(event){
        event.preventDefault();
        $form=$(this);
        var form_obj = new FormData($('#YOUR_FORM_ID')[0]);
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            dataType: 'json',
            data: form_obj,
            contentType: false,
            processData: false,
            success: function(data){

                /* data.status is bool type, data.msg is carrying message from server itself */

                if(data.status){                               
                    console.log(data.msg);
                }
                else{
                    console.log(data.msg);
                }  
            }
        }) 
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });            
    });

</script>