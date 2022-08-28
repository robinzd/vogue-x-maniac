window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementsByClassName("ftco-section py-0").style.top = "0";
  } else {
    document.getElementsByClassName("ftco-section py-0").style.top = "-50px";
  }
}


console.log("hai");