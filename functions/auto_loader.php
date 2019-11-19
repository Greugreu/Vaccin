<?php

spl_autoload_register(function($PdoDB) {
    include_once $PdoDB . '.php';
});
