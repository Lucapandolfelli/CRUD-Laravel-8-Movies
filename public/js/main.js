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