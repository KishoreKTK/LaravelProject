$("document").ready(function()
{    
    var base_url        = window.location.origin;

    $(".Add_Post_RowClass").hide();

    $("#AddPostId").on("click",function(){
        $(".Add_Post_RowClass").show();
    });

    $("#CloseAddPost").on("click",function(){
        $(".Add_Post_RowClass").hide();
    });
    
    $("#AddPostForm").validate({
        rules: {
            post_title: "required",
            describe: "required",
        },
        
        messages: {
            post_title: "Title Required",
            describe: "Description Required",
        },
        
        submitHandler: function(form) {
            var data  = new FormData(form);
            // var data1 = $("#AddPostForm").serializeArray();
            // var filename = $("#fileID")[0]; // change your delector here
            // data1.push("file_field", filename.files[0]); // change filename field here
            // console.log(data);
            // console.log(data1);
            // return false;
            $.ajax({
                headers:
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url         : base_url+'/AddPost',
                type        : "POST",
                dataType    : 'json',
                data        : data,
                cache       : false,
                contentType : false,
                processData : false,
                beforeSend  : function () {
                    $('.theme-loader1').show();
                },
                success: function (result) 
                {
                    console.log(result);
                    return false;
                    if (result['status'] == true) 
                    {
                        doc_type  = result['doc_upload_type'];
                        window.location.href = base_url + '/document-list?doc_id='+doc_type+'';
                    }
                    else {
                        if(result['status']==false && result['auth']==false)
                        {
                            location.reload();
                        }
                        $('.theme-loader1').hide();
                        $('#myModal').modal('hide');
                        iziToast.error({
                            timeout: 3000,
                            id: 'error',
                            title: 'Error',
                            message: result['message'],
                            position: 'topRight',
                            transitionIn: 'fadeInDown'
                        });
                   }
                }
            });
        }
    });

});
