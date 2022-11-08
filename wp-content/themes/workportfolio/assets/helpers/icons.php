<?php function icons($icon) {
    switch($icon) {
        case 'burger': 
            return '<svg xmlns="http://www.w3.org/2000/svg" fill="#00000" viewBox="0 0 50 50" width="50px"><path d="M 0 9 L 0 11 L 50 11 L 50 9 Z M 0 24 L 0 26 L 50 26 L 50 24 Z M 0 39 L 0 41 L 50 41 L 50 39 Z"></path></svg>';
        break; 
        case 'close':
            return '<svg role="presentation" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M2.5 2.5871L21.5 21.5871" stroke="black"></path><path d="M21.5 2.5871L2.5 21.5871" stroke="black"></path></svg>';
        case 'submenu_arrow':
            return '<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><polygon fill="" fill-rule="evenodd" points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358" transform="translate(-1310 -358)"></polygon></svg>';
        break;
        }
}
?>
