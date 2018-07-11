<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Dashboard";

$this->params['classBody'] = "site-navbar-small dashboard";
?>

<h1>h1. Ejemplo Texto</h1>

<h2>h1. Ejemplo Texto</h2>

<h3>h1. Ejemplo Texto</h3>

<h4>h1. Ejemplo Texto</h4>

<h5>h1. Ejemplo Texto</h5>

<h6>h1. Ejemplo Texto</h6>


<form action="">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Input">
    </div>

    <div class="form-group">
        <input type="passwrod" class="form-control" placeholder="Input">
    </div>

    <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="Textarea"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Primary</button>
        <button class="btn btn-error">Error</button>
        <button class="btn btn-secondary">Secondary</button>
    </div>

     <div class="form-group">
        <button class="btn btn-primary active">Primary</button>
        <button class="btn btn-error active">Error</button>
        <button class="btn btn-secondary active">Secondary</button>
    </div>

     <div class="form-group">
        <button class="btn btn-primary disabled">Primary</button>
        <button class="btn btn-error disabled">Error</button>
        <button class="btn btn-secondary disabled">Secondary</button>
    </div>

</form>
