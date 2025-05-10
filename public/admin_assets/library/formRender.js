// (function ($) {
//     "use strict";
//     var HT = {};
//     HT.record = () => {
//         $(document).on('change', '.records', function () {
//             let records = $(this).val();

//             $.ajax({
//                 url: 'ajax/records',
//                 method: 'GET',
//                 data: {
//                     record: records,
//                 },
//                 success: function (response) {
//                     console.log('Phản hồi thô:', response);
//                 },
//                 error: function (xhr, status, error) {
//                     console.error('AJAX lỗi:', status, error);
//                     console.log('Phản hồi từ server:', xhr.responseText);
//                 }
//             });
//         });
//     }

//     $(document).ready(function () {
//         HT.record();
//     });
// })(jQuery);
