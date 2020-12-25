//pokušaj čitanja pitanja iz js
let quiz = [{
        question: "Ako hoćeš da znaš kakva je država i njena uprava, i kakva im je budućnost, gledaj samo da saznaš koliko u toj zemlji ima čestitih i nevinih ljudi po zatvorima, a koliko zlikovaca i prestupnika na slobodi...” Ivo Andrić u delu:",
        ansewr: 3,
        options: [
            "Priča o vezirovom slonu",
            "Mustafa Madžar",
            "Prokleta avlija",
            "Priča o kmetu Simanu"
        ]
    },
    {
        question: "Da ste kojim slučajem Indijanac gosta biste pozvali u svoj:",
        answer: 3,
        options: [
            "amulet",
            "tomahavk",
            "vigvam",
            "chai"
        ]
    },
    {
        question: "Stari Rimljani su istoriju računali od osnivanja grada Rima (753. g. p. n. e) služeći se pri navodu godina izrazom:",
        answer: 1,
        options: [
            "ab urbe condita",
            "ex capite",
            "ab ovo",
            "ubi et orbii"
        ]
    },
    {
        question: "Najsuvlja pustinja na svetu, Atakama nalazi se na području:",
        answer: 2,
        options: [
            "Bolivije",
            "Čilea",
            "Argentine",
            "Perua"
        ]
    },
    {
        question: "Velika ljubav Sirana de Beržeraka iz istoimene drame Edmona Rostana zove se:",
        answer: 3,
        options: [
            "Laura",
            "Fedora",
            "Roksana",
            "Manon"
        ]
    },
    {
        question: "Sefardi su Jevreji koji su nekad živeli u:",
        answer: 1,
        options: [
            "Španiji",
            "Poljskoj",
            "Nemačkoj",
            "Turskoj"
        ]
    },
    {
        question: "Samo jedno od navedenih čudovišta iz grčke mitologije nema ljudsku glavu.To je: ",
        answer: 4,
        options: [
            "Meduza",
            "Harpija",
            "Kentaur",
            "Minotaur"

        ]

    },
    {
        question: "Najodlikovaniji američki vojnik u Drugom svetskom ratu bio je poznati holivudski glumac:",
        answer: 2,
        options: [
            "Gari Kuper",
            "Odi Marfi",
            "Džejms Stjuart",
            "Džon Vejn"
        ]

    },
    {
        question: "Prva zemlja u kojoj su 1893. godine žene stekle pravo glasa je:",
        answer: 4,
        options: [
            "Grčka",
            "Meksiko",
            "Japan",
            "Novi Zeland"
        ]

    },
    {
        question: "Katarina Ivanovi je u srpskoj kulturi ostavila trag kao prva žena:",
        answer: 1,
        options: [
            "slikarka",
            "kompozitorka",
            "spisateljica",
            "rediteljka"
        ]

    },
];
//deklarisanje broj pitanja,pokušaj na odgovor
let index = 0;
let questions = quiz;
let chance = 0;
//froma za unos imena
function submitForm(event) {
    event.preventDefault();
    let name = document.forms["form"]["firstname"].value;
    localStorage.setItem("firstname", name);
    console.log(name);
    location.href = "kviz.html";
}
//klikom na počni kviz otvara se nova html stranica za pitanja
function myFunction() {
    location.href = "kviz1.html";
}
//counter pitanja
let question_cnt = 0;
//klikom na dugme preskoči 
function next() {
    if (question_cnt <= 9) {
        question_cnt++;
    }
    console.log(question_cnt);
}
//tajmer
var timer = 20;

setInterval(function() {
    timer--;

    if (timer >= 0) {
        id = document.getElementById("time_left");
        id.innerHTML = timer;
    }
    if (timer === 0) {
        clearInterval(timer);
    }
    printQuestion(index);
}, 1000);
//pokušaj učitavanja pitanja,otvaraju se u konzoli samo..
function printQuestion(i) {

    console.log(questions[0]);
    $(".quest").text(questions[i].question);
    $(".btn").eq(0).text(questions[i].options[0]);
    $(".btn").eq(1).text(questions[i].options[1]);
    $(".btn").eq(2).text(questions[i].options[2]);
    $(".btn").eq(3).text(questions[i].options[3]);

}
//klikom na odustani kviz se završava na stranici kraj.html gde se prikazuju rezlutati
function result() {
    location.href = "kraj.html";
}
//provera tačnosti odgovora
function correct(options) {
    chance++;
    let sthCliked = $(options).data("opt");
    console.log(questions[index]);
    if (sthCliked == questions[index].answer) {
        $(options).addClass("true");
    } else {
        $(options).addClass("false");
    }
}