$(document).ready(function() {
    url = 'http://localhost/dashboard/wpassignment/'
        
    manageData();
    
    function manageData() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: url+'getPost.php',
            complete: function(data) {
                manageRow(data.responseJSON.data);
            }
        });
    }

    function manageRow(data) {
        var rows = '';

        $.each( data, function( key, value ) {
              rows = rows + '<button class="collapsible">';
              rows = rows + '<div class="container">';
              rows = rows + '<div class="ava-container">';
              rows = rows + '<i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>';
              rows = rows + '<p>'+ value.by_member +'</p></div><div>';
              rows = rows + '<p>' + value.content + '</p>';
              rows = rows + '</div></div></button>';

              rows = rows + '<div class="content">';
              $.each(value.comment, function(key1, value1){
                rows = rows + '<div class="row">';
                rows = rows + '<div class="col-2">';
                rows = rows + '<p>' + 'Trung B'+ '</p>';
                rows = rows + '</div><div class="col-10">';
                rows = rows + '<p>' + value1.content+ '</p>';
                rows = rows + '</div></div>';
              })
              rows = rows + '<div class="row input-group mb-3">';
              rows = rows + '<div class="input-group-prepend">';
              rows = rows + '<span class="input-group-text" id="inputGroup-sizing-default">';
              rows = rows + '<i class="fa fa-comments fa-lg" aria-hidden="true"></i>';
              rows = rows + '</span></div><input type="text" placeholder="Write a comment" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></div></div>';
        });
        $(".main-mid").html(rows);
    }

    $(".crud-submit").click(function(e){
        e.preventDefault();
        var form_action = $("#create-account").find("form").attr("action");
        var fname = $("#create-account").find("input[name='first-name']").val();
        var lname = $("#create-account").find("input[name='last-name']").val();
        var gender = 'male';
        if($("#female").is(":checked")){
            gender = 'female';
        }

        var usertype = 'user';
        if($("#admin").is(":checked")){
            usertype = 'admin';
        }
        var email = $("#create-account").find("input[name='email']").val();
        var password = $("#create-account").find("input[name='password']").val();
        var phone = $("#create-account").find("input[name='phone']").val();
    
        var address = $("#create-account").find("input[name='address']").val();
        if(true){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + form_action,
                data:{
                    fname:fname,
                    fname:fname,
                    lname:lname,
                    email:email,
                    gender:gender,
                    usertype:usertype,
                    password:password,
                    phone:phone,
                    address:address
                }
            }).done(function(data){
                manageData();
                $(".modal").modal('hide');
                alert('Account Created Successfully.');
            });
        }else{
            alert('You are missing account infomation.')
        }
    });


    $("body").on("click",".edit-account",function(){
        
        var id = $(this).parent("td").data('id');

        var usertype = $(this).parent("td").prev("td").text();
        var address = $(this).parent("td").prev("td").prev("td").text();
        var phone = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var email = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var gender = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td");
        var lname = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var fname = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();

        
        if(gender[0].innerHTML.includes('fa-venus')){
            $('#edit-female').prop("checked", true);
            $('#edit-female').parent().addClass('active');
            $('#edit-male').prop("checked", false);
            $('#edit-male').parent().removeClass('active');
        }else{
            $('#edit-male').prop("checked", true);
            $('#edit-male').parent().addClass('active');
            $('#edit-female').prop("checked", false);
            $('#edit-female').parent().removeClass('active');
        }

        if(usertype == 'admin'){
            $('#edit-admin').prop("checked", true);
            $('#edit-admin').parent().addClass('active');
            $('#edit-user').prop("checked", false);
            $('#edit-user').parent().removeClass('active');
        }else{
            $('#edit-user').prop("checked", true);
            $('#edit-user').parent().addClass('active');
            $('#edit-admin').prop("checked", false);
            $('#edit-admin').parent().removeClass('active');
        }

        $("#edit-account").find("input[name='address']").val(address);
        $("#edit-account").find("input[name='phone']").val(phone);
        $("#edit-account").find("input[name='email']").val(email);
        $("#edit-account").find("input[name='last-name']").val(lname);
        $("#edit-account").find("input[name='first-name']").val(fname);
        $(".edit-id").val(id);
    });


    $("#edit-btn").click(function(e){

        e.preventDefault();
        var id = $("#edit-account").find(".edit-id").val();
        var form_action = $("#edit-account").find("form").attr("action");
        var fname = $("#edit-account").find("input[name='first-name']").val();
        var lname = $("#edit-account").find("input[name='last-name']").val();
        var gender = 'male';
        if($("#edit-female").is(":checked")){
            gender = 'female';
        }

        var usertype = 'user';
        if($("#edit-admin").is(":checked")){
            usertype = 'admin';
        }
        var email = $("#edit-account").find("input[name='email']").val();
        var password = $("#edit-account").find("input[name='password']").val();
        var phone = $("#edit-account").find("input[name='phone']").val();
        var address = $("#edit-account").find("input[name='address']").val();
        if(true){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + form_action,
                data:{
                    fname:fname,
                    lname:lname, 
                    gender:gender,
                    usertype:usertype,
                    email:email,
                    password:password,
                    phone:phone,
                    address:address,
                    id:id
                }
            }).done(function(data){
                manageData();
                $(".modal").modal('hide');
                alert('Account Updated Successfully.');
            });
        }else{
            alert('You are missing account infomation.')
        }
    });

    $('#login-ic').click(function(){
        $('#signin-modal').modal('show');
    });

    $('#register-btn').click(function(){
        $('#signin-modal').modal('hide');
        $('#signup-modal').modal('show');
    });

    $('#back-signin-btn').click(function(){
        $('#signup-modal').modal('hide');
        $('#signin-modal').modal('show');
    });

    $("body").on("click",".remove-account",function(){
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'delete.php',
            data:{id:id}
        }).done(function(data){
            c_obj.remove();
            alert('Account Deleted Successfully.');
        });   
    });
});

