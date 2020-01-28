(function () {
function14();
})();
 
function function14() {
$('.delete').on("click", function () {
swal({
title: "Are you sure you want to delete this record?",
text: "After you delete this record you will not able to get this!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes",
cancelButtonText: "No",
closeOnConfirm: false,
closeOnCancel: false},
function (isConfirm) {
if (isConfirm) {
/* Do your Stuffs */
swal("Success!", "Item has been deleted successfully", "success");
 
} else {
swal("Cancelled", "Something went wrong. Please try again.)", "error");
}
});
});
}