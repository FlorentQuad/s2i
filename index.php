<html>

<head>
    <title>QUAD!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <style>
        body {
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr;
            width: 100vw;
            height: 100vh;
            height: 100dvh;
            margin: 0;
            padding: 0;
            background-color: rgb(0, 0, 0);
        }

        body:hover:has(button:hover)>img {
            opacity: 1;
            transition: 1s all;
        }

        body>div {
            grid-column: 1 / -1;
            grid-row: 1 / -1;
            align-self: center;
            justify-self: center;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: -1;
            transition: 0.5s 3s all;
            background-color: rgb(0, 0, 0);
        }

        body>div>svg {
            width: 50%;
            height: 50%;
            transition: width 0.5s, height 0.5s;
        }

        body>div>svg path {
            transition: transform 0.8s cubic-bezier(.81, .28, .19, .75), opacity 0.4s ease-in-out;
        }

        .quadVisible>div {
            opacity: 1;
            z-index: 2;
        }

        .quadVisible>div>svg {
            width: 20%;
            height: 20%;
        }

        .quadFolded>div>svg:nth-of-type(1) path:nth-of-type(1) {
            opacity: 0;
            transform: translateX(20%);
        }

        .quadFolded>div>svg:nth-of-type(1) path:nth-of-type(2) {
            opacity: 0;
            transform: translateX(10%);
        }

        .quadFolded>div>svg:nth-of-type(1) path:nth-of-type(4) {
            opacity: 0;
            transform: translateX(-20%);
        }

        .quadFolded>div>svg:nth-of-type(1) path:nth-of-type(3) {
            opacity: 0;
            transform: translateX(-10%);
        }

        img {
            grid-column: 1 / -1;
            grid-row: 1 / -1;
            align-self: center;
            justify-self: center;
            opacity: 0;
            transition: 0.5s all;
            object-fit: cover;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        button {
            grid-column: 1 / -1;
            grid-row: 1 / -1;
            align-self: center;
            justify-self: center;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(255, 255, 255);
            border: none;
            max-width: 100%;
            aspect-ratio: 1/1;

            padding: 2rem;
            border-radius: 100%;
            transition: 0.3s all;

            cursor: pointer;
        }

        button:hover {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(1.4);
        }

        button>svg{
            width: 2rem;
            height: 2rem;
        }
    </style>
</head>

<body class="quadFolded quadVisible">
    <script>
        function showNotification() {
            Notification.requestPermission(function (permission) {
                if (permission === "granted") {
                    var title = "QUAD!";
                    var body = "Hope you are having a great day.";
                    var notification = new Notification(title, { body });
                    notification.onclick = () => {
                        notification.close();
                        window.parent.focus();
                    }
                }
            });
        }

        setTimeout(() => document.body.classList.remove("quadFolded"), 2000);
        setTimeout(() => document.body.classList.remove("quadVisible"), 3000);
    </script>
    <div>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 134.1 29.27">
            <g>
                <path fill="#FFF" d="M 27.27 23.34 V 5.92 C 27.27 4.56 26.78 3.4 25.81 2.44 S 23.67 1 22.31 1 H 4.92 C 3.56 1 2.4 1.48 1.44 2.44 S 0 4.56 0 5.92 V 23.34 C 0 24.7 0.48 25.86 1.44 26.82 S 3.56 28.26 4.92 28.26 H 22.34 C 22.98 28.26 23.57 28.15 24.12 27.94 L 26.45 30.27 L 29.37 27.35 L 27 24.98 C 27.17 24.47 27.27 23.93 27.27 23.34 Z M 5.49 24.18 C 4.93 24.18 4.56 24.09 4.37 23.9 C 4.18 23.71 4.09 23.34 4.09 22.78 V 6.49 C 4.09 5.93 4.18 5.56 4.37 5.37 C 4.56 5.18 4.93 5.09 5.49 5.09 H 21.74 C 22.32 5.09 22.7 5.18 22.88 5.37 C 23.06 5.56 23.15 5.93 23.15 6.49 V 21.12 L 20.17 18.14 L 17.25 21.06 L 20.37 24.18 H 5.49 Z"/>
                <path fill="#FFF" d="M 60.02 22.78 C 60.02 23.34 59.93 23.71 59.75 23.9 C 59.57 24.09 59.19 24.18 58.61 24.18 H 42.38 C 41.82 24.18 41.45 24.09 41.26 23.9 C 41.07 23.71 40.98 23.34 40.98 22.78 V 1 H 36.89 V 23.34 C 36.89 24.7 37.37 25.86 38.33 26.82 S 40.45 28.26 41.81 28.26 H 59.23 C 60.57 28.26 61.72 27.78 62.7 26.82 C 63.67 25.86 64.16 24.7 64.16 23.34 V 1 H 60.03 V 22.78 H 60.02 Z"/> 
                <path fill="#FFF" d="M 94.11 1 H 76.72 C 75.36 1 74.19 1.48 73.24 2.44 C 72.28 3.4 71.8 4.56 71.8 5.92 V 28.26 H 75.89 V 18.72 H 94.94 V 28.26 H 99.07 V 5.92 C 99.07 4.56 98.58 3.4 97.61 2.44 S 95.47 1 94.11 1 Z M 94.94 14.63 H 75.89 V 6.49 C 75.89 5.93 75.98 5.56 76.17 5.37 C 76.36 5.18 76.73 5.09 77.29 5.09 H 93.54 C 94.12 5.09 94.5 5.18 94.68 5.37 C 94.86 5.56 94.95 5.93 94.95 6.49 V 14.63 H 94.94 Z"/>
                <path fill="#FFF" d="M 132.68 2.44 C 131.7 1.48 130.54 1 129.17 1 H 106.86 V 28.27 H 129.17 C 130.53 28.27 131.7 27.79 132.67 26.83 C 133.64 25.87 134.13 24.71 134.13 23.35 V 5.92 C 134.13 4.56 133.65 3.4 132.68 2.44 Z M 130.01 22.78 C 130.01 23.34 129.92 23.71 129.74 23.9 C 129.56 24.09 129.18 24.18 128.6 24.18 H 112.35 C 111.79 24.18 111.42 24.09 111.23 23.9 C 111.04 23.71 110.95 23.34 110.95 22.78 V 6.49 C 110.95 5.93 111.04 5.56 111.23 5.37 C 111.42 5.18 111.79 5.09 112.35 5.09 H 128.6 C 129.18 5.09 129.56 5.18 129.74 5.37 C 129.92 5.56 130.01 5.93 130.01 6.49 V 22.78 Z"/>
            </g>
        </svg>
    </div>
    <img src="https://images.unsplash.com/photo-1585577028863-35a3349c60db" alt="demo" />
    <button onclick='showNotification()'>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 1 29.37 29.27">
            <g>
                <path fill="#000" d="M 27.27 23.34 V 5.92 C 27.27 4.56 26.78 3.4 25.81 2.44 S 23.67 1 22.31 1 H 4.92 C 3.56 1 2.4 1.48 1.44 2.44 S 0 4.56 0 5.92 V 23.34 C 0 24.7 0.48 25.86 1.44 26.82 S 3.56 28.26 4.92 28.26 H 22.34 C 22.98 28.26 23.57 28.15 24.12 27.94 L 26.45 30.27 L 29.37 27.35 L 27 24.98 C 27.17 24.47 27.27 23.93 27.27 23.34 Z M 5.49 24.18 C 4.93 24.18 4.56 24.09 4.37 23.9 C 4.18 23.71 4.09 23.34 4.09 22.78 V 6.49 C 4.09 5.93 4.18 5.56 4.37 5.37 C 4.56 5.18 4.93 5.09 5.49 5.09 H 21.74 C 22.32 5.09 22.7 5.18 22.88 5.37 C 23.06 5.56 23.15 5.93 23.15 6.49 V 21.12 L 20.17 18.14 L 17.25 21.06 L 20.37 24.18 H 5.49 Z"/>
            </g>
        </svg>
    </button>
</body>

</html>
