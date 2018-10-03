var coll = document.getElementsByClassName("button_menu");

var i;



for (i = 0; i < coll.length; i++) {

  coll[i].addEventListener("click", function() {
 
    this.classList.toggle("active");

    var content = this.nextElementSibling;

    if (content.style.maxHeight){

      content.style.maxHeight = null;

    } else {

      content.style.maxHeight = content.scrollHeight + "px";

    } 

  });

}





function sprawdz(y)

{

    var z = y.name;

    var x = document.querySelector('.'+z);

    

   

    

    x.style.fontWeight = "900";

    x.style.fontSize = "20px";

    x.style.opacity = "1";

    x.style.transition = "1s ease-in-out";

}



function test(y)

{

    var z = y.name;

    var x = document.querySelector('.'+z);

    

    

    x.style.backgroundColor = "#2d3e50";

    x.style.color = "#ffffff";

    x.style.fontWeight = "400";

    x.style.fontSize = "16px";

    x.style.opacity = "0.87";

    x.style.transition = "1s ease-in-out";

}