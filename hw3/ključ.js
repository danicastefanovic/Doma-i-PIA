function submitForm(event) {
    event.preventDefault();
    let name = document.forms["form"]["firstname"].value;
    localStorage.setItem("firstname", name);
    console.log(name);
    location.href = "kviz.html";
}

function myFunction() {
    location.href = "kviz1.html";
}
let question_cnt = 0;

function next() {
    if (question_cnt <= 9) {
        question_cnt++;
    }
    console.log(question_cnt);
}
var timer = 20;

setInterval(function() {
    timer--;

    if (timer >= 0) {
        id = document.getElementById("time_left");
        id.innerHTML = timer;
    }

    if (timer === 0) {
        console.log("sledeće Pitanje");
    }
}, 1000);

let user_name = localStorage.getItem("firstname");
let user_points = localStorage.getItem("points");
document.querySelector("span.firstname").innerHTML = user_name;
document.querySelector("span.score").innerHTML = user_score;


function result() {
    location.href = "kraj.html";

}