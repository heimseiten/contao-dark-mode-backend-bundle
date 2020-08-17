document.addEventListener( 'DOMContentLoaded', function () {

    if ( localStorage.getItem('dark_mode_off') == 'true' ) {
        document.querySelector('body').classList.add('dark_mode_off')
    }    
    
    var newEntry = document.createElement('li')
    newEntry.setAttribute('class','dark_mode_toggle')
    newEntry.innerHTML = '<span></span>'
    
    document.querySelector('#tmenu .first').before(newEntry)
    
    document.querySelector('.dark_mode_toggle').addEventListener('click', event => {      
        if ( document.querySelector('body').classList.contains('dark_mode_off') ) {
            document.querySelector('body').classList.remove('dark_mode_off')
            localStorage.setItem('dark_mode_off', 'false')
        } else {
            document.querySelector('body').classList.add('dark_mode_off')
            localStorage.setItem('dark_mode_off', 'true')
        }
    })

});