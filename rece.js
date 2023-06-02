var loadFile = function(event)
{
    var image = document.getElementById('pic');
    image.src = URL.createObjectURL(event.target.files[0]);
};


let form=document.querySelector('#font');
let mobile=document.querySelector('#number')
let mobilePattern = /^[0-9]{10,10}$/
mobile.addEventListener('keyup',(e)=>{
    if(mobilePattern.test(e.target.value)){
        mobile.setAttribute('class','success')
    }
    else{
        mobile.setAttribute('class','error')
    }
})