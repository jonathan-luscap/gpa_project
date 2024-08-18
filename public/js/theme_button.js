document.addEventListener('DOMContentLoaded', function () {
    const html = document.getElementById("htmlPage");
    const checkbox = document.getElementById("checkbox");
    const storedTheme = sessionStorage.getItem('theme');

    if (storedTheme) {
        console.log(storedTheme);
    }

    checkbox.addEventListener("change", () =>{
    if (checkbox.checked) {
            html.setAttribute("data-bs-theme", "dark");
            sessionStorage.setItem('theme', 'dark');
        } else {
            html.setAttribute("data-bs-theme", "light");
            sessionStorage.setItem('theme', 'light');
            console.log(sessionStorage.getItem('theme'));
        }
    })

    function applyTheme(){
        const storedTheme =  sessionStorage.getItem('theme');
        if (storedTheme === 'dark') {
            html.setAttribute("data-bs-theme", "dark");
            checkbox.checked = true;
        } else {
            html.setAttribute("data-bs-theme", "light");
            checkbox.checked = false;
            sessionStorage.setItem('theme', 'light')
        }
    }

    applyTheme();
})