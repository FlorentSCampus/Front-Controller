<?php
session_start();
$dateFirstVisit = date('Y-m-d H:i:s');
$_SESSION['visit'];
$_SESSION['currentPage'];

if (!isset($_SESSION['date'])) {
    $_SESSION['date'] = $dateFirstVisit;
}

if (isset($_SESSION['visit'])) {
    if ($_SESSION['currentPage'] !== $_GET['page']) {
        $_SESSION['visit'] = $_SESSION['visit'] + 1;
        $_SESSION['currentPage'] = $_GET['page'];
    } else {
        $_SESSION['currentPage'] = $_GET['page'];
    }
} else {
    $_SESSION['visit'] = 1;
}
?>

<header class='sticky-top'>
    <nav class='navbar navbar-expand-lg bg-primary-subtle'>
        <div class='container-fluid'>
            <a class='navbar-brand text-primary disabled' href='index.php?page=content' aria-label='Cliquez pour être redirigé vers la homepage'>
                <svg width='329' height='186' viewBox='0 0 329 186' fill='none' xmlns='http://www.w3.org/2000/svg' style='height: 25px; width:auto;'>
                    <g style='mix-blend-mode:multiply' filter='url(#filter0_d_0_1)'>
                        <circle cx='93' cy='89' r='89' fill='#0066FF' />
                        <path d='M61.5 89.9375V85.0625C61.5 69.2708 64.9375 57.9375 71.8125 51.0625C78.6875 44.1875 87.6458 40.75 98.6875 40.75C109.312 40.75 117.562 43.2917 123.438 48.375C129.312 53.4167 132.25 61.0833 132.25 71.375V77.0625H111.375V69.375C111.375 65.0417 110.333 61.75 108.25 59.5C106.208 57.2083 103.167 56.0625 99.125 56.0625C94.625 56.0625 91.1458 57.875 88.6875 61.5C86.2708 65.125 85.0625 70.8333 85.0625 78.625V96.4375C85.0625 104.312 86.3125 110.083 88.8125 113.75C91.3542 117.375 94.8542 119.188 99.3125 119.188C103.271 119.188 106.271 118 108.312 115.625C110.354 113.25 111.375 109.438 111.375 104.188V98.25H132.25V105.062C132.292 114.271 129.375 121.438 123.5 126.562C117.625 131.646 109.333 134.188 98.625 134.188C87.0833 134.188 78 130.688 71.375 123.688C64.7917 116.688 61.5 105.438 61.5 89.9375Z' fill='white' />
                    </g>
                    <g style='mix-blend-mode:multiply' filter='url(#filter1_d_0_1)'>
                        <circle cx='236' cy='89' r='89' fill='#0049B7' />
                        <path d='M201.75 48.25V42H260.688V48.25H234.75V133H227.812V48.25H201.75Z' fill='white' />
                    </g>
                    <defs>
                        <filter id='filter0_d_0_1' x='0' y='0' width='186' height='186' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'>
                            <feFlood flood-opacity='0' result='BackgroundImageFix' />
                            <feColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha' />
                            <feOffset dy='4' />
                            <feGaussianBlur stdDeviation='2' />
                            <feComposite in2='hardAlpha' operator='out' />
                            <feColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0' />
                            <feBlend mode='normal' in2='BackgroundImageFix' result='effect1_dropShadow_0_1' />
                            <feBlend mode='normal' in='SourceGraphic' in2='effect1_dropShadow_0_1' result='shape' />
                        </filter>
                        <filter id='filter1_d_0_1' x='143' y='0' width='186' height='186' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'>
                            <feFlood flood-opacity='0' result='BackgroundImageFix' />
                            <feColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0' result='hardAlpha' />
                            <feOffset dy='4' />
                            <feGaussianBlur stdDeviation='2' />
                            <feComposite in2='hardAlpha' operator='out' />
                            <feColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0' />
                            <feBlend mode='normal' in2='BackgroundImageFix' result='effect1_dropShadow_0_1' />
                            <feBlend mode='normal' in='SourceGraphic' in2='effect1_dropShadow_0_1' result='shape' />
                        </filter>
                    </defs>
                </svg>
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link text-primary' href='index.php?page=content'>HOME</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-primary' href='index.php?page=contact'>CONTACT</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-primary' href='index.php?page=page1'>PAGE 1</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-primary' href='index.php?page=page2'>PAGE 2</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-primary' href='index.php?page=page3'>PAGE 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>