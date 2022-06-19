/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

//maximize
$(".btn-maximize").click(function () {
    let current = $(this).closest(".card");
    if(current.hasClass("card-full-screen")){
        current.removeClass("card-full-screen");
        $(this).html(`<i class="fas fa-expand-alt fa-fw"></i>`);

    }else{
        current.addClass("card-full-screen");
        $(this).html(`<i class="fas fa-compress-alt fa-fw"></i>`);

    }
});

// multiple upload
$('.input-images-1').imageUploader();

// single upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// $('#description').summernote({
//     height: 200,                 // set editor height
//     minHeight: null,             // set minimum height of editor
//     maxHeight: null,             // set maximum height of editor
//     focus: true
// });
