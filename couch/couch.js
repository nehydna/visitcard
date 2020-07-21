'use strict'

const getClickLink = document.querySelector('.call');
const getPopup = document.querySelector('.popup');
const getClickButton = document.querySelector('.send-form');
const getClosePopup = document.querySelector('.header-bottom');
const getCloseButton = document.querySelector('.close-form');
let getForm = document.querySelector('.form');
let message = document.querySelector('.sent--message');
let getPhoneNumber = document.querySelector('.user-phone');



getClickLink.onclick = function() {
getPopup.classList.toggle('popup--unavailable');  
}
document.addEventListener('keydown', function(evt) {
    if(evt.keyCode === 27) {
        evt.preventDefault();
     getPopup.classList.add('popup--unavailable');   
    }
});
 getCloseButton.onclick = function(evt) {
     getPopup.classList.add('popup--unavailable'); 
 }

getClosePopup.onclick = function (evt) {
     getPopup.classList.add('popup--unavailable');   
}

getForm.onsubmit = function(evt) {
  // Инструкция ниже отменяет отправку данных
  evt.preventDefault();
 getForm.classList.add('form--unavailable');
 message.textContent = 'Спасибо! Мы сейчас же перезвоним Вам на номер ' + getPhoneNumber.value;
};