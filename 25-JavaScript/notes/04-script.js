function sayHello() {
    alert('Hello');
}

// document.getElementById('button1').addEventListener("click", sayHello);

$("#button1").on("click", sayHello);