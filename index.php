<html>

<head>
    <title>Demo Pipeline</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            min-height: 100dvh;
        }

        button {
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(239, 239, 239);
            background-color: rgb(2, 2, 2);
            border: none;
            min-width: min(16rem, 80%);
            max-width: 100%;
            aspect-ratio: 1/1;

            font-size: 3rem;
            font-family: monospace;

            padding: 2rem;
            border-radius: 100%;
            transition: 0.3s all;

            cursor: pointer;
        }

        button:hover {
            transform: scale(1.2);
            border-radius: 1rem;
            background-color: rgb(212, 27, 27);
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
    <button onclick='showNotification()'>Click!</button>
</body>

</html>
