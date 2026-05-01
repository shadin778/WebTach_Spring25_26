const unitPrice = 1000;
const days = 30;

const quality = document.getElementById("quality");
const total = document.getElementById("total");

qualityy.addEventListener("input", function(){

let quantity = parseInt(quality.value) || 0;

if(quantity < 0){
alert("Quantity cannot be negative");
quality.value = 0;
quantity = 0;
}

let result = unitPrice * quantity * days;

total.value = result;

if(result > 1000){
alert("You are eligible for a gift coupon!");
}

});