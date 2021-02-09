<?php
require('../src/loadReact.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2 avec React sans JSX</title>
</head>
<body>
    <a href="/">Retour</a>
    <p>Cette page utilise React</p>

    <div id="mon-container-react"></div>
    <div id="mon-second-container-react"></div>

    
    <?= loadReactJs(); ?>

    <script src="../src/js/like_button.js"></script>

    <script>
        const container = document.getElementById('mon-container-react');
        const container2 = document.getElementById('mon-second-container-react');
        ReactDOM.render(e(LikeButton), container);
        ReactDOM.render(e(LikeButton), container2);
    </script>
</body>
</html>
