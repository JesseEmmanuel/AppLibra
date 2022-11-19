const uname = document.getElementById('uname')
const pword = document.getElementById('pword')
const form = document.getElementById('signin')
const name_error = document.getElementById('name-error')
const pass_error = document.getElementById('password-error')


form.addEventListener('submit', (e) => {
    let nameError = []
    let pwordError = []
    if (uname.value === '' || uname.value == null){
        nameError.push('Username is required')
    }

    if (pword.value === '' || pword.value == null) {
        pwordError.push('Password is required')
    }

    if (nameError.length > 0 || pword.length > 0) {
        e.preventDefault()
        name_error.innerText = nameError.join()
        pass_error.innerHTML = pwordError.join()
    }
    
})
