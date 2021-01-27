var modal = document.getElementById("modalContainer");
    
  var closeModal = document.getElementById("closeModal");
  
  // this returns an array of the links that have the class openModal
  var arrShowModalLink = document.getElementsByClassName("openModal");

  for (var i=0;i<arrShowModalLink.length;i++)
  {

    var currentLink = arrShowModalLink[i]; // this gets me the dom object for the current item in the array

    currentLink.addEventListener("click", function(){
      
      modal.style.display = "flex";
    
      var modalImage = document.getElementById("modalImage");
      modalImage.src = this.getAttribute("path");
      
      return false;
      
    });

  }