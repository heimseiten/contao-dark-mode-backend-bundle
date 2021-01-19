document.addEventListener( 'DOMContentLoaded', function () {

    if ( localStorage.getItem('dark_mode_off') == 'false' ) {
        document.querySelector('body').classList.remove('dark_mode_off')
    } else {
        document.querySelector('body').classList.add('dark_mode_off')
    }
    
    var newEntry = document.createElement('li')
    newEntry.setAttribute('class','dark_mode_toggle')
    newEntry.innerHTML = '<a title="Dark Mode">Dark Mode</a>'
    
    if (document.querySelector('#tmenu li:first-child')) {
        document.querySelector('#tmenu li:first-child').before(newEntry)
    }
    
    new Tips.Contao($$('#tmenu a[title]').filter(function(i) {
        return i.title != '';
    }), {
        offset: {x:9, y:42}
    })

    if (document.querySelector('.dark_mode_toggle')) {
        document.querySelector('.dark_mode_toggle').addEventListener('click', event => {      
            if ( document.querySelector('body').classList.contains('dark_mode_off') ) {
                document.querySelector('body').classList.remove('dark_mode_off')
                localStorage.setItem('dark_mode_off', 'false')
            } else {
                document.querySelector('body').classList.add('dark_mode_off')
                localStorage.setItem('dark_mode_off', 'true')
            }
        })
    }

});
