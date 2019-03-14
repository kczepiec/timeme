$(document).ready(function () {
    if (window.innerWidth > 1280) {
        $('#sidebarMenu').removeClass('dropdown-menu');
    } else {
        $('#sidebarMenu').addClass('dropdown-menu');
    }
});

$('input[name="startDate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
});

$('input[name="endDate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
});

$('input[name="expectedDate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
});

