function hitung() {
  var myForm = document.form1;
  var x = eval(myForm.x.value);
  var y = eval(myForm.y.value);
  var pil = myForm.opt.value;
  if (pil == "tambah") {
    var z = x + y;
  } else if (pil == "kurang") {
    var z = x - y;
  } else if (pil == "kali") {
    var z = x * y;
  } else if (pil == "bagi") {
    var z = x / y;
  }
  myForm.hasil.value = z;
  myForm.x.value = "";
  myForm.y.value = "";
}
//
document.write("Dimodifikasi terakhir pada " + document.lastModified);
