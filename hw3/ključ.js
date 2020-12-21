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
