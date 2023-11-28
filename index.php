<?php 
require_once __DIR__ . "/src/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Schermata-del-2023-11-16-18-05-26.ico" type="image/x-icon">
    <title>Blog Personale - Andrea Storci</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/departments.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/557a090e67.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/main.js"></script>
</head>
<body>
    <header class="container-fluid position-fixed">
        <div class="position-absolute top-50 start-50 translate-middle">
            <!--<div class="row set-rounded">
                <div class="col col-logo">
                    <h3 class="title-logo">iLearn</h3>
                </div>
                <div class="col"></div>
                <div class="col col-menu position-relative">
                    <div class="">
                        <ul class="menu">
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">Appunti</a>
                            </li>
                            <li>
                                <a href="">Contatti</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <nav class="navbar navbar-expand-lg box-sw-stripe set-rounded" id="navbar-header">
                <div class="container-fluid">
                    <!--
                    BOTTONE PER CAMBIO TEMA (SCURO-CHIARO)
                    <a class="btn-search box-change-theme">
                        <i class="fa-solid fa-sun fa-2xl prova-anim" style="color: #ffffff;"></i>
                    </a>-->
                    <a class="navbar-brand title-logo">
                        <img src="assets/img/logo_sfondo_trasparente.png" alt="Logo iLearn">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 margin-fix">
                            <li id="dropdown-appunti" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!--<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                        <path fill="#d6e5e5" d="M43.48,37.246c0-4.804,0.214-4.386,0.185-9.82c-0.005-0.871,0.076-3.731,0.014-4.599	c-0.29-4.085-0.045-6.165-0.186-8.305c-0.189-2.869,1.127-6.411-1.323-8.573c-1.606-1.417-4.193-1.29-5.385-1.265	c-4.477,0.095-9.617,0.56-13.402,0.604c-7.528,0.086-7.241-0.582-13.634-0.753C8.489,4.5,7.403,4.825,6.278,5.712	c-1.016,0.801-2.049,2.6-2.193,6.601c-0.175,4.86-0.266,8.264,0.081,13.132c-0.02,0.84-0.04,1.676-0.061,2.515	c-0.094,1.526,0.175,3.031,0.199,4.551c0.02,1.225,0.057,3.94,0.159,5.194s0.569,4.311,2.297,5.133	c0.484,0.231,1.026,0.303,1.548,0.427c0.98,0.233,7.274-0.203,7.787-0.254c4.804-0.48,4.804,0,9.609,0c1.334,0,5.393-0.027,6.726,0	c3.375,0.069,5.175,0.09,6.246,0C42.347,42.702,43.48,40.129,43.48,37.246"></path><path fill="#fdd14f" d="M42.178,5.948c-1.606-1.417-4.193-1.29-5.385-1.265c-4.477,0.095-9.617,0.56-13.402,0.604	c-7.528,0.086-7.241-0.582-13.634-0.753C8.497,4.5,7.411,4.824,6.286,5.711c-1.016,0.801-2.049,2.6-2.193,6.601	c-0.057,1.593-0.103,3.023-0.13,4.406l0.475,0.252c6.173,0.529,9.315,0.203,15.614,0.351c1.964,0.046,9.256-0.349,11.221-0.351	c4.578-0.004,6.945-0.055,12.016,0.28l0.257-0.134c0.008-0.936,0.011-1.763-0.044-2.596C43.312,11.653,44.628,8.11,42.178,5.948z"></path><path fill="#010101" d="M9.574,43.833c-0.631,0-1.127-0.023-1.374-0.082l-0.376-0.083c-0.419-0.088-0.852-0.18-1.27-0.379	c-2.056-0.978-2.495-4.49-2.581-5.544c-0.097-1.194-0.136-3.66-0.156-4.985l-0.004-0.241c-0.01-0.601-0.059-1.2-0.107-1.799	c-0.074-0.906-0.15-1.844-0.091-2.791l0.06-2.496c-0.343-4.783-0.259-8.157-0.08-13.138c0.125-3.481,0.927-5.829,2.383-6.977	c1.16-0.914,2.372-1.31,3.792-1.285c2.788,0.075,4.301,0.242,5.764,0.403c1.858,0.205,3.609,0.396,7.852,0.351	c1.915-0.021,4.162-0.151,6.541-0.288c2.285-0.132,4.648-0.269,6.856-0.315l0.161-0.004c1.26-0.03,3.883-0.091,5.566,1.394	c1.941,1.713,1.746,4.217,1.574,6.425c-0.069,0.88-0.133,1.711-0.082,2.49c0.059,0.901,0.052,1.779,0.043,2.797	c-0.013,1.464-0.026,3.124,0.142,5.506c0.043,0.606,0.021,2.094,0.002,3.289c-0.009,0.567-0.017,1.061-0.015,1.343	c0.015,2.891-0.039,4.155-0.091,5.379c-0.046,1.079-0.094,2.195-0.094,4.443c0,3.754-1.869,5.979-5.262,6.264	c-1.074,0.09-2.811,0.073-6.298,0.002c-0.958-0.02-3.326-0.012-5.073-0.005l-1.643,0.005c-1.851,0-2.976-0.069-3.969-0.131	c-1.545-0.096-2.662-0.164-5.59,0.128C16.103,43.514,11.917,43.833,9.574,43.833z M9.588,5.031c-1.127,0-2.056,0.334-2.992,1.072	C5.761,6.762,4.735,8.377,4.593,12.33c-0.178,4.948-0.261,8.298,0.08,13.079l-0.059,2.562c-0.055,0.895,0.015,1.756,0.089,2.668	c0.05,0.62,0.1,1.24,0.11,1.863l0.004,0.241c0.021,1.313,0.059,3.759,0.153,4.921c0.154,1.893,0.764,4.127,2.013,4.722	c0.311,0.147,0.668,0.224,1.047,0.303c0.134,0.028,0.268,0.058,0.401,0.089c0.844,0.201,6.909-0.194,7.621-0.265	c3.009-0.303,4.159-0.231,5.752-0.132c0.979,0.061,2.087,0.129,3.907,0.129l1.639-0.005c1.757-0.005,4.136-0.014,5.097,0.005	c3.451,0.071,5.166,0.088,6.194,0.002c2.884-0.242,4.346-2.015,4.346-5.268c0-2.27,0.048-3.396,0.095-4.486	c0.052-1.211,0.106-2.464,0.091-5.33c-0.001-0.287,0.006-0.788,0.015-1.363c0.017-1.114,0.041-2.641,0-3.204	c-0.172-2.421-0.157-4.175-0.145-5.584c0.008-0.998,0.016-1.859-0.042-2.723c-0.056-0.852,0.015-1.758,0.083-2.634	c0.169-2.168,0.329-4.215-1.238-5.598c-1.39-1.226-3.66-1.171-4.88-1.144l-0.163,0.004c-2.19,0.046-4.544,0.182-6.82,0.313	c-2.391,0.138-4.65,0.268-6.587,0.29c-4.305,0.049-6.085-0.148-7.973-0.356c-1.442-0.159-2.935-0.324-5.681-0.397	C9.691,5.031,9.639,5.031,9.588,5.031z"></path><path fill="#010101" d="M8.429,21.521c-0.215,0-0.426-0.079-0.583-0.235c-0.105-0.106-0.182-0.241-0.229-0.403	c-0.104-0.36-0.029-0.743,0.197-0.998c0.155-0.176,0.381-0.284,0.62-0.297c0.224-0.012,0.434,0.061,0.592,0.206	c0.085,0.078,0.137,0.159,0.175,0.218c0.013,0.02,0.024,0.039,0.033,0.06c0.073,0.079,0.121,0.182,0.13,0.297	c0.03,0.363-0.089,0.696-0.327,0.915C8.866,21.441,8.646,21.521,8.429,21.521z"></path><path fill="#010101" d="M17.265,21.396c-0.275,0-0.56-0.13-0.697-0.354c-0.135-0.223-0.144-0.454-0.15-0.606	c-0.01-0.266,0.147-0.521,0.286-0.657c0.183-0.186,0.472-0.233,0.714-0.118c0,0,0.172,0.099,0.221,0.173	c0.032,0.049,0.107,0.215,0.107,0.215c0.079,0.094,0.171,0.223,0.219,0.389c0.1,0.344-0.041,0.709-0.333,0.869	C17.522,21.368,17.395,21.396,17.265,21.396z"></path><path fill="#010101" d="M24.831,21.418c-0.167,0-0.33-0.059-0.473-0.171c-0.109-0.048-0.23-0.232-0.245-0.443	c-0.021-0.293,0.156-0.559,0.341-0.692c0.302-0.216,0.741-0.178,0.999,0.09c0.082,0.085,0.127,0.191,0.138,0.3	c0.055,0.129,0.054,0.279-0.018,0.415c-0.14,0.263-0.35,0.436-0.594,0.486C24.93,21.413,24.88,21.418,24.831,21.418z"></path><path fill="#010101" d="M39.712,20.97l-0.088-0.016c-0.371-0.067-0.641-0.401-0.629-0.777	c0.013-0.373,0.312-0.696,0.682-0.736c0.123-0.015,0.24,0.019,0.334,0.083c0.131,0.035,0.244,0.124,0.305,0.261	c0.13,0.289,0.136,0.572,0.017,0.797c-0.104,0.198-0.293,0.331-0.533,0.373L39.712,20.97z"></path><path fill="#010101" d="M32.636,21.194c-0.101,0-0.209-0.021-0.326-0.07l-0.134-0.084c-0.229-0.201-0.312-0.48-0.221-0.749	c0.118-0.353,0.512-0.566,0.822-0.59c0.282-0.023,0.516,0.187,0.535,0.463c0.002,0.027,0.002,0.054,0,0.08	c0.062,0.252,0.006,0.527-0.159,0.718C33.042,21.089,32.861,21.194,32.636,21.194z"></path><path fill="#010101" d="M28.081,38.456c-2.793,0-5.525-0.091-8.204-0.181c-5.149-0.175-10.013-0.335-15.093,0.105	c-0.283,0.017-0.518-0.18-0.542-0.455c-0.024-0.274,0.18-0.518,0.455-0.541c5.14-0.447,10.033-0.281,15.213-0.109	c4.564,0.154,9.283,0.312,14.175,0.01c0.773-0.048,1.387-0.053,1.979-0.057c0.758-0.006,1.473-0.011,2.449-0.11	c1.45-0.146,3.176-0.29,5-0.205c0.276,0.012,0.489,0.245,0.477,0.521s-0.241,0.514-0.522,0.477c-1.756-0.076-3.44,0.059-4.854,0.201	c-1.022,0.104-1.761,0.11-2.543,0.116c-0.575,0.004-1.172,0.008-1.924,0.055C32.092,38.41,30.071,38.456,28.081,38.456z"></path><path fill="#010101" d="M36.566,32.446c-0.192,0-0.385-0.001-0.582-0.004c-2.427-0.035-3.999-0.133-5.519-0.228	c-1.511-0.094-3.073-0.191-5.48-0.226c-0.893-0.022-2.075,0.088-3.333,0.195c-1.486,0.126-3.17,0.261-4.732,0.258	c-0.595-0.004-1.759-0.076-2.884-0.146c-0.973-0.06-1.917-0.118-2.422-0.128c-0.82-0.014-1.595,0.002-2.356,0.019	c-1.631,0.038-3.169,0.071-4.918-0.209c-0.272-0.044-0.458-0.301-0.414-0.573c0.044-0.273,0.292-0.458,0.573-0.415	c1.659,0.268,3.154,0.233,4.737,0.198c0.773-0.019,1.562-0.034,2.398-0.02c0.514,0.01,1.474,0.069,2.464,0.13	c1.113,0.068,2.263,0.14,2.83,0.144c1.531-0.002,3.176-0.131,4.64-0.255c1.285-0.109,2.494-0.214,3.433-0.198	c2.432,0.034,4.006,0.133,5.528,0.228c1.508,0.094,3.068,0.191,5.471,0.226c2.446,0.036,4.531-0.157,7.44-0.455	c0.27-0.033,0.52,0.171,0.548,0.446c0.028,0.274-0.172,0.521-0.447,0.548C40.829,32.26,38.818,32.446,36.566,32.446z"></path><path fill="#010101" d="M19.295,25.873c-2.08,0-3.939-0.046-5.752-0.091c-3.031-0.074-5.892-0.145-9.38,0.009	c-0.253,0.037-0.509-0.201-0.521-0.477c-0.012-0.276,0.202-0.51,0.478-0.521c3.521-0.157,6.399-0.087,9.449-0.011	c2.416,0.061,4.914,0.124,7.9,0.073c6.294-0.102,15.379-0.311,22.001-0.593c0.262,0.011,0.509,0.202,0.521,0.479	c0.012,0.276-0.202,0.51-0.479,0.521c-6.632,0.281-15.727,0.491-22.027,0.593C20.726,25.868,19.998,25.873,19.295,25.873z"></path><path fill="#010101" d="M20.424,17.825c-0.144,0-0.272-0.001-0.384-0.004c-2.257-0.053-4.081-0.045-5.842-0.037	c-3.125,0.016-5.826,0.025-9.802-0.315c-0.275-0.023-0.479-0.266-0.456-0.541c0.023-0.275,0.263-0.477,0.541-0.455	c3.933,0.337,6.613,0.325,9.713,0.312c1.77-0.009,3.599-0.017,5.87,0.037c1.088,0.031,3.91-0.089,6.404-0.19	c2.021-0.082,3.93-0.159,4.805-0.16l1.538-0.003c3.624-0.005,6.022-0.013,10.512,0.284c0.275,0.019,0.484,0.257,0.466,0.532	c-0.019,0.275-0.257,0.487-0.532,0.466c-4.456-0.295-6.84-0.29-10.443-0.282l-1.539,0.003c-0.855,0.001-2.754,0.078-4.765,0.159	C24.142,17.727,21.703,17.825,20.424,17.825z"></path><path fill="#010101" d="M12.876,21.346c-0.222,0-0.361-0.104-0.428-0.171c0,0-0.097-0.112-0.119-0.155	c-0.057-0.107-0.054-0.264-0.054-0.264c-0.029-0.487,0.201-0.869,0.585-0.965c0.008-0.002,0.016-0.003,0.023-0.005	c0.213-0.059,0.447-0.008,0.626,0.143c0.221,0.185,0.322,0.478,0.259,0.747c-0.083,0.354-0.409,0.62-0.809,0.665	C12.931,21.344,12.903,21.346,12.876,21.346z"></path><path fill="#010101" d="M21.163,21.163c-0.115,0-0.235-0.025-0.352-0.076c-0.351-0.152-0.575-0.489-0.555-0.836	c0.014-0.263,0.184-0.508,0.432-0.624c0.191-0.087,0.405-0.089,0.584-0.002c0.084,0.026,0.135,0.058,0.21,0.11	c0.239,0.162,0.365,0.378,0.391,0.613c0.024,0.226-0.045,0.443-0.191,0.598C21.548,21.089,21.362,21.163,21.163,21.163z M20.782,20.491c0.016,0.012,0.034,0.022,0.052,0.032L20.782,20.491z"></path><path fill="#010101" d="M28.685,20.999c-0.212,0-0.415-0.085-0.552-0.237c-0.214-0.234-0.245-0.601-0.072-0.869	c0.152-0.236,0.437-0.364,0.711-0.322c0.223-0.017,0.439,0.079,0.567,0.245c0.098,0.129,0.191,0.353,0.072,0.691	c-0.085,0.243-0.297,0.422-0.567,0.476C28.791,20.993,28.738,20.999,28.685,20.999z"></path><path fill="#010101" d="M36.305,21.336c-0.084,0-0.189-0.01-0.3-0.055c-0.274-0.113-0.438-0.388-0.398-0.669	c0.033-0.263,0.13-0.464,0.29-0.604c0.096-0.121,0.236-0.203,0.399-0.229c0.243-0.041,0.499,0.056,0.651,0.243	c0.112,0.139,0.229,0.384,0.143,0.762l-0.025,0.111l-0.109,0.182c-0.188,0.235-0.466,0.251-0.558,0.256	C36.371,21.335,36.339,21.336,36.305,21.336z M36.27,20.354h0.01H36.27z"></path>
                                    </svg>-->
                                    Appunti
                                </a>
                                <ul class="dropdown-menu fix-dropwdown-menu box-sw-stripe">
                                    <li>
                                        <p>
                                            Dipartimenti disponibili
                                        </p>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="opacity: .6;">
                                    <!--<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                        <path fill="#d6e5e5" d="M44.331,37.798c0-5,0.164-3.146,0.16-7.645c-0.004-3.752-0.686-4.392-0.532-7.081	c0.127-2.228,0.533-6.695,0.386-8.922c-0.2-3.044,0.242-6.066-2.555-8.229c-1.768-1.367-4.504-2.003-6.676-2.111	c-2.172-0.108-5.829,0.08-7.998-0.077c-6.082-0.439-4.617,0.1-10.251-0.128c-2.056-0.083-7.528-0.05-10.019,1.504	c-1.68,1.048-3.059,4.106-3.016,7.476c0.057,4.447,0.118,6.681,0.095,11.128c-0.009,1.699-0.098,3.553-0.106,5.253	c-0.007,1.371,0.257,4.528,0.279,5.899c0.02,1.275,0.099,4.203,0.205,5.508c0.106,1.305,1.143,2.679,2.286,3.32	c1.5,0.841,4.143,0.734,4.996,0.809c1.044,0.093,4.895-0.048,5.431-0.031c5.172,0.161,12.527-0.35,15.177-0.338	c3.513,0.016,5.052,0.001,7.138-0.335C42.333,43.314,44.523,41.707,44.331,37.798"></path><path fill="#73a1b2" d="M21.279,18.765c-0.96-0.179-1.997,0.123-2.71,0.79s-1.018,1.27-1.108,2.435	c-0.039,0.505,0.248,1.464,0.451,1.928c0.329,0.752,0.913,1.268,1.679,1.562c0.479,0.183,1.325,0.199,1.834,0.132	c0.779-0.103,2.072-0.634,2.81-1.601c0.722-0.946,0.713-2.345,0.109-3.37c-0.605-1.025-1.757-1.675-2.943-1.774"></path><path fill="#73a1b2" d="M30.405,33.411h-0.283c-1.522-1.801-4.482-3.254-6.785-3.764c-2.302-0.51-4.724-0.359-7.004,0.242	c-1.915,0.505-3.845,1.406-4.94,3.056l-0.057,0.214c2.624,3.051,7.092,4.019,11.161,3.781c2.664-0.156,5.491-0.82,7.286-2.794	C29.973,33.935,30.186,33.683,30.405,33.411z"></path><path fill="#010101" d="M21.347,37.473c-2.935,0-7.994-0.621-10.851-4.513c-1.364-1.857-2.095-4.281-2.299-7.627	c-0.165-2.702,0.061-4.821,0.712-6.67c2.123-6.027,8.438-8.388,13.582-7.615c4.199,0.36,9.141,2.761,10.729,7.315	c0.486,1.397,1.016,4.081,0.995,5.582c-0.04,3.031-0.552,4.479-1.798,7.295c-0.445,1.006-1.485,2.385-2.264,3.24	c-1.599,1.76-4.165,2.755-7.626,2.958C22.192,37.458,21.794,37.473,21.347,37.473z M20.549,11.904	c-4.321,0-8.994,2.255-10.697,7.091c-0.605,1.719-0.814,3.713-0.657,6.277c0.192,3.146,0.861,5.4,2.106,7.096	c3.003,4.09,8.808,4.21,11.166,4.072c3.192-0.188,5.528-1.073,6.945-2.632c0.749-0.824,1.707-2.109,2.09-2.973	c1.213-2.74,1.675-4.045,1.712-6.904c0.019-1.378-0.489-3.947-0.939-5.239c-1.442-4.138-6.004-6.321-9.885-6.649l-0.033-0.004	C21.768,11.949,21.161,11.904,20.549,11.904z"></path><path fill="#71c598" d="M44.345,34.113c-1.442,0.078-5.176-0.078-6.618,0l0.341,9.857c0,0,3.224-0.328,4.872-1.798	C45.21,40.149,44.345,34.113,44.345,34.113z"></path><path fill="#f58420" d="M44.345,34.113c-1.442,0.078-5.176-0.078-6.618,0l-0.05-10.068c1.352,0.099,4.295,0,5.647-0.091	l0.388-0.015l0.514,2.664l0.265,3.551L44.345,34.113z"></path><path fill="#010101" d="M30.122,33.911c-0.142,0-0.283-0.061-0.382-0.178c-1.471-1.74-4.389-3.128-6.511-3.599	c-2.087-0.463-4.428-0.381-6.769,0.237c-2.22,0.586-3.785,1.544-4.651,2.849c-0.153,0.23-0.463,0.291-0.693,0.141	c-0.23-0.153-0.293-0.463-0.14-0.693c1.005-1.516,2.765-2.613,5.229-3.263c2.494-0.656,4.998-0.744,7.24-0.247	c2.216,0.491,5.369,1.931,7.059,3.931c0.179,0.211,0.151,0.526-0.06,0.704C30.351,33.872,30.236,33.911,30.122,33.911z"></path><path fill="#16b7b8" d="M43.324,23.953c-1.353,0.092-3.978,0.084-5.33-0.015V14.16c1.254,0.16,5.088,0.058,6.35-0.01	l-0.097,4.565l-0.312,5.097L43.324,23.953z"></path><path fill="#010101" d="M20.8,26.147c-0.462,0-0.994-0.05-1.387-0.201c-0.91-0.348-1.587-0.979-1.959-1.827	c-0.183-0.418-0.543-1.497-0.492-2.168c0.096-1.256,0.427-1.979,1.265-2.762c0.827-0.773,2.034-1.127,3.143-0.916	c0.09,0.017,0.169,0.056,0.233,0.111c1.326,0.159,2.53,0.916,3.171,2.001c0.733,1.243,0.674,2.857-0.142,3.928	c-0.803,1.052-2.191,1.667-3.142,1.794C21.31,26.131,21.066,26.147,20.8,26.147z M20.724,19.214c-0.664,0-1.329,0.253-1.814,0.706	c-0.651,0.609-0.874,1.102-0.951,2.107c-0.028,0.36,0.198,1.204,0.411,1.69c0.266,0.605,0.737,1.041,1.4,1.295	c0.363,0.14,1.116,0.165,1.589,0.103c0.604-0.08,1.811-0.533,2.479-1.409c0.567-0.742,0.599-1.926,0.076-2.812	c-0.504-0.854-1.483-1.44-2.554-1.529c-0.114-0.009-0.216-0.057-0.294-0.128C20.952,19.222,20.838,19.214,20.724,19.214z"></path><path fill="#010101" d="M37.728,44.505c-0.031,0-0.062-0.003-0.093-0.009c-0.271-0.05-0.45-0.312-0.399-0.583	c0.19-1.024,0.116-2.533,0.052-3.865c-0.031-0.639-0.061-1.244-0.061-1.757c0-2.31-0.033-4.404-0.064-6.396	c-0.058-3.645-0.112-7.086,0.065-10.831c0.295-6.217,0.212-11.307-0.27-16.503c-0.025-0.274,0.177-0.519,0.452-0.544	c0.27-0.018,0.518,0.176,0.544,0.452c0.485,5.244,0.569,10.377,0.271,16.642c-0.176,3.714-0.124,6.982-0.063,10.768	c0.031,1.998,0.064,4.098,0.064,6.413c0,0.498,0.029,1.087,0.06,1.708c0.067,1.387,0.145,2.958-0.068,4.098	C38.174,44.337,37.963,44.505,37.728,44.505z"></path><path fill="#010101" d="M43.175,34.636c-0.632,0-1.372-0.012-2.137-0.022c-1.268-0.021-2.579-0.038-3.284-0.001	c-0.293,0.036-0.512-0.196-0.526-0.472c-0.016-0.276,0.196-0.512,0.472-0.526c0.742-0.041,2.07-0.021,3.354-0.001	c1.261,0.018,2.562,0.038,3.266,0.001c0.283-0.028,0.512,0.197,0.525,0.473c0.015,0.275-0.196,0.511-0.473,0.525	C44.057,34.63,43.646,34.636,43.175,34.636z"></path><path fill="#010101" d="M40.824,24.519c-1.059,0-2.135-0.027-2.867-0.081c-0.275-0.021-0.481-0.261-0.462-0.536	c0.021-0.275,0.263-0.482,0.536-0.462c1.325,0.099,3.932,0.106,5.259,0.015c0.269-0.023,0.514,0.189,0.533,0.465	c0.019,0.275-0.189,0.515-0.465,0.533C42.702,24.496,41.771,24.519,40.824,24.519z"></path><path fill="#010101" d="M40.356,14.745c-0.996,0-1.91-0.023-2.425-0.089c-0.274-0.035-0.469-0.285-0.434-0.559	c0.035-0.275,0.297-0.471,0.559-0.434c1.188,0.151,4.926,0.059,6.261-0.014c0.314-0.025,0.512,0.196,0.526,0.472	c0.016,0.276-0.196,0.512-0.472,0.526C43.611,14.689,41.888,14.745,40.356,14.745z"></path><path fill="#010101" d="M21.347,37.473c-2.935,0-7.994-0.621-10.851-4.513c-1.364-1.857-2.095-4.281-2.299-7.627	c-0.165-2.702,0.061-4.821,0.712-6.67c2.123-6.027,8.438-8.388,13.582-7.615c4.199,0.36,9.141,2.761,10.729,7.315	c0.486,1.397,1.016,4.081,0.995,5.582c-0.04,3.031-0.552,4.479-1.798,7.295c-0.445,1.006-1.485,2.385-2.264,3.24	c-1.599,1.76-4.165,2.755-7.626,2.958C22.192,37.458,21.794,37.473,21.347,37.473z M20.549,11.904	c-4.321,0-8.994,2.255-10.697,7.091c-0.605,1.719-0.814,3.713-0.657,6.277c0.192,3.146,0.861,5.4,2.106,7.096	c3.003,4.09,8.808,4.21,11.166,4.072c3.192-0.188,5.528-1.073,6.945-2.632c0.749-0.824,1.707-2.109,2.09-2.973	c1.213-2.74,1.675-4.045,1.712-6.904c0.019-1.378-0.489-3.947-0.939-5.239c-1.442-4.138-6.004-6.321-9.885-6.649l-0.033-0.004	C21.768,11.949,21.161,11.904,20.549,11.904z"></path><path fill="#010101" d="M12.816,45.035c-0.539,0-0.997-0.01-1.276-0.034c-0.162-0.015-0.391-0.021-0.666-0.03	c-1.205-0.04-3.221-0.106-4.531-0.841c-1.358-0.762-2.426-2.325-2.54-3.716c-0.11-1.362-0.188-4.376-0.206-5.541	c-0.01-0.614-0.069-1.589-0.129-2.599c-0.075-1.25-0.153-2.542-0.149-3.311c0.004-0.853,0.029-1.745,0.053-2.638	c0.024-0.884,0.049-1.769,0.053-2.615c0.017-3.357-0.015-5.493-0.055-8.196L3.33,12.592C3.287,9.213,4.654,5.888,6.581,4.686	c2.86-1.784,9.086-1.626,10.304-1.581c2.529,0.103,3.629,0.05,4.602,0.001c1.239-0.061,2.306-0.113,5.666,0.129	c1.15,0.082,2.755,0.069,4.307,0.052c1.371-0.012,2.666-0.024,3.679,0.024c1.026,0.051,4.562,0.362,6.958,2.215	c2.523,1.951,2.605,4.574,2.685,7.11c0.016,0.49,0.03,0.985,0.063,1.48c0.114,1.741-0.095,4.722-0.263,7.117	c-0.049,0.707-0.094,1.348-0.124,1.867c-0.073,1.285,0.054,2.09,0.2,3.022c0.155,0.987,0.331,2.106,0.333,4.03	c0.002,2.215-0.036,2.896-0.076,3.615c-0.041,0.731-0.084,1.486-0.084,4.017c0.18,3.71-1.645,5.898-5.421,6.506	c-2.164,0.351-3.777,0.355-7.219,0.343c-0.997-0.008-2.55,0.061-4.396,0.136c-3.333,0.136-7.48,0.302-10.794,0.202	c-0.172-0.006-0.704,0.006-1.373,0.021C14.754,45.012,13.681,45.035,12.816,45.035z M15.543,4.081c-2.175,0-6.388,0.177-8.433,1.452	C5.73,6.395,4.286,9.157,4.33,12.578L4.371,15.5c0.04,2.709,0.072,4.849,0.055,8.217c-0.004,0.853-0.029,1.745-0.053,2.638	c-0.024,0.884-0.049,1.769-0.053,2.615c-0.004,0.734,0.073,2.011,0.147,3.244c0.062,1.027,0.121,2.019,0.131,2.644	c0.018,1.155,0.094,4.138,0.203,5.476c0.087,1.065,0.96,2.323,2.032,2.924c1.098,0.616,2.961,0.678,4.075,0.714	c0.297,0.01,0.545,0.019,0.721,0.034c0.671,0.059,2.66,0.017,3.977-0.012c0.694-0.016,1.242-0.027,1.426-0.021	c3.273,0.1,7.405-0.067,10.723-0.201c1.86-0.075,3.488-0.138,4.44-0.137c3.388,0.011,4.969,0.008,7.056-0.329	c3.239-0.521,4.737-2.314,4.581-5.482l-0.001-0.024c0-2.568,0.043-3.339,0.085-4.085c0.04-0.706,0.077-1.372,0.075-3.559	c-0.001-1.847-0.171-2.925-0.32-3.876c-0.156-0.988-0.29-1.843-0.211-3.234c0.03-0.523,0.075-1.169,0.125-1.88	c0.157-2.24,0.372-5.31,0.262-6.981c-0.033-0.507-0.05-1.014-0.065-1.516c-0.078-2.516-0.146-4.688-2.296-6.351	c-1.722-1.331-4.433-1.909-6.396-2.008c-0.982-0.049-2.265-0.035-3.619-0.022c-1.569,0.019-3.195,0.032-4.389-0.054	c-3.297-0.237-4.339-0.187-5.544-0.128c-0.994,0.049-2.118,0.104-4.691,0C16.678,4.098,16.205,4.081,15.543,4.081z"></path>
                                    </svg>-->
                                    Contatti
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="opacity:  .6;">
                                    <!--<img src="data:image/png;base64,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" style="width: 30px;">-->
                                    Aiutaci
                                </a>
                            </li>
                        </ul>
                        <div class="search-container navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/img/icons8-bandiera-italiana-96.png" alt="Lingua Italiana">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/img/icons8-francia-96.png" alt="Lingua Francese">
                                            Français
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/img/icons8-gran-bretagna-96.png" alt="Lingua Inglese">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/img/icons8-spagna-2-96.png" alt="Lingua Spagnola">
                                            Español
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <form action="#" method="get" class="search-form">
                                <div class="search-box">
                                    <button class="btn-search">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <input type="text" class="input-search" placeholder="Type to Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- SECTION PARALLAX -->
    <section class="img-parallax position-relative" id="img-parallax-id">
        <!--<img id="tl" src="assets/img/INDEX/books-upper-third-lvl.png" class="position-absolute parallax-img third-level-img">
        <img id="sl" src="assets/img/INDEX/books-middle-second-lvl.png" class="position-absolute parallax-img second-level-img">
        <img id="fl" src="assets/img/INDEX/books-bottom-first-lvl-prova-ritaglio.png" class="position-absolute parallax-img first-level-img">-->
        <div class="position-absolute vignette"></div>
        <img src="assets/img/Prova 2/Sfondo.png" data-speedx="0.3" data-speedy="0.28" class="position-absolute parallax-img parallax-bg">
        <img src="assets/img/Prova 2/Livello 1.png" data-speedx="0.04" data-speedy="0.038" class="position-absolute parallax-img parallax-img-first">
        <img src="assets/img/Prova 2/Livello 2.png" data-speedx="0.06" data-speedy="0.058" class="position-absolute parallax-img parallax-img-2">
        <img src="assets/img/Prova 2/Livello 3.png" data-speedx="0.1" data-speedy="0.08" class="position-absolute parallax-img parallax-img-3">
        <img src="assets/img/Prova 2/Livello 4.png" data-speedx="0.13" data-speedy="0.1" class="position-absolute parallax-img parallax-img-4">
        <img src="assets/img/Prova 2/Livello 5.png" data-speedx="0.15" data-speedy="0.12" class="position-absolute parallax-img parallax-img-5">
        <img src="assets/img/Prova 2/Livello 6.png" data-speedx="0.18" data-speedy="0.15" class="position-absolute parallax-img parallax-img-6">
        <img src="assets/img/Prova 2/Livello 7.png" data-speedx="0.19" data-speedy="0.16" class="position-absolute parallax-img parallax-img-7">
        <img src="assets/img/Prova 2/Livello 8.png" data-speedx="0.2" data-speedy="0.18" class="position-absolute parallax-img parallax-img-8">
        <img src="assets/img/Prova 2/Livello 9.png" data-speedx="0.215" data-speedy="0.210" class="position-absolute parallax-img parallax-img-9">
        <img src="assets/img/Prova 2/Livello 10.png" data-speedx="0.225" data-speedy="0.220" class="position-absolute parallax-img parallax-img-10">
        <img src="assets/img/Prova 2/Livello 11.png" data-speedx="0.235" data-speedy="0.230" class="position-absolute parallax-img parallax-img-11">
        <img src="assets/img/Prova 2/Livello 12.png" data-speedx="0.245" data-speedy="0.240" class="position-absolute parallax-img parallax-img-12">
        <img src="assets/img/Prova 2/Livello 13.png" data-speedx="0.255" data-speedy="0.250" class="position-absolute parallax-img parallax-img-13">
        <h1 class="position-absolute top-50 start-50 translate-middle">
            <b>Studiare</b> non è mai stato così <span style="color: #00ADB5; font-weight: bolder;">facile</span>
        </h1>
        <a class="position-absolute btn-godown" href="#section-novita">
            <span>Visita i nostri Appunti</span>
            <div class="position-relative" style="padding-top: 50px;">
                <img style="width: 40px;" class="position-absolute top-50 start-50 translate-middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKElEQVR4nO2W60rDQBBG1zesoSU/9PUFQ1tfQOFIQNFiLpvN3Cxz/gVmwhw2s/lKSZIkSbwBTsAFeAEOJRjAI/AKvAH9XNEDcOaH99liB4D+a6ZvruPMc8XDr8IwMvyVGBmWGrqJBlcZpiXG526t8TjR+AE8m01/u7NTszyVGiLIsFciggxSEp4ySEt4yKAlYSmjLmEhYyahKWMuoSGjudinmtC48LetTgAt70AjNO6RaZTo1UKj0ECtPYNoaNwymLB4NyvSusw1PS2LjUdoXOpxkVD6DNT3yOpk7E9CWcZHQljGV0JIJoaEwAVgt9h3FRotZdwlJGTCSOy8AGJJtMiEldAOjS5Ih0ZXpEJjCPaGxlC0hsaQbA2NoaEyNP4LWAmNSZIkZQuflSDRkUYmNwIAAAAASUVORK5CYII=">
            </div>
        </a>
    </section> <!-- END SECTION PARALLAX -->

    <!-- SECTION NEWS -->
    <section class="container-fluid news" id="section-novita">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="container box-effect box-spotify box-sw-tailwind">
                        <div class="box-effect-novita">
                            Novità!
                        </div>
                        <div class="row">
                            <div class="col col-3">
                                <img src="data:image/png;base64,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">
                            </div>
                            <div class="col col-9">
                                <div style="font-size: 35px; padding-top: 30px;">
                                    Studia con <b style="color: #6CBD0F;">Spotify</b>
                                </div>
                            </div>
                        </div>
                        <span>
                            Playlist creata apposta per farti concentrare
                        </span>
                        <hr>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7rJ1zBNNIjSBqPhGhc5JBe?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                        <!--<button class="btn btn-success btn-goto-spotify">
                            Vai alla Playlist
                        </button>-->
                    </div>
                </div>
                <div class="col-5">
                    <div class="container box-effect box-effect-paypal box-sw-tailwind">
                        <div class="row">
                            <div class="col col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256" style="fill:#000000; padding: 20px 0 0 10px;">
                                    <g fill="#fcc419" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11.40625,2c-1,0 -1.89453,0.6875 -2.09375,1.6875c0,0 -5.89844,27.00781 -7,32.40625c-0.19922,1.10156 0.07422,1.69531 0.375,2.09375c0.39844,0.5 1.01172,0.8125 1.8125,0.8125h7.5l5.90625,-27.1875c0.19922,-1 1.10547,-2.8125 3.90625,-2.8125h16.1875c-1.39844,-4.60156 -5.89453,-7 -10.09375,-7zM22,11.09375l-1.59375,0.3125c-0.30078,0.19922 -0.49219,0.60547 -0.59375,0.90625l-2.40625,11.1875c0.69922,-0.30078 1.38672,-0.40625 2.1875,-0.40625h7.21875c6.39844,0 9.98828,-2.58594 11.1875,-8.1875c0.19922,-1 0.3125,-1.79297 0.3125,-2.59375l-0.125,-1.125v-0.09375zM40.09375,11.3125l0.09375,0.6875c0.10156,1 -0.08203,1.89453 -0.28125,3.09375c-1.39844,6.5 -5.91797,9.8125 -13.21875,9.8125h-7.1875c-1.60156,0 -2.69922,0.69922 -3,2c-0.39844,1.80078 -3.89844,18.29297 -4,18.59375c-0.10156,0.5 0.00781,1.1875 0.40625,1.6875c0.30078,0.39844 0.78125,0.8125 1.78125,0.8125h8c1,0 1.92578,-0.71094 2.125,-1.8125c0.89844,-3.80078 2.08594,-9.57422 2.1875,-9.875c0,-0.10156 0.09375,-0.3125 0.09375,-0.3125h5.3125c7.80078,0 13.69531,-4.6875 15.09375,-12.1875c1,-4.60156 -0.29297,-7.52344 -1.59375,-9.125c-1.80078,-2.30078 -5.11328,-3.375 -5.8125,-3.375z"></path></g></g>
                                </svg>
                            </div>
                            <div class="col col-9">
                                <div style="font-size: 35px; padding-top: 30px;">
                                    Aiutaci a <b style="color: #FCC419;">Crescere</b> e <b style="color: #FCC419;">Migliorare</b>
                                </div>
                            </div>
                        </div>
                        <span style="padding-left: 15px;">
                            Il tuo <b>aiuto</b> è importante per noi
                        </span>
                        <button class="btn btn-goto-paypal">
                            Aiutaci
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- END SECTION NEWS -->

    <hr class="hr-styled">

    <section class="most-popular-notes">
        <div class="container">
            <div class="row">
                <?php
                global $gb_boxes;
                if ( ! empty( $gb_boxes ) ) {
                    echo $gb_boxes;
                } else {
                    echo 'risposta vuota';
                }
                ?>
                <!--<div class="col-4">
                    <div class="card-note">
                        <h3>Algoritmi e Strutture Dati</h3>
                        <img class="img-algoritmi" src="assets/img/materie/algoritmi.png">
                    </div>
                    <div class="content">
                        <div class="category">
                            <div class="mini-box primary primary-1y">
                            </div>
                            <div class="mini-box secondary ">
                                Informatica
                            </div>
                            <div class="mini-box difficulty-medium"></div>
                        </div>
                        <div class="text">
                            <span>Il corso universitario di <b>Algoritmi e Strutture Dati</b> introduce i principi fondamentali degli algoritmi e delle strutture dati, focalizzandosi sull'efficienza computazionale e la risoluzione di problemi complessi nell'ambito dell'informatica.</span>
                            <a href="">
                                Vai agli appunti
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-note">
                        <h3>Basi di Dati</h3>
                        <img class="img-basi-di-dati" src="assets/img/materie/basi-di-dati.png">
                    </div>
                    <div class="content">
                        <div class="category">
                            <div class="mini-box primary primary-2y"></div>
                            <div class="mini-box secondary">
                                Informatica
                            </div>
                            <div class="mini-box difficulty-medium"></div>
                        </div>
                        <div class="text">
                            <span>Il corso universitario di <b>Basi di Dati</b> introduce i concetti fondamentali delle strutture dati, modelli e linguaggi per la gestione efficiente di dati. Approfondisce la progettazione di database relazionali e tecniche di interrogazione, essenziali nell'ambito dell'informatica e dell'ingegneria.</span>
                            <a href="">
                                Vai agli appunti
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-note">
                        <h3>Analisi Matematica I</h3>
                        <img class="img-analisi-i" src="assets/img/materie/analisi-i.png">
                    </div>
                    <div class="content">
                        <div class="category">
                            <div class="mini-box primary primary-1y"></div>
                            <div class="mini-box secondary">
                                Informatica
                            </div>
                            <div class="mini-box difficulty-medium"></div>
                        </div>
                        <div class="text">
                            <span>Il corso universitario di <b>Analisi I</b> introduce i concetti fondamentali del calcolo differenziale e integrale, analizzando le funzioni reali e le loro proprietà. Approfondisce limiti, derivate e integrali, fornendo basi cruciali per discipline scientifiche e ingegneristiche nell'ambito dell'analisi matematica.</span>
                            <a href="">
                                Vai agli appunti
                            </a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <footer>

    </footer> <!-- END FOOTER -->
</body>
</html>