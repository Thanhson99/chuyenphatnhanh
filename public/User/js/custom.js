// function loadJsAsync(t, e) {
//     var n = document.createElement("script");
//     (n.type = "text/javascript"),
//         (n.src = t),
//         n.addEventListener(
//             "load",
//             function (t) {
//                 e(null, t);
//             },
//             !1
//         );
//     var a = document.getElementsByTagName("head")[0];
//     a.appendChild(n);
// }

// window.addEventListener(
//     "DOMContentLoaded",
//     setTimeout(function () {
//         loadJsAsync("../webchat.caresoft.vn_8090/js/CsChat3661.js?v=2.0", function () {
//             var t = { domain: "nhattin" };
//             embedCsChat(t);
//         });
//     }, 3000),
//     !1
// );

// $(document).ready(function () {
//     $("#tra_cuoc").validate({ onfocusout: !1, onkeyup: !1, onclick: !1, rules: { weight: { required: !0 } }, messages: { weight: { required: "Vui lòng nhập trọng lượng" } } }),
//         $("#tracking_top1").validate({ onfocusout: !1, onkeyup: !1, onclick: !1, rules: { bill: { required: !0 } }, messages: { bill: { required: "Nhập mã vận đơn" } } });
// });