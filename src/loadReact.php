<?php

const DEV = true;

function loadReactJs(): string
{
    ob_start();
    if(DEV) {
        ?>
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
        <?php
    } else {
        ?>
        <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>
        <?php
    }

    return ob_get_clean();
}

function loadBabel(): string
{
    ob_start();
    ?>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <?php
    return ob_get_clean();
}
