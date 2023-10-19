
// toggle sidebar menu

let dropdown = document.getElementsByClassName("dropdown-btn");
let i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active")
        var dropdownContent = this.parentElement.nextElementSibling
        if (dropdownContent.classList.contains('hidden')) {
            this.style.transform = 'rotate(270deg)'
            dropdownContent.classList.remove('hidden');
        } else {
            this.style.transform = 'rotate(0)'
            dropdownContent.classList.add('hidden');
        }
    });
}

// dark mode handle
let button = document.getElementById('switch-theme')
if (localStorage.theme == 'dark') {
    icon = button.children[0];
    icon.removeAttribute('d');
    icon.setAttribute('d', "M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z")
}

button.addEventListener('click', () => {
    if (document.documentElement.classList.contains('dark')) {
        localStorage.theme = 'light'
        document.documentElement.classList.toggle('light')
        location.reload();
    } else {
        localStorage.theme = 'dark'
        document.documentElement.classList.toggle('dark')
        location.reload()
    }
})