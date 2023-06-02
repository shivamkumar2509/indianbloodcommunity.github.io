var loadFile = function(event)
{
    var image = document.getElementById('pic');
    image.src = URL.createObjectURL(event.target.files[0]);
};


// let form = document.querySelector('#font')

// form.addEventListener('submit',(e)=>{
// 	e.preventDefault();
// 	console.log("submit the form");
// })

// form.addEventListener('submit',(e)=>{
// 	e.preventDefault();
// 	console.log(form.email.value)
// })



let form=document.querySelector('#font');
let email=document.querySelector('#email')
let mobile=document.querySelector('#number')
// let password=document.querySelector('#password')
// let passwordPattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$"
// form.addEventListener('submit',(e)=>{
//     e.preventDefault();
//     let passwordValue = password.value;
//     console.log(passwordValue)
//     let result = passwordValue.match(passwordPattern);
//     if(result==true){
//         console.log("your password is strong")
//     }
//     else{
//         console.log("password is weak")
//     }
// })
let mobilePattern = /^[0-9]{10,10}$/
// form.addEventListener('submit',(e)=>{
//     e.preventDefault();
//     let MobileNumber=mobile.value;
//     let result=mobilePattern.test(MobileNumber)
//     if(result == true){
//         console.log("mobile is valid")
//     }
//     else{
//         console.log("mobile is Invalid")
//     }
// })

//live feedback

// user.addEventListener('keyup',(e)=>{
//     if(userNamePattern.test(e.target.value)){
//         console.log("passed")
//     }
//     else{
//         console.log("try again")
//     }
// })

mobile.addEventListener('keyup',(e)=>{
    if(mobilePattern.test(e.target.value)){
        mobile.setAttribute('class','succes')
    }
    else{
        mobile.setAttribute('class','error')
    }
})








		// let states=["AP","Vegetables"];
		// let cities=["Lion","cow","turtle"];
		// let hospitals=["cucumber","pumpkin","potato"];

		// let slct1=document.getElementById('state');
		// let slct2=document.getElementById('city');
		// let slct3=document.getElementById('hospital');
		// states.forEach(function addStates(item) {
		// 	let option=document.createElement("option");
		// 	option.text=item;
		// 	option.value=item;
		// 	slct1.appendChild(option);
		// });

		// slct1.onchange = function(){
		// 	slct2.innerHtml = "<option></option>";
		// 	if (this.value == "AP") {
		// 		addToSlct2(cities);
		// 	}
		// 	if (this.value == "Vegetables") {
		// 		addToSlct2(hospitals);
		// 	}
		// }

		// function addToSlct2(arr){
		// 	arr.forEach(function(item){
		// 		let option=document.createElement("option");
		// 		option.text=item;
		// 		option.value=item;
		// 		slct2.appendChild(option);
		// 	})
		// }

		
