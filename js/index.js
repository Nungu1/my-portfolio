const slideImages = [
    'url(images/1.jpeg)',
    'url(images/2.png)',
    'url(images/3.jpg)',
    'url(images/4.jpg)',
    'url(images/5.jpg)',
    'url(images/6.jpg)'
]
let sliderDiv;
let greetingDiv;
let currentImageIndex = -1;

const changeSlide = () => {
    let timer = setInterval(() => {
        if (currentImageIndex < 0) {
            currentImageIndex = 0
            sliderDiv.style.backgroundImage = slideImages[currentImageIndex] 
        }
        if (currentImageIndex++ >= 0 && currentImageIndex <= slideImages.length) {
            sliderDiv.style.backgroundImage = slideImages[currentImageIndex] 
        }
        if (currentImageIndex > slideImages.length) {
            currentImageIndex = 0
            sliderDiv.style.backgroundImage = slideImages[currentImageIndex] 
        }
    }, 5000)
}

const greetingUser = () => {
    let currentTime = new Date().getHours();
    console.log(currentTime)
    if (currentTime >= 5 && currentTime < 12) {
        greetingDiv.innerHTML = "<h1>Yeppy! Good Morning</h1>"
    } 
    if (currentTime >= 12 && currentTime < 17) {
        greetingDiv.innerHTML = "<h1>Hey Hey! Good Afternoon</h1>"
    } 
    if (currentTime >= 17 && currentTime < 20) {
        greetingDiv.innerHTML = "<h1>Ooohi! Good Evening</h1>"
    } 
    if (currentTime >= 20) {
        greetingDiv.innerHTML = "<h1>Good Night</h1>"
    }
}

window.onload = () => {
    sliderDiv = document.getElementById("carousel");
    greetingDiv = document.getElementById("greeting");
    changeSlide()
    greetingUser()
}