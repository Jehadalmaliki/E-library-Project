function togglestyle() {
    var styles = document.getElementsByTagName('link')[0];
    

    if (styles.getAttribute('href') == 'css/styleAR.css') {
        styles.setAttribute('href', 'css/styleEN.css');
      
    }
    else {
        styles.setAttribute('href', 'css/styleAR.css');
       
    }
}