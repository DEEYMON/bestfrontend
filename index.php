<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="/logo.ico" type="image/x-icon">
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    color: inherit;
                    font-family: inherit;
                    box-sizing: border-box;
                }
                @-webkit-keyframes fadein {
                    0% {opacity: 0}
                    100% {opacity: 1}
                }
                @keyframes fadein {
                    0% {opacity: 0}
                    100% {opacity: 1}
                }
        
                html, body {
                    width: 100%;
                    height: 100%;
                }
                body {
                    position: relative;
                    overflow: auto;
                    font-family: 'Tajawal', sans-serif;
                    background-color: rgba(20, 20, 20, 0.7);
                    opacity: 0;
                    -webkit-animation: fadein 1.2s forwards;
                    animation: fadein 1.2s forwards;
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -khtml-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                #center {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    text-align: center;
                    -webkit-transform: translate(-50%, -50%);
                            transform: translate(-50%, -50%);
                }
                @-webkit-keyframes lostconnection {
                    0% {color: #ffffff}
                    50% {color: #ff5555}
                    100% {color: #ffffff}
                }
                @keyframes lostconnection {
                    0% {color: #ffffff}
                    50% {color: #ff5555}
                    100% {color: #ffffff}
                }
                #icon {
                    color: white;
                    width: 128px;
                    height: 128px;
                    -webkit-animation: lostconnection 3s infinite;
                            animation: lostconnection 3s infinite;
                }
                h1 {
                    color: #3498db;
                    font-size: 48px;
                }
                p {
                    color: #1abc9c;
                    font-size: 23px;
                }
                #buttons {
                    margin-top: 48px;
                }
                #buttons a {
                    color: #f2f2f2;
                    text-decoration: none;
                    padding: 12px 24px;
                    font-size: 23px;
                    outline: none;
                    border: 1px solid #636363;
                    background: rgba(20, 20, 20, 0.7);
                    -webkit-transition: color 0.2s ease-in-out;
                    transition: color 0.2s ease-in-out;
                }
                #buttons a + a {
                    margin-left: 12px;
                }
                #buttons a:hover {
                    color: #ff5555;
                }
            </style>
        </head>
        <body>
            <main id="center">
                <!-- "borrowed" icons from font awesome pro. -->
                <h1>deymon</h1>
                <p>Alexis (deymon) - 16 y'old - French canadian</p>
                <p>Java & Lua developer</p>
                <div id="buttons">
                    <a href="work">My work</a>
                </div>
            </main>
        </body>
        </html>