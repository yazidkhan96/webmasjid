$('.input-number').bind("keypress", function (event) {
	var regex = new RegExp("[0-9]");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

var file_imginput = [];
function uploadimage(event) {
    var output = document.getElementById('imgview');
    output.src = URL.createObjectURL(event.target.files[0]);
    getBase64(event.target.files[0]);
};

function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
	 file_imginput = reader.result;
   };
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}