'use strict';
$(document).ready(function() {

    $(function() {
        $('.datepicker_field').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10) + 10,

            locale: {
                cancelLabel: 'Clear',
                format: 'YYYY-MM-DD'
            }
        });
        $('.datepicker_field').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD'));
        });

        $('.datepicker_field').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });

    $(function() {
        $('.datetimepicker_field').daterangepicker({
            timePicker: true,
            showDropdowns: true,
            singleDatePicker: true,
            startDate: moment().startOf('hour'),
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10) + 10,
            locale: {
                format: 'YYYY-M-DD hh:mm'
            }
        });
    });

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {

        });
    });
    $(function() {
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    });

    $(function() {
        $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10)
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            alert("You are " + years + " years old!");
        });
    });
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('.reportrange').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
        }

        $('.reportrange').daterangepicker({
            autoUpdateInput: false,
            startDate: start,
            opens: 'right',
            endDate: end,
            locale: {
                cancelLabel: 'Clear',
                format: 'YYYY-MM-DD'
            },
            ranges: {
                'اليوم': [moment(), moment()],
                'الامس': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'أخر 7 أيام': [moment().subtract(6, 'days'), moment()],
                'أخر 30 يوم': [moment().subtract(29, 'days'), moment()],
                'الشهر الحالي': [moment().startOf('month'), moment().endOf('month')],
                'الشهر السابق': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });
    $(function() {
        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('.reportrange').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
        });

        $('.reportrange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });
});