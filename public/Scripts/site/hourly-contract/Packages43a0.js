$(function () {
  
        $('[data-toggle="tooltip"]').tooltip();
   
    $(".Mshift").slice(0, 5).show(); // select the first ten
    $(".Nshift").slice(0, 5).show(); // select the first ten
    $("#ResultDiv").on('click', '#load1', function (e) { // click event for load more
        debugger;
        e.preventDefault();
        $(".Mshift:hidden").slice(0, 5).slideDown(); // select next 10 hidden divs and show them
        if ($(".Mshift:hidden").length == 0) { // check if any hidden divs still exist
            //alert("No more divs"); // alert if there are none left
            $("#load1").fadeOut('slow');
        }
    });
    $("#ResultDiv").on('click', '#load2', function (e) {  // click event for load more
        debugger;
        e.preventDefault();
        $(".Nshift:hidden").slice(0, 5).slideDown() // select next 10 hidden divs and show them
        if ($(".Nshift:hidden").length == 0) { // check if any hidden divs still exist
            //alert("No more divs"); // alert if there are none left
            $("#load2").fadeOut('slow');
        }
    });
    $('.scrollbar-rail').scrollbar();
    $('.custom-select').select2();

    //$('.hours-filter').on('click', '.HourFilter', function (e) {
    //    debugger;
    //    //if ($(this).val() != $(".HourFilter.active").val()) {
    //       // $(".HourFilter.active").not($(this).addClass('active')).removeClass();
    //    //}
    //    //else {
    //    //    $(this).removeClass("active");
    //    //    GetPackagesForPackage(null);
    //    //}
    //});

});

function GetPackagesForPackage(HourFilter) {
    debugger;
    var shift = $('.nav-tabs li a.active').attr("data-shift");
    var hour = HourFilter;
    if ($("#Hour_" + HourFilter).val() != $(".HourFilter.active").val()) {
        $(".HourFilter.active").not($("#Hour_" + HourFilter).addClass('active')).removeClass('active');
    }
    else {
        $("#Hour_" + HourFilter).removeClass("active");
        hour = '';
    }

    $.ajax({
        method: 'POST',
        url: '/HourlyContract/GetSelectedPackagesByHourAndShift?hour=' + hour + '&ForPackage=' + true ,
        contentType: "application/json; charset=utf-8",
        dataType: "html",
        success: function (data) {
            debugger
            $("#ResultDiv").html(data);
            if (shift != "false") {
                $('#home').removeClass('show');
                $('#home').removeClass('active');
                $('#profile').addClass('show active');
                // $('#profile-tab').addClass('active');

            }

            $(".Mshift").slice(0, 5).show(); // select the first ten
            $(".Nshift").slice(0, 5).show(); // select the first ten
        }
    });


}

function GetPackagesForOffers(HourFilter) {
    debugger;

    var shift = $('.nav-tabs li a.active').attr("data-shift");
    var hour = HourFilter;
    console.log($("#Hour_" + HourFilter).val());
    if ($("#Hour_"+HourFilter).val() != $(".HourFilter.active").val()) {
        $(".HourFilter.active").not($("#Hour_" + HourFilter).addClass('active')).removeClass('active');
    }
    else {
        $("#Hour_" + HourFilter).removeClass("active");
        hour = '';
    }

    $.ajax({
        method: 'POST',
        url: '/HourlyContract/GetSelectedPackagesByHourAndShift?hour=' + hour + '&ForOffers=' + true ,
        contentType: "application/json; charset=utf-8",
        dataType: "html",
        success: function (data) {
            debugger
            $("#ResultDiv").html(data);
            if (shift != "false") {
                $('#home').removeClass('show');
                $('#home').removeClass('active');
                $('#profile').addClass('show active');
                // $('#profile-tab').addClass('active');

            }

            $(".Mshift").slice(0, 5).show(); // select the first ten
            $(".Nshift").slice(0, 5).show(); // select the first ten
        }
    });


}





function DisplayValidationDescription(SelectedPackage, ValidationDescription) {
    debugger;
    if (ValidationDescription) {
        ValidationDescription = ValidationDescription.replace(" , ", " <br><i class='fa fa-check text-brand mx-2'></i> ").replace("-", " <br><i class='mx-2 fa fa-check text-brand'></i> ");
        
        var html = "<div style='text-align: start;'>";
        html +=  "<i class='fa fa-check text-brand mx-2'></i>" + ValidationDescription+ "<br></div>";
        swal({
       
            html: html,
            title: 'للاستفادة من كود الخصم   ',
            type: 'info',
            confirmButtonText: "موافق"
        }).then((result) => {
            //location.href = '/HourlyContract/index/' + SelectedPackage;
        });


    }
    //else { location.href = '/HourlyContract/index/' + SelectedPackage;}
}