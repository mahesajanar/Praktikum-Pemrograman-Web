function test() {
  var val1 = document.send.T1.value;
  if (val1 >= 0 && 40) document.send.T2.value = "E";
  if (val1 > 40 && 55) document.send.T2.value = "D";
  if (val1 > 55 && 60) document.send.T2.value = "C";
  if (val1 > 60 && 65) document.send.T2.value = "BC";
  if (val1 > 65 && 70) document.send.T2.value = "B";
  if (val1 > 70 && 80) document.send.T2.value = "AB";
  if (val1 > 80 && 100) document.send.T2.value = "A";
}
