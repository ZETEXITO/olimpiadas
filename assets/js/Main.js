const cont = -1;
function RandomIdStock(min, max){
    return Math.floor((Math.random() * (max - min + 1)) + min);
}
var Productos = new Array(cont+1);
function ContP(Id) {
    if (Id>0){
        cont++;
        Productos[cont]=[Id];
    }
}
function BrokeP(){
    cont=-1;
}
function previewImage(event, querySelector){
	const input = event.target;
	$imgPreview = document.querySelector(querySelector);
	if(!input.files.length) return
	file = input.files[0];
	objectURL = URL.createObjectURL(file);
	$imgPreview.src = objectURL;
}