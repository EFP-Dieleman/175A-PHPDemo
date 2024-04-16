function w3_open() {
  document.getElementById("mySidebar").classList.add("open");
  document.getElementById("mySidebar").classList.remove("close");
}

function w3_close() {
  document.getElementById("mySidebar").classList.add("close");
  document.getElementById("mySidebar").classList.remove("open");
}
