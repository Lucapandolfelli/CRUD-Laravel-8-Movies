let darkTheme = localStorage.getItem("darkTheme");
const icon = document.getElementById("icon");

const enableDarkTheme = () => {
    document.body.classList.add("dark-theme");
    icon.className = "ms-2 fas fa-sun";
    localStorage.setItem("darkTheme", "enabled");
}

const disableDarkTheme = () => {
    document.body.classList.remove("dark-theme");
    icon.className = "ms-2 fas fa-moon";
    localStorage.setItem("darkTheme", null);
}

if(darkTheme === "enabled"){
    enableDarkTheme();
}

icon.addEventListener("click", () =>{
    darkTheme = localStorage.getItem("darkTheme");
    if(darkTheme !== "enabled"){
        enableDarkTheme();
    }else{
        disableDarkTheme();
    }
});

let btnActors = document.getElementById("btn-actors");
let btnGenres = document.getElementById("btn-genres");
let btnDescription = document.getElementById("btn-description");
let actorsContent = document.getElementById("actors-content");
let genresContent = document.getElementById("genres-content");
let descriptionContent = document.getElementById("description-content");

genresContent.style.display = 'none';
descriptionContent.style.display = 'none';
btnActors.className = 'btn page-btn-active';

btnActors.addEventListener('click', ()=>{
    if(actorsContent.style.display === 'none'){
        actorsContent.style.display = 'block';
        btnActors.className = 'btn page-btn-active';
        btnGenres.className = 'btn page-nav-btn';
        btnDescription.className = 'btn page-nav-btn';
        genresContent.style.display = 'none';
        descriptionContent.style.display = 'none';
    }
});

btnGenres.addEventListener('click', ()=>{
    if(genresContent.style.display === 'none'){
        genresContent.style.display = 'block';
        btnGenres.className = 'btn page-btn-active';
        btnActors.className = 'btn page-nav-btn';
        btnDescription.className = 'btn page-nav-btn';
        actorsContent.style.display = 'none';
        descriptionContent.style.display = 'none';
    }
});

btnDescription.addEventListener('click', ()=>{
    if(descriptionContent.style.display === 'none'){
        descriptionContent.style.display = 'block';
        btnDescription.className = 'btn page-btn-active';
        btnActors.className = 'btn page-nav-btn';
        btnGenres.className = 'btn page-nav-btn';
        actorsContent.style.display = 'none';
        genresContent.style.display = 'none';
    }
});