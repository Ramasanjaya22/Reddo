const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

//change theme
themeToggler.addEventListener('click', () => {
    var SetTheme = document.body;
    SetTheme.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span').classList.toggle('active');
    var theme;
    if(SetTheme.classList.contains("dark-theme-variables")){
        
        
        theme = "DARK";
    }else{
       
        theme = "LIGHT";
    }
    localStorage.setItem("PageTheme", JSON.stringify(theme));
})

setInterval(() => {
    let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
    console.log(GetTheme);
    if(GetTheme === "DARK"){
        document.body.classList = "dark-theme-variables";
    }else{
        document.body.classList = "";
    }
}, 5);