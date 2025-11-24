function formAction(){
    const form = document.querySelector(".container form"),
      nextBtn = form.querySelector(".nextBtn"),
      backBtn = form.querySelector(".backBtn"),
      submitBtn = form.querySelector('.submitBtn'),
      allInput = form.querySelectorAll('.first input');


nextBtn.addEventListener("click",()=>{
    allInput.forEach(data =>{
        if(data.value != ""){
            form.classList.add("sectionActive");
        }else{
            form.classList.remove("sectionActive");
        }
    })
})

backBtn.addEventListener("click",()=>{
    form.classList.remove("sectionActive");
})
}
formAction();


function formValidation(){

}



