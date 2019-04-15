$(document).ready(function () {
    var btn = $('#btn-to-top');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.removeClass('hide-btn-to-top');
        } else {
            btn.addClass('hide-btn-to-top');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });

    var elfsightBtn = $('.eapps-social-share-buttons-inner a[href*="a"]');
    elfsightBtn.removeAttr("style");

    var uploadEditImage = $('#imageUrlEdit');
    $('input[type=radio][name=changeImage]').change(function () {
        if (this.value == 'Yes') {
            uploadEditImage.removeClass('hide');
            console.log('yes');
        }
        else if (this.value == 'No') {
            uploadEditImage.addClass('hide');
            console.log('No');
        }
    });

    $( "#formAddComment" ).on( "submit", function( e ) {
        e.preventDefault();
        var test = true;

        var nickName = $("input[name='nickName']").val();

        var iconVisitor = $("[name='iconVisitor']:checked").val();

        var like = $("[name='like']:checked").val();

        var commentContent = $("textarea[name='commentContent']").val();

        var erreurArea = $("#errorComment");

        if (like == null && commentContent == "") {
            erreurArea.removeClass('hide');
            test = false;
        } else {
            erreurArea.addClass('hide');
            test = true;
        }
        if (test) {
            var dataCom = $('#formAddComment').serialize();
            $.ajax({
                url: 'lib/c_comment.php',
                type: 'POST',
                dataType: 'json',
                data: dataCom,
                success: function (result, statut) {
                    $('#formAddComment').trigger('reset');
                    var showAllComments = $('.divShowAllComments');
                    showAllComments.empty();
                    $.each(result,function(index,value){
                        var showOneComment = $('<div class="showOneComment w-100 mt-3" />');
                        //var showOneComment = $('<div class="showOneComment w-100 mt-3" />').appendTo(showAllComments);
                        var div1 = $('<div class="d-flex flex-row justify-content-start align-items-center w-100" />').appendTo(showOneComment);
                        $('<img class="w-10" src="'+value.image_visitor+'" alt="user" />').appendTo(div1);
                        var div2 =  $('<div class="w-90 d-flex flex-column justify-content-center align-items-center w-100 ml-2 mr-3 mb-2" />').appendTo(div1);
                        var div3 = $('<div class="d-flex flex-row justify-content-between align-items-center w-100" />').appendTo(div2);
                        $('<p class="nickName">'+value.nickName+'</p>').appendTo(div3);
                        $('<img src="'+value.like_post+'" />').appendTo(div3);
                        $('<span class="badge badge-info">'+value.creationTimestamp+'</span>').appendTo(div3);
                        $('<div class="w-100"><p class="m-0 text-left">'+value.contents+'</p></div>').appendTo(div2);
                        $(showAllComments).prepend(showOneComment)
                    });
                }
            });
        }
    });


});


/*
$(function () {
    $("#btnSubmitComment").click(function (e) {
        e.preventDefault();
        var test = true;

        var nickName = $("input[name='nickName']").val();

        var iconVisitor = $("[name='iconVisitor']:checked").val();

        var like = $("[name='like']:checked").val();

        var commentContent = $("textarea[name='commentContent']").val();

        var erreurArea = $("#errorComment");

        if (like == null && commentContent == "") {
            erreurArea.removeClass('hide');
            test = false;
        } else {
            erreurArea.addClass('hide');
            test = true;
        }
        if (test) {
            var dataCom = $('#formAddComment').serialize();
            $.ajax({
                url: 'lib/c_comment.php',
                type: 'POST',
                dataType: 'json',
                data: dataCom,
                success: function (result, statut) {
                    var showAllComments = $('.divShowAllComments');
                    showAllComments.empty();
                    $.each(result,function(index,value){
                        var showOneComment = $('<div className="showOneComment w-100 mt-3" />').appendTo(showAllComments);
                        var div1 = $('<div className="d-flex flex-row justify-content-start align-items-center w-100" />').appendTo(showOneComment);
                        $('<img className="w-10" src="'+value.image_visitor+'" alt="user" />').appendTo(div1);
                        var div2 =  $('<div className="w-90 d-flex flex-column justify-content-center align-items-center w-100 ml-2 mr-3 mb-2" />').appendTo(div1);
                        var div3 = $('<div className="d-flex flex-row justify-content-between align-items-center w-100" />').appendTo(div2);
                        $('<p className="nickName">'+value.nickName+'</p>').appendTo(div3);
                        $('<span class="badge badge-info">'+value.creationTimestamp+'</span>').appendTo(div3);
                        $(' <img src="'+value.like_post+'" />').appendTo(div3);
                        $('<div class="w-100"><p className="m-0 text-left">'+value.contents+'</p></div>').appendTo(div2);
                    });
                }
            });
        }
    });
});
*/