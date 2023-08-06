////////////////////////Nav Page
let mainnav = document.querySelectorAll('.nav-item a');
mainnav.forEach(elem => {
    elem.addEventListener("click", function(){
        event.target.nextElementSibling.classList.add('open-list-nav');
        var content = elem.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});
//////////////////////// increment OR decrement buttom
function stepperDecrement(btn){
    const inputEl = btn.nextElementSibling;
    const newValue = parseInt(inputEl.value) - 1 ; //Convert data type from string to number
    if(newValue >= inputEl.min && newValue <= inputEl.max){
        inputEl.value = newValue;
    }
}
function stepperIncrement(btn){
    const inputEl = btn.previousElementSibling;
    const newValue = parseInt(inputEl.value) + 1; //Convert data type from string to number
    if(newValue >= inputEl.min && newValue <= inputEl.max){
        inputEl.value = newValue;
    }
}

///////////////////////pagination total Page
let ListDown = document.querySelectorAll('.btn-pag');
ListDown.forEach(a => {
    console.log(a);
    a.addEventListener('click', function(){
        ListDown.forEach(link => {
            link.classList.remove('active');
            this.classList.add('active');
        });
    });
});
/* 
###################################################################################################
                                        Page Home 
###################################################################################################
*/
//input Search
let toggle = document.querySelector('.toggle');
let openClass = document.querySelector('.input-in');
let closeClass = document.querySelector('#close_search');

toggle.addEventListener('click', () => {
    openClass.classList.toggle('open');
});

closeClass.addEventListener('click', () => {
    openClass.classList.remove('open');
});

function displayTime(){
    var dateTime = new Date();
    var hrs = dateTime.getHours();
    var min = dateTime.getMinutes();
    var sec = dateTime.getSeconds();
    var session = document.querySelector('.session');
    if(hrs >= 12){
        session.innerHTML = "PM";
    }else{
        session.innerHTML = "AM";
    }
    if(hrs > 12){
        hrs = hrs - 12;
    }
    document.querySelector('.hours').innerHTML = hrs;
    document.querySelector('.minutes').innerHTML = min;
    document.querySelector('.seconds').innerHTML = sec;

}
setInterval(displayTime, 1000);

// popup Img 
document.addEventListener('click', function(e){
    if(e.target.className == 'close-button'){
        e.target.parentNode.remove();
        document.querySelector('.popup-overlay').remove();
    }

});
const imgPopuo1 = document.querySelectorAll(".show-in img");
const imgPopuo2 = document.querySelectorAll(".card img");
const imgPopuo3 = document.querySelectorAll(".car  img");


popup(imgPopuo1);
popup(imgPopuo2);
popup(imgPopuo3 );

function popup(imgPopuo){
    imgPopuo.forEach(img  => {

        img.addEventListener('click', (e) =>{
    
            let overlay = document.createElement("div");
            overlay.className = "popup-overlay";
    
            document.body.appendChild(overlay);
        
            let popupBox = document.createElement("div");
            popupBox.className = "popup-box";
    
            let popupImge = document.createElement("img");
            popupImge.src = img.src;
    
            popupBox.appendChild(popupImge);
    
            document.body.appendChild(popupBox);
    
            if(img.alt !== null){
                let imgHeader = document.createElement('h3');
    
                let imgText = document.createTextNode(img.alt );
    
                imgHeader.appendChild(imgText);
    
                popupBox.appendChild(imgHeader);
    
            }
    
            let closeButton = document.createElement('span');
            let closeButtonText = document.createTextNode('X'); 
            
            closeButton.appendChild(closeButtonText);
            closeButton.className = 'close-button';
    
            popupBox.appendChild(closeButton);
    
        });
    });
}

/* 
###################################################################################################
                                        Page category 
###################################################################################################
*/
// category page
//drop list 
let mainList = document.querySelectorAll('.main-nav-list a');
mainList.forEach(elem => {
    elem.addEventListener("click", function(){
    event.target.nextElementSibling.classList.toggle('show');
    });
});




