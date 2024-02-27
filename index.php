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
        }

        body:hover:has(button:hover)>img {
            opacity: 1;
        }

        img {
            grid-column: 1 / -1;
            grid-row: 1 / -1;
            align-self: center;
            justify-self: center;
            transition: 0.3s all;
            opacity: 0;
            transition: 1s all;
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
            color: rgb(38, 38, 38);
            background-color: rgba(0, 0, 0, 0);
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
        }
    </style>
</head>

<body>
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
    </script>
    <img src="https://images.unsplash.com/photo-1561570541-aaba21a3ecf0" alt="demo" />
    <button onclick='showNotification()'>Hello!!</button>
</body>

</html>
