/**
 * home page
 * show limited jobs on the home page
 */
$(".jobCard").slice(0, 12).show(); //As default,show 17 jobs when the page loaded

$(".showMore").on("click", function() {
    $(".jobCard:hidden").slice(0, 12).show(); //Show 12 more hidden jobs by onclick

    if ($(".jobCard:hidden").length == 0) {
        $(".showMore").fadeOut();
    }
});

/**
 * job page for the uploader
 * show limited appliers
 */
$(".appliersDetails").slice(0, 3).show(); //As default,show 3 appliers when the page loaded

$(".showMore").on("click", function() {
    $(".appliersDetails:hidden").slice(0, 9).show(); //Show 9 more hidden appliers by onclick

    if ($(".appliersDetails:hidden").length == 0) {
        $(".showMore").fadeOut();
    }
});

/**
 * create jobs
 * image upload review
 */
$(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
  
    $(this).on('change', function (e) {
	$('.upload__img-wrap').html('');
	//alert('hi');
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

/**
 * create jobs
 * limit the number of image upload
 */
$(function() {
    $("#create").click(function() {
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length) > 3) {
            $("#upload-error").css("display", "block");
            return false;
        }
    });
});

/**
 * copy E-Mail address by clicking the button
 */
function copyToC(id) {
    var aId = id;
    var copyText = document.getElementById(aId).innerHTML;

    document.addEventListener(
        "copy",
        function(e) {
            e.clipboardData.setData("text/plain", copyText);
            e.preventDefault();
        },
        true
    );

    document.execCommand("copy");
    console.log("copied text : ", copyText);
    alert("E-Mail address copied!");
}

/**
 * close job.
 */
$(".show_confirm").click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    Swal.fire({
        title: "Are you sure you want to close this job?",
        text: "Once closed, you will not be able to recover this job!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#323233",
        confirmButtonText: "Yes, close it",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});