<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SCREEN CAMERA</title>
</head>

<body>
    <!-- Ideally these elements aren't created until it's confirmed that the
    client supports video/camera, but for the sake of illustrating the
    elements involved, they are created with markup (not JavaScript) -->
    <video id="video" width="100%" height="" autoplay=""></video>
    <div id="filter">
        <canvas id="canvas" width="100%" height=""></canvas>
    </div>
    <!-- <div><button id="snap">Snapshot</button></div> --> <!-- If Needed to snapshot -->
</body>

</html>