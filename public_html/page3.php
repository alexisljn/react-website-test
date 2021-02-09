<?php
require('../src/loadReact.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 3 avec React et Babel</title>
</head>
<body>
<a href="/">Retour</a>
<p>Cette page utilise React et Babel pour le JSX</p>

<div id="mon-container-react"></div>

<?= loadReactJs(); ?>
<?//= loadBabel(); ?>


<!--<script src="toto_jsx.js"></script>-->
<script type="module" src="compiled/like_button_jsx.js"></script>
<script>

    // ReactDOM.render(
    //     <h1>Hello, world!</h1>,
    //     document.getElementById('mon-container-react')
    // );

    // ReactDOM.render((LikeButton), document.getElementById('mon-container-react'));

</script>


</body>
</html>
