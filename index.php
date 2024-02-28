<html>

<head>
    <title>Demo Pipeline</title>
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
            width: 80%;
            height: 80%;
            transition: width 0.5s, height 0.5s;
        }

        body>div>svg path {
            transition: transform 0.8s cubic-bezier(.81, .28, .19, .75), opacity 0.4s ease-in-out;
        }

        .meijerVisible>div {
            opacity: 1;
            z-index: 2;
        }

        .meijerVisible>div>svg {
            width: 20%;
            height: 20%;
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(1),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(2),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(3),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(4),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(5) {
            transform: translateX(30%);
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(6),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(7) {
            opacity: 0;
            transform: translateX(20%);
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(8),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(9) {
            opacity: 0;
            transform: translateX(10%);
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(10),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(11) {
            opacity: 0;
            transform: translateX(-10%);
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(12),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(13) {
            opacity: 0;
            transform: translateX(-20%);
        }

        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(14),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(15),
        .meijerFolded>div>svg:nth-of-type(1) path:nth-of-type(16) {
            transform: translateX(-30%);
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
            color: rgb(17, 17, 17);
            background-color: rgb(255, 255, 255);
            border: none;
            max-width: 100%;
            aspect-ratio: 1/1;

            font-size: 1.5rem;
            font-family: monospace;

            padding: 1rem;
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
    </style>
</head>

<body class="meijerFolded meijerVisible">
    <script>
        function showNotification() {
            Notification.requestPermission(function (permission) {
                if (permission === "granted") {
                    var title = "Hello World!";
                    var body = "Hope you are having a great day.";
                    var notification = new Notification(title, { body });
                    notification.onclick = () => {
                        notification.close();
                        window.parent.focus();
                    }
                }
            });
        }

        setTimeout(() => document.body.classList.remove("meijerFolded"), 2000);
        setTimeout(() => document.body.classList.remove("meijerVisible"), 3000)
    </script>
    <div>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 343.259 72.067">
            <g>
                <path fill="#FFF" d="M 0 0 V 24.547 H 15.678 L 15.479 20.459 L 16.871 24.547 H 30.385 L 22.51 0 " />
                <path fill="#FFF" d="M 0 71.094 H 17.139 V 54.492 L 16.752 46.547 H 0 Z" />
                <path fill="#FFF" d="M 32.715 71.094 H 44.043 L 52.383 46.547 H 39.312 L 38.379 49.463 L 37.443 46.547 H 24.359 Z" />
                <path fill="#FFF" d="M 54.199 0 H 76.758 V 24.547 H 61.033 L 61.23 20.508 L 59.858 24.547 H 46.348 Z" />
                <path fill="#FFF" d="M 59.57 71.094 H 76.758 V 46.547 H 59.958 L 59.57 54.492 Z" />
                <path fill="#FFF" d="M 87.646 0 H 136.719 V 13.238 H 104.785 V 24.547 H 87.646 Z" />
                <path fill="#FFF" d="M 87.646 71.095 H 136.621 V 57.911 H 104.785 V 46.547 H 87.646 Z" />
                <path fill="#FFF" d="M 144.775 0 H 161.865 V 24.547 H 144.775 Z" />
                <path fill="#FFF" d="M 144.775 71.095 H 161.865 V 46.547 H 144.775 Z" />
                <path fill="#FFF" d="M 202.1 0 H 219.189 V 24.547 H 202.1 Z" />
                <path fill="#FFF" d="M 202.1 48.78 L 202.1 46.547 L 219.189 46.547 L 219.189 48.78 Q 219.189 55.567 216.04 60.889 Q 212.891 66.212 207.251 69.141 Q 201.611 72.071 194.678 72.071 A 37.191 37.191 0 0 1 187.609 71.44 Q 180.942 70.148 176.611 66.212 A 19.044 19.044 0 0 1 170.86 56.134 A 28.922 28.922 0 0 1 170.166 49.61 L 187.354 49.61 A 22.459 22.459 0 0 0 187.479 52.08 Q 187.814 55.094 189.038 56.69 Q 190.451 58.533 193.462 58.83 A 12.394 12.394 0 0 0 194.678 58.887 A 7.597 7.597 0 0 0 197.11 58.517 A 6.13 6.13 0 0 0 200.171 56.226 Q 201.684 54.138 202.01 50.742 A 20.564 20.564 0 0 0 202.1 48.78 Z" />
                <path fill="#FFF" d="M 229.98 0 H 279.053 V 13.238 H 247.119 V 24.547 H 229.98 Z" />
                <path fill="#FFF" d="M 229.98 71.095 H 279.053 V 57.911 H 247.119 V 46.547 H 229.98 Z" />
                <path fill="#FFF" d="M 285.939 71.096 H 303.076 V 46.547 H 285.939 Z" />
                <path fill="#FFF" d="M 324.902 71.095 H 343.262 V 70.362 L 330.928 46.547 H 312.629 Z" />
                <path fill="#FFF"
                    d="M 285.939 24.547 L 285.938 0.001 L 313.916 0.001 A 46.032 46.032 0 0 1 321.621 0.605 Q 328.902 1.843 333.691 5.616 A 18.281 18.281 0 0 1 340.646 18.394 A 26.62 26.62 0 0 1 340.82 21.485 V 24.547 Z" />
            </g>
        </svg>
    </div>
    <img src="https://images.unsplash.com/photo-1561570541-aaba21a3ecf0" alt="demo" />
    <button onclick='showNotification()'>Hi!</button>
</body>

</html>
