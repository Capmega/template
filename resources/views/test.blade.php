<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <script src="http://127.0.0.1:8080/socket.io/socket.io.js"></script>
</head>
<body>
    <h1>test</h1>
    <script>
    var socket = io.connect('http://127.0.0.1:8080');
    socket.on('news', function (data) {
        console.log(data);
        socket.emit('my other event', { my: 'data' });
    });
</script>
</body>
</html>
