<html>

    <?php
    include "../routes/Connection.php";
    session_start();
    if(isset($_GET['logout']) && $_GET['logout'] == "true")
	{
        // $_SESSION['userSession'] = null;
        header('Location:/');
		session_destroy();
		
	}

    if(!isset($_SESSION['userSession'])){
        // $_SESSION['userSession'] = null;
        header("Location:http://bem.filkom.ub.ac.id/auth/?auth_id=1b7f2fed6522251f922c81b9852cf585");
        
        if (isset($_POST['nim']) AND isset($_POST['token'])) {
            if ($_POST['token'] == 'e418c9f19f11e2650cac201cb943f9dc') {
                $data = array('nim'=>$_POST['nim'],
                                'nama'=>$_POST['nama'],
                                'fak'=>$_POST['fak'],
                                'jurusan'=>$_POST['jurusan'],
                                'prodi'=>$_POST['prodi'],
                                'last_page'=>$_POST['last_page'],
                                'auth_id'=>$_POST['auth_id'],
                                'token'=>$_POST['token']);
            if($_POST['nim']=="175150201111045" || $_POST['nim']=="165150407111027" || $_POST['nim']=="165150200111097" || $_POST['nim']=="165150407111061" || $_POST['nim']=="175150207111005" || $_POST['nim']=="175150700111009"){
                $_SESSION['userSession'] = $data['nama'];
            }else{
                header('Location:salah.html');
            }
        		$_SESSION['userSession'] = $data['nama'];
    		}}
    }else{
        
    }

    
    ?>
    <head><title>Input Berita</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>BEM FILKOM 2018</title>
    <!-- Favicon -->
	    <link rel="shortcut icon" href="img/bem-turun.png" sizes="144x144">
    <!-- Google Web Fonts  -->

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/ionicons.css">
     <!-- <link href="style.css" rel="stylesheet"></link> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <style amp-custom>
    /* Font */
    
    @font-face {
        font-family: Nexa;
    }
    /* Plugin CSS*/
    
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%
    }
    
    body {
        margin: 0
    }
    
    a {
        background-color: transparent
    }
    
    a:active,
    a:hover {
        outline: 0
    }
    
    
    h1 {
        margin: .67em 0;
        font-size: 2em
    }
    
    img {
        border: 0
    }
    
    hr {
        height: 0;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }
    
    button,
    input {
        margin: 0;
        font: inherit;
        color: inherit
    }
    
    button {
        overflow: visible
    }
    
    button,
    select {
        text-transform: none
    }
    
    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }
    
    button[disabled],
    html input[disabled] {
        cursor: default
    }
    
    button::-moz-focus-inner,
    input::-moz-focus-inner {
        padding: 0;
        border: 0
    }
    
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    
    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }
    
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff
    }
    
    button,
    input,
    select,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }
    
    a {
        color: #337ab7;
        text-decoration: none
    }
    
    a:focus,
    a:hover {
        color: #23527c;
        text-decoration: underline
    }
    
    a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    
    img {
        vertical-align: middle
    }
    
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #eee
    }
    
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }
    
    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }
    
    [role=button] {
        cursor: pointer
    }
    
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }
    
    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
        margin-top: 20px;
        margin-bottom: 10px
    }
    
    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
        margin-top: 10px;
        margin-bottom: 10px
    }
    
    .h1,
    h1 {
        font-size: 36px
    }
    
    .h2,
    h2 {
        font-size: 30px
    }
    
    .h3,
    h3 {
        font-size: 24px
    }
    
    .h4,
    h4 {
        font-size: 18px
    }
    
    .h5,
    h5 {
        font-size: 14px
    }
    
    .h6,
    h6 {
        font-size: 12px
    }
    
    p {
        margin: 0 0 10px
    }
    
    .text-left {
        text-align: left
    }
    
    .text-right {
        text-align: right
    }
    
    .text-center {
        text-align: center
    }
    
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 10px
    }
    
    ol ol,
    ol ul,
    ul ol,
    ul ul {
        margin-bottom: 0
    }
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }
    
    @media (min-width:768px) {
        .container {
            width: 750px
        }
    }
    
    @media (min-width:992px) {
        .container {
            width: 970px
        }
    }
    
    @media (min-width:1200px) {
        .container {
            width: 1170px
        }
    }
    @media (min-width:1700px) {
        .container {
            width: 90%
        }
    }
    
    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }
    
    .row {
        margin-right: -15px;
        margin-left: -15px
    }

    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col-xs-12 {
        float: left
    }
    
    .col-xs-12 {
        width: 100%
    }
    
    @media (min-width:768px) {
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9 {
            float: left
        }
        .col-sm-12 {
            width: 100%
        }
        .col-sm-11 {
            width: 91.66666667%
        }
        .col-sm-10 {
            width: 83.33333333%
        }
        .col-sm-9 {
            width: 75%
        }
        .col-sm-8 {
            width: 66.66666667%
        }
        .col-sm-7 {
            width: 58.33333333%
        }
        .col-sm-6 {
            width: 50%
        }
        .col-sm-5 {
            width: 41.66666667%
        }
        .col-sm-4 {
            width: 33.33333333%
        }
        .col-sm-3 {
            width: 25%
        }
        .col-sm-2 {
            width: 16.66666667%
        }
        .col-sm-1 {
            width: 8.33333333%
        }
    }
    
    @media (min-width:992px) {
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9 {
            float: left
        }
        .col-md-12 {
            width: 100%
        }
        .col-md-11 {
            width: 91.66666667%
        }
        .col-md-10 {
            width: 83.33333333%
        }
        .col-md-9 {
            width: 75%
        }
        .col-md-8 {
            width: 66.66666667%
        }
        .col-md-7 {
            width: 58.33333333%
        }
        .col-md-6 {
            width: 50%
        }
        .col-md-5 {
            width: 41.66666667%
        }
        .col-md-4 {
            width: 33.33333333%
        }
        .col-md-3 {
            width: 25%
        }
        .col-md-2 {
            width: 16.66666667%
        }
        .col-md-1 {
            width: 8.33333333%
        }
    }
    
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }
    
    .btn.active.focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn:active:focus,
    .btn:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    
    .btn.focus,
    .btn:focus,
    .btn:hover {
        color: #333;
        text-decoration: none
    }
    
    .btn.active,
    .btn:active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    
    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
        cursor: not-allowed;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: .65
    }
    
    a.btn.disabled,
    fieldset[disabled] a.btn {
        pointer-events: none
    }
    
    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }
    
    .btn-default.focus,
    .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }
    
    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }
    
    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }
    
    .btn-default.active.focus,
    .btn-default.active:focus,
    .btn-default.active:hover,
    .btn-default:active.focus,
    .btn-default:active:focus,
    .btn-default:active:hover,
    .open>.dropdown-toggle.btn-default.focus,
    .open>.dropdown-toggle.btn-default:focus,
    .open>.dropdown-toggle.btn-default:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }
    
    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
        background-image: none
    }
    
    .btn-default.disabled.focus,
    .btn-default.disabled:focus,
    .btn-default.disabled:hover,
    .btn-default[disabled].focus,
    .btn-default[disabled]:focus,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default.focus,
    fieldset[disabled] .btn-default:focus,
    fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }
    
    .btn-default .badge {
        color: #fff;
        background-color: #333
    }
    
    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }
    
    .btn-primary.focus,
    .btn-primary:focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }
    
    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }
    
    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }
    
    .btn-primary.active.focus,
    .btn-primary.active:focus,
    .btn-primary.active:hover,
    .btn-primary:active.focus,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .open>.dropdown-toggle.btn-primary.focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .open>.dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }
    
    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
        background-image: none
    }
    
    .btn-primary.disabled.focus,
    .btn-primary.disabled:focus,
    .btn-primary.disabled:hover,
    .btn-primary[disabled].focus,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary.focus,
    fieldset[disabled] .btn-primary:focus,
    fieldset[disabled] .btn-primary:hover {
        background-color: #337ab7;
        border-color: #2e6da4
    }
    
    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }
    
    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    
    .btn-success.focus,
    .btn-success:focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625
    }
    
    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }
    
    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }
    
    .btn-success.active.focus,
    .btn-success.active:focus,
    .btn-success.active:hover,
    .btn-success:active.focus,
    .btn-success:active:focus,
    .btn-success:active:hover,
    .open>.dropdown-toggle.btn-success.focus,
    .open>.dropdown-toggle.btn-success:focus,
    .open>.dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #398439;
        border-color: #255625
    }
    
    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
        background-image: none
    }
    
    .btn-success.disabled.focus,
    .btn-success.disabled:focus,
    .btn-success.disabled:hover,
    .btn-success[disabled].focus,
    .btn-success[disabled]:focus,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success.focus,
    fieldset[disabled] .btn-success:focus,
    fieldset[disabled] .btn-success:hover {
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    
    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff
    }
    
    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }
    
    .btn-info.focus,
    .btn-info:focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }
    
    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }
    
    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }
    
    .btn-info.active.focus,
    .btn-info.active:focus,
    .btn-info.active:hover,
    .btn-info:active.focus,
    .btn-info:active:focus,
    .btn-info:active:hover,
    .open>.dropdown-toggle.btn-info.focus,
    .open>.dropdown-toggle.btn-info:focus,
    .open>.dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }
    
    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
        background-image: none
    }
    
    .btn-info.disabled.focus,
    .btn-info.disabled:focus,
    .btn-info.disabled:hover,
    .btn-info[disabled].focus,
    .btn-info[disabled]:focus,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info.focus,
    fieldset[disabled] .btn-info:focus,
    fieldset[disabled] .btn-info:hover {
        background-color: #5bc0de;
        border-color: #46b8da
    }
    
    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }
    
    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }
    
    .btn-warning.focus,
    .btn-warning:focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }
    
    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }
    
    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }
    
    .btn-warning.active.focus,
    .btn-warning.active:focus,
    .btn-warning.active:hover,
    .btn-warning:active.focus,
    .btn-warning:active:focus,
    .btn-warning:active:hover,
    .open>.dropdown-toggle.btn-warning.focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .open>.dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }
    
    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
        background-image: none
    }
    
    .btn-warning.disabled.focus,
    .btn-warning.disabled:focus,
    .btn-warning.disabled:hover,
    .btn-warning[disabled].focus,
    .btn-warning[disabled]:focus,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning.focus,
    fieldset[disabled] .btn-warning:focus,
    fieldset[disabled] .btn-warning:hover {
        background-color: #f0ad4e;
        border-color: #eea236
    }
    
    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }
    
    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }
    
    .btn-danger.focus,
    .btn-danger:focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }
    
    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }
    
    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }
    
    .btn-danger.active.focus,
    .btn-danger.active:focus,
    .btn-danger.active:hover,
    .btn-danger:active.focus,
    .btn-danger:active:focus,
    .btn-danger:active:hover,
    .open>.dropdown-toggle.btn-danger.focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .open>.dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }
    
    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
        background-image: none
    }
    
    .btn-danger.disabled.focus,
    .btn-danger.disabled:focus,
    .btn-danger.disabled:hover,
    .btn-danger[disabled].focus,
    .btn-danger[disabled]:focus,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger.focus,
    fieldset[disabled] .btn-danger:focus,
    fieldset[disabled] .btn-danger:hover {
        background-color: #d9534f;
        border-color: #d43f3a
    }
    
    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }
    
    .btn-link {
        font-weight: 400;
        color: #337ab7;
        border-radius: 0
    }
    
    .btn-link,
    .btn-link.active,
    .btn-link:active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }
    
    .btn-link,
    .btn-link:active,
    .btn-link:focus,
    .btn-link:hover {
        border-color: transparent
    }
    
    .btn-link:focus,
    .btn-link:hover {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }
    
    .btn-link[disabled]:focus,
    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:focus,
    fieldset[disabled] .btn-link:hover {
        color: #777;
        text-decoration: none
    }
    
    .btn-group-lg>.btn,
    .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    
    .btn-group-sm>.btn,
    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    
    .btn-group-xs>.btn,
    .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    
    .btn-block {
        display: block;
        width: 100%
    }
    
    .btn-block+.btn-block {
        margin-top: 5px
    }
    
    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }
    
    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }
    
    .fade.in {
        opacity: 1
    }
    
    .collapse {
        display: none
    }
    
    .collapse.in {
        display: block
    }
    
    tr.collapse.in {
        display: table-row
    }
    
    tbody.collapse.in {
        display: table-row-group
    }
    
    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        -webkit-transition-duration: .35s;
        -o-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-property: height, visibility;
        -o-transition-property: height, visibility;
        transition-property: height, visibility
    }
    
    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid\9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }
    
    .dropdown,
    .dropup {
        position: relative
    }
    
    .dropdown-toggle:focus {
        outline: 0
    }
    
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }
    
    .dropdown-menu.pull-right {
        right: 0;
        left: auto
    }
    
    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }
    
    .dropdown-menu>li>a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }
    
    .dropdown-menu>li>a:focus,
    .dropdown-menu>li>a:hover {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5
    }
    
    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:focus,
    .dropdown-menu>.active>a:hover {
        color: #fff;
        text-decoration: none;
        background-color: #337ab7;
        outline: 0
    }
    
    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
        color: #777
    }
    
    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent;
        background-image: none;
        filter: progid: DXImageTransform.Microsoft.gradient(enabled=false)
    }
    
    .open>.dropdown-menu {
        display: block
    }
    
    .open>a {
        outline: 0
    }
    
    .dropdown-menu-right {
        right: 0;
        left: auto
    }
    
    .dropdown-menu-left {
        right: auto;
        left: 0
    }
    
    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
    }
    
    .dropdown-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 990
    }
    
    .pull-right>.dropdown-menu {
        right: 0;
        left: auto
    }
    
    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
        content: "";
        border-top: 0;
        border-bottom: 4px dashed;
        border-bottom: 4px solid\9
    }
    
    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }
    
    @media (min-width:768px) {
        .navbar-right .dropdown-menu {
            right: 0;
            left: auto
        }
        .navbar-right .dropdown-menu-left {
            right: auto;
            left: 0
        }
    }
    
    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }
    
    .btn-group-vertical>.btn,
    .btn-group>.btn {
        position: relative;
        float: left
    }
    
    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
        z-index: 2
    }
    
    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
        margin-left: -1px
    }
    
    .btn-toolbar {
        margin-left: -5px
    }
    
    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group {
        float: left
    }
    
    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
        margin-left: 5px
    }
    
    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }
    
    .btn-group>.btn:first-child {
        margin-left: 0
    }
    
    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    
    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .btn-group>.btn-group {
        float: left
    }
    
    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }
    
    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    
    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
        outline: 0
    }
    
    .btn-group>.btn+.dropdown-toggle {
        padding-right: 8px;
        padding-left: 8px
    }
    
    .btn-group>.btn-lg+.dropdown-toggle {
        padding-right: 12px;
        padding-left: 12px
    }
    
    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    
    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }
    
    .btn .caret {
        margin-left: 0
    }
    
    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0
    }
    
    .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }
    
    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }
    
    .btn-group-vertical>.btn-group>.btn {
        float: none
    }
    
    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
        margin-top: -1px;
        margin-left: 0
    }
    
    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }
    
    .btn-group-vertical>.btn:first-child:not(:last-child) {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .btn-group-vertical>.btn:last-child:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }
    
    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }
    
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    
    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }
    
    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
        display: table-cell;
        float: none;
        width: 1%
    }
    
    .btn-group-justified>.btn-group .btn {
        width: 100%
    }
    
    .btn-group-justified>.btn-group .dropdown-menu {
        left: auto
    }
    
    [data-toggle=buttons]>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn input[type=radio],
    [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }
    
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate
    }
    
    .input-group[class*=col-] {
        float: none;
        padding-right: 0;
        padding-left: 0
    }
    
    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }
    
    .input-group .form-control:focus {
        z-index: 3
    }
    
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    
    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
        height: 46px;
        line-height: 46px
    }
    
    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn,
    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn {
        height: auto
    }
    
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    
    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
        height: 30px;
        line-height: 30px
    }
    
    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn,
    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn {
        height: auto
    }
    
    .input-group .form-control,
    .input-group-addon,
    .input-group-btn {
        display: table-cell
    }
    
    .input-group .form-control:not(:first-child):not(:last-child),
    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }
    
    .input-group-addon,
    .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle
    }
    
    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px
    }
    
    .input-group-addon.input-sm {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px
    }
    
    .input-group-addon.input-lg {
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px
    }
    
    .input-group-addon input[type=checkbox],
    .input-group-addon input[type=radio] {
        margin-top: 0
    }
    
    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    
    .input-group-addon:first-child {
        border-right: 0
    }
    
    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .input-group-addon:last-child {
        border-left: 0
    }
    
    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap
    }
    
    .input-group-btn>.btn {
        position: relative
    }
    
    .input-group-btn>.btn+.btn {
        margin-left: -1px
    }
    
    .input-group-btn>.btn:active,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:hover {
        z-index: 2
    }
    
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
        margin-right: -1px
    }
    
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
        z-index: 2;
        margin-left: -1px
    }
    
    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }
    
    .nav>li {
        position: relative;
        display: block
    }
    
    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px
    }
    
    .nav>li>a:focus,
    .nav>li>a:hover {
        text-decoration: none;
        background-color: #eee
    }
    
    .nav>li.disabled>a {
        color: #777
    }
    
    .nav>li.disabled>a:focus,
    .nav>li.disabled>a:hover {
        color: #777;
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent
    }
    
    .nav .open>a,
    .nav .open>a:focus,
    .nav .open>a:hover {
        background-color: #eee;
        border-color: #337ab7
    }
    
    .nav .nav-divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }
    
    .nav>li>a>img {
        max-width: none
    }
    
    .nav-tabs {
        border-bottom: 1px solid #ddd
    }
    
    .nav-tabs>li {
        float: left;
        margin-bottom: -1px
    }
    
    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0
    }
    
    .nav-tabs>li>a:hover {
        border-color: #eee #eee #ddd
    }
    
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }
    
    .nav-tabs.nav-justified {
        width: 100%;
        border-bottom: 0
    }
    
    .nav-tabs.nav-justified>li {
        float: none
    }
    
    .nav-tabs.nav-justified>li>a {
        margin-bottom: 5px;
        text-align: center
    }
    
    .nav-tabs.nav-justified>.dropdown .dropdown-menu {
        top: auto;
        left: auto
    }
    
    @media (min-width:768px) {
        .nav-tabs.nav-justified>li {
            display: table-cell;
            width: 1%
        }
        .nav-tabs.nav-justified>li>a {
            margin-bottom: 0
        }
    }
    
    .nav-tabs.nav-justified>li>a {
        margin-right: 0;
        border-radius: 4px
    }
    
    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
        border: 1px solid #ddd
    }
    
    @media (min-width:768px) {
        .nav-tabs.nav-justified>li>a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }
        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border-bottom-color: #fff
        }
    }
    
    .nav-pills>li {
        float: left
    }
    
    .nav-pills>li>a {
        border-radius: 4px
    }
    
    .nav-pills>li+li {
        margin-left: 2px
    }
    
    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #fff;
        background-color: #337ab7
    }
    
    .nav-stacked>li {
        float: none
    }
    
    .nav-stacked>li+li {
        margin-top: 2px;
        margin-left: 0
    }
    
    .nav-justified {
        width: 100%
    }
    
    .nav-justified>li {
        float: none
    }
    
    .nav-justified>li>a {
        margin-bottom: 5px;
        text-align: center
    }
    
    .nav-justified>.dropdown .dropdown-menu {
        top: auto;
        left: auto
    }
    
    @media (min-width:768px) {
        .nav-justified>li {
            display: table-cell;
            width: 1%
        }
        .nav-justified>li>a {
            margin-bottom: 0
        }
    }
    
    .nav-tabs-justified {
        border-bottom: 0
    }
    
    .nav-tabs-justified>li>a {
        margin-right: 0;
        border-radius: 4px
    }
    
    .nav-tabs-justified>.active>a,
    .nav-tabs-justified>.active>a:focus,
    .nav-tabs-justified>.active>a:hover {
        border: 1px solid #ddd
    }
    
    @media (min-width:768px) {
        .nav-tabs-justified>li>a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }
        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover {
            border-bottom-color: #fff
        }
    }
    
    .tab-content>.tab-pane {
        display: none
    }
    
    .tab-content>.active {
        display: block
    }
    
    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    
    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 20px;
        border: 1px solid transparent
    }
    
    @media (min-width:768px) {
        .navbar {
            border-radius: 4px
        }
    }
    
    @media (min-width:768px) {
        .navbar-header {
            float: left
        }
    }
    
    .navbar-collapse {
        padding-right: 15px;
        padding-left: 15px;
        overflow-x: visible;
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
    }
    
    .navbar-collapse.in {
        overflow-y: auto
    }
    
    @media (min-width:768px) {
        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
        .navbar-collapse.collapse {
            display: block!important;
            height: auto!important;
            padding-bottom: 0;
            overflow: visible!important
        }
        .navbar-collapse.in {
            overflow-y: visible
        }
        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse,
        .navbar-static-top .navbar-collapse {
            padding-right: 0;
            padding-left: 0
        }
    }
    
    .navbar-fixed-bottom .navbar-collapse,
    .navbar-fixed-top .navbar-collapse {
        max-height: 340px
    }
    
    @media (max-device-width:480px) and (orientation:landscape) {
        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 200px
        }
    }
    
    .container-fluid>.navbar-collapse,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container>.navbar-header {
        margin-right: -15px;
        margin-left: -15px
    }
    
    @media (min-width:768px) {
        .container-fluid>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-right: 0;
            margin-left: 0
        }
    }
    
    .navbar-static-top {
        z-index: 1000;
        border-width: 0 0 1px
    }
    
    @media (min-width:768px) {
        .navbar-static-top {
            border-radius: 0
        }
    }
    
    .navbar-fixed-bottom,
    .navbar-fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030
    }
    
    @media (min-width:768px) {
        .navbar-fixed-bottom,
        .navbar-fixed-top {
            border-radius: 0
        }
    }
    
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px
    }
    
    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0
    }
    
    .navbar-brand {
        float: left;
        height: 50px;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px
    }
    
    .navbar-brand:focus,
    .navbar-brand:hover {
        text-decoration: none
    }
    
    .navbar-brand>img {
        display: block
    }
    
    @media (min-width:768px) {
        .navbar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: -15px
        }
    }
    
    .navbar-toggle {
        position: relative;
        float: right;
        padding: 9px 10px;
        margin-top: 8px;
        margin-right: 15px;
        margin-bottom: 8px;
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }
    
    .navbar-toggle:focus {
        outline: 0
    }
    
    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 1px
    }
    
    .navbar-toggle .icon-bar+.icon-bar {
        margin-top: 4px
    }
    
    @media (min-width:768px) {
        .navbar-toggle {
            display: none
        }
    }
    
    .navbar-nav {
        margin: 7.5px -15px
    }
    
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px
    }
    
    @media (max-width:767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
        .navbar-nav .open .dropdown-menu .dropdown-header,
        .navbar-nav .open .dropdown-menu>li>a {
            padding: 5px 15px 5px 25px
        }
        .navbar-nav .open .dropdown-menu>li>a {
            line-height: 20px
        }
        .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-nav .open .dropdown-menu>li>a:hover {
            background-image: none
        }
    }
    
    @media (min-width:768px) {
        .navbar-nav {
            float: left;
            margin: 0
        }
        .navbar-nav>li {
            float: left
        }
        .navbar-nav>li>a {
            padding-top: 15px;
            padding-bottom: 15px
        }
    }
    
    .navbar-form {
        padding: 10px 15px;
        margin-top: 8px;
        margin-right: -15px;
        margin-bottom: 8px;
        margin-left: -15px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
    }
    
    @media (min-width:768px) {
        .navbar-form .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }
        .navbar-form .form-control-static {
            display: inline-block
        }
        .navbar-form .input-group {
            display: inline-table;
            vertical-align: middle
        }
        .navbar-form .input-group .form-control,
        .navbar-form .input-group .input-group-addon,
        .navbar-form .input-group .input-group-btn {
            width: auto
        }
        .navbar-form .input-group>.form-control {
            width: 100%
        }
        .navbar-form .control-label {
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .checkbox,
        .navbar-form .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .checkbox label,
        .navbar-form .radio label {
            padding-left: 0
        }
        .navbar-form .checkbox input[type=checkbox],
        .navbar-form .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }
        .navbar-form .has-feedback .form-control-feedback {
            top: 0
        }
    }
    
    @media (max-width:767px) {
        .navbar-form .form-group {
            margin-bottom: 5px
        }
        .navbar-form .form-group:last-child {
            margin-bottom: 0
        }
    }
    
    @media (min-width:768px) {
        .navbar-form {
            width: auto;
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 0;
            margin-left: 0;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
    }
    
    .navbar-nav>li>.dropdown-menu {
        margin-top: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    
    .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
        margin-bottom: 0;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    
    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px
    }
    
    .navbar-btn.btn-sm {
        margin-top: 10px;
        margin-bottom: 10px
    }
    
    .navbar-btn.btn-xs {
        margin-top: 14px;
        margin-bottom: 14px
    }
    
    .navbar-text {
        margin-top: 15px;
        margin-bottom: 15px
    }
    
    @media (min-width:768px) {
        .navbar-text {
            float: left;
            margin-right: 15px;
            margin-left: 15px
        }
    }
    
    @media (min-width:768px) {
        .navbar-left {
            float: left!important
        }
        .navbar-right {
            float: right!important;
            margin-right: -15px
        }
        .navbar-right~.navbar-right {
            margin-right: 0
        }
    }
    
    .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7
    }
    
    .navbar-default .navbar-brand {
        color: #777
    }
    
    .navbar-default .navbar-brand:focus,
    .navbar-default .navbar-brand:hover {
        color: #5e5e5e;
        background-color: transparent
    }
    
    .navbar-default .navbar-text {
        color: #777
    }
    
    .navbar-default .navbar-nav>li>a {
        color: #777
    }
    
    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
        color: #333;
        background-color: transparent
    }
    
    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
    }
    
    .navbar-default .navbar-nav>.disabled>a,
    .navbar-default .navbar-nav>.disabled>a:focus,
    .navbar-default .navbar-nav>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
    }
    
    .navbar-default .navbar-toggle {
        border-color: #ddd
    }
    
    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
        background-color: #ddd
    }
    
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #888
    }
    
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #e7e7e7
    }
    
    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {
        color: #555;
        background-color: #e7e7e7
    }
    
    @media (max-width:767px) {
        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: #777
        }
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #333;
            background-color: transparent
        }
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
            color: #555;
            background-color: #e7e7e7
        }
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
            color: #ccc;
            background-color: transparent
        }
    }
    
    .navbar-default .navbar-link {
        color: #777
    }
    
    .navbar-default .navbar-link:hover {
        color: #333
    }
    
    .navbar-default .btn-link {
        color: #777
    }
    
    .navbar-default .btn-link:focus,
    .navbar-default .btn-link:hover {
        color: #333
    }
    
    .navbar-default .btn-link[disabled]:focus,
    .navbar-default .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-default .btn-link:focus,
    fieldset[disabled] .navbar-default .btn-link:hover {
        color: #ccc
    }
    
    .navbar-inverse {
        background-color: #222;
        border-color: #080808
    }
    
    .navbar-inverse .navbar-brand {
        color: #9d9d9d
    }
    
    .navbar-inverse .navbar-brand:focus,
    .navbar-inverse .navbar-brand:hover {
        color: #fff;
        background-color: transparent
    }
    
    .navbar-inverse .navbar-text {
        color: #9d9d9d
    }
    
    .navbar-inverse .navbar-nav>li>a {
        color: #9d9d9d
    }
    
    .navbar-inverse .navbar-nav>li>a:focus,
    .navbar-inverse .navbar-nav>li>a:hover {
        color: #fff;
        background-color: transparent
    }
    
    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:focus,
    .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;
        background-color: #080808
    }
    
    .navbar-inverse .navbar-nav>.disabled>a,
    .navbar-inverse .navbar-nav>.disabled>a:focus,
    .navbar-inverse .navbar-nav>.disabled>a:hover {
        color: #444;
        background-color: transparent
    }
    
    .navbar-inverse .navbar-toggle {
        border-color: #333
    }
    
    .navbar-inverse .navbar-toggle:focus,
    .navbar-inverse .navbar-toggle:hover {
        background-color: #333
    }
    
    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff
    }
    
    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
        border-color: #101010
    }
    
    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:focus,
    .navbar-inverse .navbar-nav>.open>a:hover {
        color: #fff;
        background-color: #080808
    }
    
    @media (max-width:767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
            border-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
            background-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #9d9d9d
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #fff;
            background-color: transparent
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
            color: #fff;
            background-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
            color: #444;
            background-color: transparent
        }
    }
    
    .navbar-inverse .navbar-link {
        color: #9d9d9d
    }
    
    .navbar-inverse .navbar-link:hover {
        color: #fff
    }
    
    .navbar-inverse .btn-link {
        color: #9d9d9d
    }
    
    .navbar-inverse .btn-link:focus,
    .navbar-inverse .btn-link:hover {
        color: #fff
    }
    
    .navbar-inverse .btn-link[disabled]:focus,
    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:focus,
    fieldset[disabled] .navbar-inverse .btn-link:hover {
        color: #444
    }
    
    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px
    }
    
    .breadcrumb>li {
        display: inline-block
    }
    
    .breadcrumb>li+li:before {
        padding: 0 5px;
        color: #ccc;
        content: "/\00a0"
    }
    
    .breadcrumb>.active {
        color: #777
    }
    
    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px
    }
    
    .pagination>li {
        display: inline
    }
    
    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd
    }
    
    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }
    
    .pagination>li:last-child>a,
    .pagination>li:last-child>span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }
    
    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
        z-index: 2;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd
    }
    
    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7
    }
    
    .pagination>.disabled>a,
    .pagination>.disabled>a:focus,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>span,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>span:hover {
        color: #777;
        cursor: not-allowed;
        background-color: #fff;
        border-color: #ddd
    }
    
    .pagination-lg>li>a,
    .pagination-lg>li>span {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333
    }
    
    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px
    }
    
    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px
    }
    
    .pagination-sm>li>a,
    .pagination-sm>li>span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }
    
    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
    }
    
    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px
    }
    
    .pager {
        padding-left: 0;
        margin: 20px 0;
        text-align: center;
        list-style: none
    }
    
    .pager li {
        display: inline
    }
    
    .pager li>a,
    .pager li>span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px
    }
    
    .pager li>a:focus,
    .pager li>a:hover {
        text-decoration: none;
        background-color: #eee
    }
    
    .pager .next>a,
    .pager .next>span {
        float: right
    }
    
    .pager .previous>a,
    .pager .previous>span {
        float: left
    }
    
    .pager .disabled>a,
    .pager .disabled>a:focus,
    .pager .disabled>a:hover,
    .pager .disabled>span {
        color: #777;
        cursor: not-allowed;
        background-color: #fff
    }
    
    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em
    }
    
    a.label:focus,
    a.label:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }
    
    .label:empty {
        display: none
    }
    
    .btn .label {
        position: relative;
        top: -1px
    }
    
    .label-default {
        background-color: #777
    }
    
    .label-default[href]:focus,
    .label-default[href]:hover {
        background-color: #5e5e5e
    }
    
    .label-primary {
        background-color: #337ab7
    }
    
    .label-primary[href]:focus,
    .label-primary[href]:hover {
        background-color: #286090
    }
    
    .label-success {
        background-color: #5cb85c
    }
    
    .label-success[href]:focus,
    .label-success[href]:hover {
        background-color: #449d44
    }
    
    .label-info {
        background-color: #5bc0de
    }
    
    .label-info[href]:focus,
    .label-info[href]:hover {
        background-color: #31b0d5
    }
    
    .label-warning {
        background-color: #f0ad4e
    }
    
    .label-warning[href]:focus,
    .label-warning[href]:hover {
        background-color: #ec971f
    }
    
    .label-danger {
        background-color: #d9534f
    }
    
    .label-danger[href]:focus,
    .label-danger[href]:hover {
        background-color: #c9302c
    }
    
    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px
    }
    
    .badge:empty {
        display: none
    }
    
    .btn .badge {
        position: relative;
        top: -1px
    }
    
    .btn-group-xs>.btn .badge,
    .btn-xs .badge {
        top: 0;
        padding: 1px 5px
    }
    
    a.badge:focus,
    a.badge:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }
    
    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
        color: #337ab7;
        background-color: #fff
    }
    
    .list-group-item>.badge {
        float: right
    }
    
    .list-group-item>.badge+.badge {
        margin-right: 5px
    }
    
    .nav-pills>li>a>.badge {
        margin-left: 3px
    }
    
    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        color: inherit;
        background-color: #eee
    }
    
    .jumbotron .h1,
    .jumbotron h1 {
        color: inherit
    }
    
    .jumbotron p {
        margin-bottom: 15px;
        font-size: 21px;
        font-weight: 200
    }
    
    .jumbotron>hr {
        border-top-color: #d5d5d5
    }
    
    .container .jumbotron,
    .container-fluid .jumbotron {
        padding-right: 15px;
        padding-left: 15px;
        border-radius: 6px
    }
    
    .jumbotron .container {
        max-width: 100%
    }
    
    @media screen and (min-width:768px) {
        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px
        }
        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-right: 60px;
            padding-left: 60px
        }
        .jumbotron .h1,
        .jumbotron h1 {
            font-size: 63px
        }
    }
    
    .thumbnail {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }
    
    .thumbnail a>img,
    .thumbnail>img {
        margin-right: auto;
        margin-left: auto
    }
    
    a.thumbnail.active,
    a.thumbnail:focus,
    a.thumbnail:hover {
        border-color: #337ab7
    }
    
    .thumbnail .caption {
        padding: 9px;
        color: #333
    }
    
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px
    }
    
    .alert h4 {
        margin-top: 0;
        color: inherit
    }
    
    .alert .alert-link {
        font-weight: 700
    }
    
    .alert>p,
    .alert>ul {
        margin-bottom: 0
    }
    
    .alert>p+p {
        margin-top: 5px
    }
    
    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px
    }
    
    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }
    
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }
    
    .alert-success hr {
        border-top-color: #c9e2b3
    }
    
    .alert-success .alert-link {
        color: #2b542c
    }
    
    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }
    
    .alert-info hr {
        border-top-color: #a6e1ec
    }
    
    .alert-info .alert-link {
        color: #245269
    }
    
    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }
    
    .alert-warning hr {
        border-top-color: #f7e1b5
    }
    
    .alert-warning .alert-link {
        color: #66512c
    }
    
    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }
    
    .alert-danger hr {
        border-top-color: #e4b9c0
    }
    
    .alert-danger .alert-link {
        color: #843534
    }
    
    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    
    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    
    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    
    .progress {
        height: 20px;
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #f5f5f5;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }
    
    .progress-bar {
        float: left;
        width: 0;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #fff;
        text-align: center;
        background-color: #337ab7;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease
    }
    
    .progress-bar-striped,
    .progress-striped .progress-bar {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px
    }
    
    .progress-bar.active,
    .progress.active .progress-bar {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite
    }
    
    .progress-bar-success {
        background-color: #5cb85c
    }
    
    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    
    .progress-bar-info {
        background-color: #5bc0de
    }
    
    .progress-striped .progress-bar-info {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    
    .progress-bar-warning {
        background-color: #f0ad4e
    }
    
    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    
    .progress-bar-danger {
        background-color: #d9534f
    }
    
    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    
    .media {
        margin-top: 15px
    }
    
    .media:first-child {
        margin-top: 0
    }
    
    .media,
    .media-body {
        overflow: hidden;
        zoom: 1
    }
    
    .media-body {
        width: 10000px
    }
    
    .media-object {
        display: block
    }
    
    .media-object.img-thumbnail {
        max-width: none
    }
    
    .media-right,
    .media>.pull-right {
        padding-left: 10px
    }
    
    .media-left,
    .media>.pull-left {
        padding-right: 10px
    }
    
    .media-body,
    .media-left,
    .media-right {
        display: table-cell;
        vertical-align: top
    }
    
    .media-middle {
        vertical-align: middle
    }
    
    .media-bottom {
        vertical-align: bottom
    }
    
    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }
    
    .media-list {
        padding-left: 0;
        list-style: none
    }
    
    .list-group {
        padding-left: 0;
        margin-bottom: 20px
    }
    
    .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd
    }
    
    .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }
    
    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }
    
    a.list-group-item,
    button.list-group-item {
        color: #555
    }
    
    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
        color: #333
    }
    
    a.list-group-item:focus,
    a.list-group-item:hover,
    button.list-group-item:focus,
    button.list-group-item:hover {
        color: #555;
        text-decoration: none;
        background-color: #f5f5f5
    }
    
    button.list-group-item {
        width: 100%;
        text-align: left
    }
    
    .list-group-item.disabled,
    .list-group-item.disabled:focus,
    .list-group-item.disabled:hover {
        color: #777;
        cursor: not-allowed;
        background-color: #eee
    }
    
    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading {
        color: inherit
    }
    
    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text {
        color: #777
    }
    
    .list-group-item.active,
    .list-group-item.active:focus,
    .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }
    
    .list-group-item.active .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>small {
        color: inherit
    }
    
    .list-group-item.active .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text {
        color: #c7ddef
    }
    
    .list-group-item-success {
        color: #3c763d;
        background-color: #dff0d8
    }
    
    a.list-group-item-success,
    button.list-group-item-success {
        color: #3c763d
    }
    
    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
        color: inherit
    }
    
    a.list-group-item-success:focus,
    a.list-group-item-success:hover,
    button.list-group-item-success:focus,
    button.list-group-item-success:hover {
        color: #3c763d;
        background-color: #d0e9c6
    }
    
    a.list-group-item-success.active,
    a.list-group-item-success.active:focus,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active,
    button.list-group-item-success.active:focus,
    button.list-group-item-success.active:hover {
        color: #fff;
        background-color: #3c763d;
        border-color: #3c763d
    }
    
    .list-group-item-info {
        color: #31708f;
        background-color: #d9edf7
    }
    
    a.list-group-item-info,
    button.list-group-item-info {
        color: #31708f
    }
    
    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
        color: inherit
    }
    
    a.list-group-item-info:focus,
    a.list-group-item-info:hover,
    button.list-group-item-info:focus,
    button.list-group-item-info:hover {
        color: #31708f;
        background-color: #c4e3f3
    }
    
    a.list-group-item-info.active,
    a.list-group-item-info.active:focus,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active,
    button.list-group-item-info.active:focus,
    button.list-group-item-info.active:hover {
        color: #fff;
        background-color: #31708f;
        border-color: #31708f
    }
    
    .list-group-item-warning {
        color: #8a6d3b;
        background-color: #fcf8e3
    }
    
    a.list-group-item-warning,
    button.list-group-item-warning {
        color: #8a6d3b
    }
    
    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
        color: inherit
    }
    
    a.list-group-item-warning:focus,
    a.list-group-item-warning:hover,
    button.list-group-item-warning:focus,
    button.list-group-item-warning:hover {
        color: #8a6d3b;
        background-color: #faf2cc
    }
    
    a.list-group-item-warning.active,
    a.list-group-item-warning.active:focus,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active,
    button.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:hover {
        color: #fff;
        background-color: #8a6d3b;
        border-color: #8a6d3b
    }
    
    .list-group-item-danger {
        color: #a94442;
        background-color: #f2dede
    }
    
    a.list-group-item-danger,
    button.list-group-item-danger {
        color: #a94442
    }
    
    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
        color: inherit
    }
    
    a.list-group-item-danger:focus,
    a.list-group-item-danger:hover,
    button.list-group-item-danger:focus,
    button.list-group-item-danger:hover {
        color: #a94442;
        background-color: #ebcccc
    }
    
    a.list-group-item-danger.active,
    a.list-group-item-danger.active:focus,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active,
    button.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:hover {
        color: #fff;
        background-color: #a94442;
        border-color: #a94442
    }
    
    .list-group-item-heading {
        margin-top: 0;
        margin-bottom: 5px
    }
    
    .list-group-item-text {
        margin-bottom: 0;
        line-height: 1.3
    }
    
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }
    
    .panel-body {
        padding: 15px
    }
    
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    
    .panel-heading>.dropdown .dropdown-toggle {
        color: inherit
    }
    
    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit
    }
    
    .panel-title>.small,
    .panel-title>.small>a,
    .panel-title>a,
    .panel-title>small,
    .panel-title>small>a {
        color: inherit
    }
    
    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    
    .panel>.list-group,
    .panel>.panel-collapse>.list-group {
        margin-bottom: 0
    }
    
    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0
    }
    
    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    
    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    
    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    
    .panel-heading+.list-group .list-group-item:first-child {
        border-top-width: 0
    }
    
    .list-group+.panel-footer {
        border-top-width: 0
    }
    
    .panel>.panel-collapse>.table,
    .panel>.table,
    .panel>.table-responsive>.table {
        margin-bottom: 0
    }
    
    .panel>.panel-collapse>.table caption,
    .panel>.table caption,
    .panel>.table-responsive>.table caption {
        padding-right: 15px;
        padding-left: 15px
    }
    
    .panel>.table-responsive:first-child>.table:first-child,
    .panel>.table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
        border-top-left-radius: 3px
    }
    
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
        border-top-right-radius: 3px
    }
    
    .panel>.table-responsive:last-child>.table:last-child,
    .panel>.table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
        border-bottom-left-radius: 3px
    }
    
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
        border-bottom-right-radius: 3px
    }
    
    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
        border-top: 1px solid #ddd
    }
    
    .panel>.table>tbody:first-child>tr:first-child td,
    .panel>.table>tbody:first-child>tr:first-child th {
        border-top: 0
    }
    
    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
        border: 0
    }
    
    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
        border-left: 0
    }
    
    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
        border-right: 0
    }
    
    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
        border-bottom: 0
    }
    
    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0
    }
    
    .panel>.table-responsive {
        margin-bottom: 0;
        border: 0
    }
    
    .panel-group {
        margin-bottom: 20px
    }
    
    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px
    }
    
    .panel-group .panel+.panel {
        margin-top: 5px
    }
    
    .panel-group .panel-heading {
        border-bottom: 0
    }
    
    .panel-group .panel-heading+.panel-collapse>.list-group,
    .panel-group .panel-heading+.panel-collapse>.panel-body {
        border-top: 1px solid #ddd
    }
    
    .panel-group .panel-footer {
        border-top: 0
    }
    
    .panel-group .panel-footer+.panel-collapse .panel-body {
        border-bottom: 1px solid #ddd
    }
    
    .panel-default {
        border-color: #ddd
    }
    
    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd
    }
    
    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ddd
    }
    
    .panel-default>.panel-heading .badge {
        color: #f5f5f5;
        background-color: #333
    }
    
    .panel-default>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ddd
    }
    
    .panel-primary {
        border-color: #337ab7
    }
    
    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }
    
    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #337ab7
    }
    
    .panel-primary>.panel-heading .badge {
        color: #337ab7;
        background-color: #fff
    }
    
    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #337ab7
    }
    
    .panel-success {
        border-color: #d6e9c6
    }
    
    .panel-success>.panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }
    
    .panel-success>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #d6e9c6
    }
    
    .panel-success>.panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d
    }
    
    .panel-success>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #d6e9c6
    }
    
    .panel-info {
        border-color: #bce8f1
    }
    
    .panel-info>.panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }
    
    .panel-info>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #bce8f1
    }
    
    .panel-info>.panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f
    }
    
    .panel-info>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #bce8f1
    }
    
    .panel-warning {
        border-color: #faebcc
    }
    
    .panel-warning>.panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }
    
    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #faebcc
    }
    
    .panel-warning>.panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b
    }
    
    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #faebcc
    }
    
    .panel-danger {
        border-color: #ebccd1
    }
    
    .panel-danger>.panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }
    
    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ebccd1
    }
    
    .panel-danger>.panel-heading .badge {
        color: #f2dede;
        background-color: #a94442
    }
    
    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ebccd1
    }
    
    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0;
        overflow: hidden
    }
    
    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0
    }
    
    .embed-responsive-16by9 {
        padding-bottom: 56.25%
    }
    
    .embed-responsive-4by3 {
        padding-bottom: 75%
    }
    
    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }
    
    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15)
    }
    
    .well-lg {
        padding: 24px;
        border-radius: 6px
    }
    
    .well-sm {
        padding: 9px;
        border-radius: 3px
    }
    
    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2
    }
    
    .close:focus,
    .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: .5
    }
    
    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0
    }
    
    .modal-open {
        overflow: hidden
    }
    
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }
    
    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }
    
    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }
    
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }
    
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }
    
    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
    }
    
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000
    }
    
    .modal-backdrop.fade {
        filter: alpha(opacity=0);
        opacity: 0
    }
    
    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .5
    }
    
    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5
    }
    
    .modal-header .close {
        margin-top: -2px
    }
    
    .modal-title {
        margin: 0;
        line-height: 1.42857143
    }
    
    .modal-body {
        position: relative;
        padding: 15px
    }
    
    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }
    
    .modal-footer .btn+.btn {
        margin-bottom: 0;
        margin-left: 5px
    }
    
    .modal-footer .btn-group .btn+.btn {
        margin-left: -1px
    }
    
    .modal-footer .btn-block+.btn-block {
        margin-left: 0
    }
    
    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }
    
    @media (min-width:768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }
        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }
        .modal-sm {
            width: 300px
        }
    }
    
    @media (min-width:992px) {
        .modal-lg {
            width: 900px
        }
    }
    
    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        filter: alpha(opacity=0);
        opacity: 0;
        line-break: auto
    }
    
    .tooltip.in {
        filter: alpha(opacity=90);
        opacity: .9
    }
    
    .tooltip.top {
        padding: 5px 0;
        margin-top: -3px
    }
    
    .tooltip.right {
        padding: 0 5px;
        margin-left: 3px
    }
    
    .tooltip.bottom {
        padding: 5px 0;
        margin-top: 3px
    }
    
    .tooltip.left {
        padding: 0 5px;
        margin-left: -3px
    }
    
    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px
    }
    
    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }
    
    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    
    .tooltip.top-left .tooltip-arrow {
        right: 5px;
        bottom: 0;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    
    .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        left: 5px;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    
    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }
    
    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }
    
    .tooltip.bottom .tooltip-arrow {
        top: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    
    .tooltip.bottom-left .tooltip-arrow {
        top: 0;
        right: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    
    .tooltip.bottom-right .tooltip-arrow {
        top: 0;
        left: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    
    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: none;
        max-width: 276px;
        padding: 1px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        line-break: auto
    }
    
    .popover.top {
        margin-top: -10px
    }
    
    .popover.right {
        margin-left: 10px
    }
    
    .popover.bottom {
        margin-top: 10px
    }
    
    .popover.left {
        margin-left: -10px
    }
    
    .popover-title {
        padding: 8px 14px;
        margin: 0;
        font-size: 14px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-radius: 5px 5px 0 0
    }
    
    .popover-content {
        padding: 9px 14px
    }
    
    .popover>.arrow,
    .popover>.arrow:after {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }
    
    .popover>.arrow {
        border-width: 11px
    }
    
    .popover>.arrow:after {
        content: "";
        border-width: 10px
    }
    
    .popover.top>.arrow {
        bottom: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-color: #999;
        border-top-color: rgba(0, 0, 0, .25);
        border-bottom-width: 0
    }
    
    .popover.top>.arrow:after {
        bottom: 1px;
        margin-left: -10px;
        content: " ";
        border-top-color: #fff;
        border-bottom-width: 0
    }
    
    .popover.right>.arrow {
        top: 50%;
        left: -11px;
        margin-top: -11px;
        border-right-color: #999;
        border-right-color: rgba(0, 0, 0, .25);
        border-left-width: 0
    }
    
    .popover.right>.arrow:after {
        bottom: -10px;
        left: 1px;
        content: " ";
        border-right-color: #fff;
        border-left-width: 0
    }
    
    .popover.bottom>.arrow {
        top: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-width: 0;
        border-bottom-color: #999;
        border-bottom-color: rgba(0, 0, 0, .25)
    }
    
    .popover.bottom>.arrow:after {
        top: 1px;
        margin-left: -10px;
        content: " ";
        border-top-width: 0;
        border-bottom-color: #fff
    }
    
    .popover.left>.arrow {
        top: 50%;
        right: -11px;
        margin-top: -11px;
        border-right-width: 0;
        border-left-color: #999;
        border-left-color: rgba(0, 0, 0, .25)
    }
    
    .popover.left>.arrow:after {
        right: 1px;
        bottom: -10px;
        content: " ";
        border-right-width: 0;
        border-left-color: #fff
    }
    
    .carousel {
        position: relative
    }
    
    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }
    
    .carousel-inner>.item {
        position: relative;
        display: none;
        -webkit-transition: .6s ease-in-out left;
        -o-transition: .6s ease-in-out left;
        transition: .6s ease-in-out left
    }
    
    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img {
        line-height: 1
    }
    
    @media all and (transform-3d),
    (-webkit-transform-3d) {
        .carousel-inner>.item {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            -o-transition: -o-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }
        .carousel-inner>.item.active.right,
        .carousel-inner>.item.next {
            left: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        .carousel-inner>.item.active.left,
        .carousel-inner>.item.prev {
            left: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
        .carousel-inner>.item.active,
        .carousel-inner>.item.next.left,
        .carousel-inner>.item.prev.right {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }
    
    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
        display: block
    }
    
    .carousel-inner>.active {
        left: 0
    }
    
    .carousel-inner>.next,
    .carousel-inner>.prev {
        position: absolute;
        top: 0;
        width: 100%
    }
    
    .carousel-inner>.next {
        left: 100%
    }
    
    .carousel-inner>.prev {
        left: -100%
    }
    
    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
        left: 0
    }
    
    .carousel-inner>.active.left {
        left: -100%
    }
    
    .carousel-inner>.active.right {
        left: 100%
    }
    
    .carousel-control {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
        background-color: rgba(0, 0, 0, 0);
        filter: alpha(opacity=50);
        opacity: .5
    }
    
    .carousel-control.left {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        background-repeat: repeat-x
    }
    
    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
        background-repeat: repeat-x
    }
    
    .carousel-control:focus,
    .carousel-control:hover {
        color: #fff;
        text-decoration: none;
        filter: alpha(opacity=90);
        outline: 0;
        opacity: .9
    }
    
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -10px
    }
    
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
        left: 50%;
        margin-left: -10px
    }
    
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
        right: 50%;
        margin-right: -10px
    }
    
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        width: 20px;
        height: 20px;
        font-family: serif;
        line-height: 1
    }
    
    .carousel-control .icon-prev:before {
        content: '\2039'
    }
    
    .carousel-control .icon-next:before {
        content: '\203a'
    }
    
    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none
    }
    
    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000\9;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff;
        border-radius: 10px
    }
    
    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #fff
    }
    
    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }
    
    .carousel-caption .btn {
        text-shadow: none
    }
    
    @media screen and (min-width:768px) {
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            width: 30px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px
        }
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            margin-left: -10px
        }
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            margin-right: -10px
        }
        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 30px
        }
        .carousel-indicators {
            bottom: 20px
        }
    }
    
    .btn-group-vertical>.btn-group:after,
    .btn-group-vertical>.btn-group:before,
    .btn-toolbar:after,
    .btn-toolbar:before,
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .dl-horizontal dd:after,
    .dl-horizontal dd:before,
    .form-horizontal .form-group:after,
    .form-horizontal .form-group:before,
    .modal-footer:after,
    .modal-footer:before,
    .modal-header:after,
    .modal-header:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
        display: table;
        content: " "
    }
    
    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .modal-header:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
        clear: both
    }
    
    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto
    }
    
    .hide {
        display: none!important
    }
    
    .show {
        display: block!important
    }
    
    .invisible {
        visibility: hidden
    }
    
    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }
    
    .hidden {
        display: none!important
    }
    
    .affix {
        position: fixed
    }
    
    @-ms-viewport {
        width: device-width
    }
    
    /*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
    
    @font-face {
        font-family: 'FontAwesome';
        src: url('fonts/fontawesome-webfont.eot?v=4.7.0');
        src: url('fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
        font-weight: normal;
        font-style: normal
    }
    
    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }
    
    .fa-twitter:before {
        content: "\f099"
    }
    
    .fa-facebook-f:before,
    .fa-facebook:before {
        content: "\f09a"
    }
    
    .fa-envelope:before {
        content: "\f0e0"
    }
    
    .fa-angle-up:before {
        content: "\f106"
    }
    
    .fa-instagram:before {
        content: "\f16d"
    }
    
    .fa-long-arrow-right:before {
        content: "\f178"
    }
    
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }
    
    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }
    /* Global Style */
    
    body {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        letter-spacing: 1px;
        height: 100%;
        font-family: 'Nexa', sans-serif;
    }
    
    html,
    body {
        height: 100%
    }
    
    ::selection {
        background-color: #24b662;
        color: #ffffff;
    }
    
    ::-moz-selection {
        background-color: #24b662;
        color: #ffffff;
    }
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Fredoka One', cursive;
    }
    
    a {
        text-decoration: none;
    }
    
    img {
        width: 100%;
    }
    
    a:hover {
        color: #fff;
        text-decoration: none;
    }
    
    a:focus {
        outline: none;
        text-decoration: none;
    }
    
    p {
        line-height: 32px;
    }
    
    ul,
    li {
        margin: 0;
        padding: 0;
    }
    
    fieldset {
        border: 0 none;
        margin: 0 auto;
        padding: 0;
    }
    
    .button {
        border: none;
        font-family: inherit;
        font-size: inherit;
        color: inherit;
        background: none;
        cursor: pointer;
        padding: 25px 80px;
        display: inline-block;
        margin: 15px 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        outline: none;
        position: relative;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    
    .button:after {
        content: '';
        position: absolute;
        z-index: -1;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    
    .button:before {
        font-family: 'FontAwesome';
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        position: relative;
        -webkit-font-smoothing: antialiased;
    }
    
    .button-style {
        border-radius: 50px;
        border: 3px solid #fff;
        color: #fff;
        overflow: hidden;
    }
    
    .button-style:hover,
    .button-style:active,
    .button-style:focus {
        background: #24b662;
        color: #ffffff !important;
    }
    
    .button-style:before {
        position: absolute;
        height: 100%;
        font-size: 125%;
        line-height: 3.5;
        color: #fff;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    
    .button-style:active:before {
        color: #17954c;
    }
    
    .button-style-icon:before {
        left: 130%;
        top: -2px;
    }
    
    .button-style-icon:hover:before {
        left: 80%;
    }
    
    .section-space-padding {
        padding: 100px 0px;
        background-color: #022d41;
    }
    
    .section-title {
        text-align: center;
        color: #3fadd5;
    }
    
    .section-title h2 {
        margin-top: 0;
        font-weight: 600;
        border-bottom: 4px double #24b662;
        border-radius: 25px;
        font-size: 30px;
        margin: 0 auto;
        padding: 10px 0;
        width: 350px;
        margin-bottom: 30px;
    }
    
    .section-title p {
        font-weight: 400;
        line-height: 25px;
        margin-bottom: 40px;
    }
    /* Scrollbar */
    
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #FFCC66;
    }
    
    ::-webkit-scrollbar {
        width: 12px;
        background-color: #FFCC66;
    }
    
    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #3fadd5;
    }
    /* Home Section and Navigation Menu */
    
    .home-section {
        height: 10vh;
    }
    
    .home-section-background {
        position: relative;
        height: 100%;
        background: url(img/bem-full.JPG);
        background-size: cover;
        background-position: center top;
        z-index: 1;
    }
    
    .home-section-background:after {
        position: absolute;
        background: linear-gradient(rgba(217, 236, 242, .7), rgba(0, 0, 0, .7), rgba(0, 0, 0, .7), rgba(0, 0, 0, .7));
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        content: "";
        z-index: -1;
    }
    
    .img-scroll {
        width: 40%;
        margin-top: -2%
    }
    
    .display-table {
        display: table;
        width: 100%;
        height: 100%;
    }
    
    .display-table-cell {
        display: table-cell;
        vertical-align: middle;
    }
    
    .header-text {
        margin-bottom: 20%;
    }
    
    .home-section-background h2 {
        color: #f8f8f8;
        font-size: 50px;
        letter-spacing: 5px;
        margin: 0;
    }
    
    .home-section-background p {
        color: #f8f8f8;
        letter-spacing: 4px;
        font-size: 15px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    
    .typed-cursor {
        opacity: 1;
        -webkit-animation: blink 0.7s infinite;
        -moz-animation: blink 0.7s infinite;
        animation: blink 0.7s infinite;
    }
    
    @keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    
    @-webkit-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    
    @-moz-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    
    .header-top-area {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 9999;
        -webkit-transition: all 0.4s ease-out;
        transition: all 0.4s ease-out;
    }
    
    .logo {
        padding-top: 28px;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    
    .logo a {
        display: block;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 6px;
        font-weight: 900;
        font-size: 14px;
    }
    
    .navigation-menu .navbar-nav li a {
        color: #194555;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        padding: 30px 15px;
        -webkit-transition: .3s;
        transition: .3s;
        font-weight: 600;
    }
    
    .navigation-menu .navbar-nav li a:hover {
        background: none;
        color: #FFCC66;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    
    .nav li a:focus,
    .nav li a:hover {
        background: none;
        color: #FFCC66;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    
    .navbar {
        margin: 0;
    }
    
    .navigation-background {
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        background: #CCFFFF;
    }
    
    .navigation-background .logo {
        padding-top: 18px;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    
    .navigation-background .navigation-menu .navbar-nav li a {
        color: #022d41;
        padding: 20px 15px;
        -webkit-transition: .3s;
        transition: .3s;
    }
    
    .navigation-background .navigation-menu .navbar-nav li a:hover {
        color: #ff414d;
    }
    /* About Me */
    
    .about-section {
        overflow: hidden;
      
    }
    
    .about-section img {
        position: absolute;
    }
	 .about-section2 {
        overflow: hidden;
    }
    
    .about-section2 img {
        position: absolute;
    }
    
    .about-me {
	background-color :#FFCC66;
	}
    
    .about-me h2 {
        padding: 0px 50px;
        color: #3fadd5;
    }
    
    .about-me p {
        text-align: justify;
        padding: 50px;
        font-size: 15px;
        color: #194555;
    }
    /* Organigram */
    
    .organigram {
        overflow-x: hidden;
        padding: 50px 0px;
        background-color: #022d41;
    }
    
    .organigram .cover {
        overflow-x: hidden;
    }
    
    .organigram .img {
        margin: auto;
        height: auto;
        width: 100%;
    }
    /* Portfolio */
    
    .portfolio .filter {
        /*display: none;*/
    }
    
    .portfolio-inner .mix {
        display: none;
    }
    
    ul.portfolio {
        padding: 0;
        list-style: none;
        margin-top: 30px;
        margin-left: 8px;
        text-align: center;
    }
    
    ul.portfolio li {
        display: inline-block;
        padding: 8px 12px;
        margin: 0 8px;
        text-transform: capitalize;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border: none;
        cursor: pointer;
        font-size: 13px;
    }
    
    ul.portfolio li:hover {
        color: #000;
        border: none;
    }
    
    ul.portfolio li.active {
        color: #ffffff;
        background-color: #24b662;
        padding: 5px 20px;
        border-radius: 20px;
        box-shadow: 0px 1px 2px 0px rgba(90, 91, 95, 0.15);
    }
    
    .portfolio .item {
        margin-top: 30px;
        position: relative;
        max-height: 358px;
    }
    
    .portfolio .item img {
        width: 100%;
        object-fit: cover;
    }
    
    .item {
        -webkit-transition: .3s;
        transition: .3s;
    }
    
    .portfolio .item:hover a:before {
        top: 40%;
        box-shadow: 0px 16px 22px 0px rgba(90, 91, 95, 0.3);
        -webkit-transition: all 400ms ease-in-out;
        transition: all 400ms ease-in-out;
    }
    
    .portfolio .item a:before {
        color: #ffffff;
        content: "\f00e";
        font-family: "FontAwesome";
        text-align: center;
        color: #ffffff;
        position: absolute;
        font-size: 25px;
        top: 2%;
        opacity: 0;
        left: 0%;
        right: 0%;
        background-color: #24b662;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        line-height: 70px;
        margin: 0 auto;
        -webkit-transition: all 400ms ease-in-out;
        transition: all 400ms ease-in-out;
    }
    
    .portfolio .item a:hover:before {
        opacity: 1;
    }
    /* Services */
    
    .services-section {
        background-color: #022d41;
    }
    
    .services-section hr {
        border-bottom: 2px solid #24b662;
        width: 42px;
        margin-left: 0px;
    }
    
    .services-section .services-detail {
        border-radius: 4px;
        border-bottom-right-radius: 20%;
        background-color: #ff414d;
        box-shadow: 0px 1px 2px 0px rgba(90, 91, 95, 0.15);
        transition: all 0.3s ease-in-out;
        position: relative;
        top: 0px;
        padding: 60px 40px 60px 40px;
        margin-top: 32px;
        height: 325px;
        vertical-align: middle;
    }
    
    .services-section .services-detail:hover {
        border-bottom-right-radius: 4px;
        box-shadow: 0px 16px 22px 0px rgba(90, 91, 95, 0.3);
        top: -5px;
    }
    
    .services-section .services-detail .fa {
        font-size: 42px;
    }
    
    .misi {
        display: inline-block;
        float: none;
    }
    
    .services-detail p {
        font-size: 1.2em;
        color: #fddf01;
    }
    /* Contact Us */
    
    .contact-us {
        background-color: #022d41;
    }
    
    .contact-us-detail p {
        color: #ff414d;
        font-family: 'Fredoka One', cursive;
        font-size: 1.1em;
    }
    
    .contact-us-detail img {
        width: 50%;
    }
    
    .contact-us-detail i {
        font-size: 30px;
        margin-bottom: 10px;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: 0px 1px 2px 0px rgba(90, 91, 95, 0.15);
        transition: all 0.3s ease-in-out;
        width: 88px;
        height: 88px;
        line-height: 88px;
    }
    
    .contact-us-detail:hover i {
        box-shadow: 0px 8px 15px 0px rgba(90, 91, 95, 0.33);
        margin-top: -5px;
    }
    
    .contact-us-detail a {
        color: #333;
    }
    
    .contact-us-detail a:hover {
        color: #333;
    }
    
    .visi h2 {
        color: #d9ecf2;
        font-size: 2.5em;
        text-align: center;
    }
    /* Social Icons */
    
    .social-icon {
        list-style: none;
        padding-left: 0;
        margin: 0;
        text-align: center;
    }
	.social-logo{
	    font-size: 150%;
    display: block;
    color: #3498db;
    margin-bottom: 10px;
    padding-left: 37%;
    transition: color 0.3s, transform 1s;
	
	}
    
    .social-icon:before,
    .social-icon:after {
        content: " ";
        display: table;
    }
    
    .social-icon:after {
        clear: both;
    }
    .social-icon li {
        display: inline-block;
        margin: 0px 4px;
    }
    
   
    
    .social-icon li a:hover {
        box-shadow: 0px 8px 15px 0px rgba(90, 91, 95, 0.33);
    }
    
    .social-icon li a .fa {
        line-height: inherit;
    }
    
   
    
 
    
   
    /* Footer */
    
    .footer-section {
        background: #CCFFFF;
        padding: 50px 0px;
        color: #022d41;
    }
    
    .footer-section p {
        font-size: 14px;
    }
    
    .footer-section a {
        color: #194555;
    }
    /* Scroll To Top */
    
    .scroll-to-top {
        background-color: #FFCC66;
        display: none;
        width: 50px;
        height: 50px;
        font-size: 25px;
        line-height: 50px;
        text-align: center;
        color: #1aa6b7;
        position: fixed;
        right: 0px;
        bottom: 50px;
        z-index: 999;
    }
    
    .scroll-to-top:hover,
    .scroll-to-top:focus {
        background-color: #194555;
        color: #ffffff;
    }
    /* Margin Top */
    
    .margin-top-10 {
        margin-top: 10px;
    }
    
    .margin-top-20 {
        margin-top: 20px;
    }
    /* Margin Bottom */
    
    .margin-bottom-30 {
        margin-bottom: 30px;
    }
    
    .margin-bottom-50 {
        margin-bottom: 50px;
    }
    /* Colors */
    
    .color-1 {
        color: #f306a0;
    }
    
    .color-2 {
        color: #d60bfb;
    }
    
    .color-3 {
        color: #d8be10;
    }
    
    .color-4 {
        color: #0fd28a;
    }
    
    .color-5 {
        color: #f97400;
    }
    
    .color-6 {
        color: #08a6f3;
    }
    /* Responsive */
    
    @media only screen and (max-width: 449px) {
        .button {
            padding: 15px 30px;
            font-weight: 600;
            font-size: 10px;
        }
        .button-style:before {
            display: none;
        }
        .header-text {
            margin-bottom: 100%;
        }
    }
    
    @media only screen and (min-width: 767px) and (max-width: 991px) {
        .navigation-menu .navbar-nav li a {
            padding: 30px 11px;
            font-size: 12px;
        }
        .navigation-background .navigation-menu .navbar-nav li a {
            padding: 30px 11px;
            font-size: 12px;
        }
        .navigation-background .logo {
            padding-top: 28px;
        }
    }
    
    @media only screen and (max-width: 991px) {
        .about-section img {
            position: inherit;
        }
		.about-section2 img {
            position: inherit;
        }
        .space-set {
            margin-top: 80px;
        }
        .footer-section p {
            text-align: center !important;
        }
    }
    
    @media only screen and (max-width: 767px) {
        .navbar-toggle .icon-bar {
            background: #FFCC66;
        }
        .navigation-background .navbar-toggle .icon-bar {
            background: #FFCC66;
        }
        .navbar-toggle {
            margin-right: 0px;
            margin-top: -30px;
        }
        .navbar {
            min-height: 0px;
        }
        .navigation-menu .navbar-nav li a {
            padding: 11px 15px;
        }
        .navigation-menu .navbar-nav li a:hover {
            color: #FFCC66;
        }
        .navigation-background .navigation-menu .navbar-nav li a:hover {
            color: #FFCC66;
        }
        .navigation-background .navigation-menu .navbar-nav li a {
            padding: 11px 15px;
        }
        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 420px;
        }
        .navbar-toggle {
            margin-top: -30px;
        }
        .navbar-collapse {
            background: #CCFFFF;
        }
        .navigation-background .navbar-collapse {
            background: #CCFFFF;
        }
        .home-section-background {
            padding-top: 120px;
        }
        .home-section-background h2 {
            font-size: 22px;
        }
        .section-title h2 {
            font-size: 22px;
        }
        .contact-us-detail {
            margin-bottom: 30px;
        }
    }
    
    @media only screen and (max-width: 555px) {
        .organigram .cover {
            overflow-x: scroll;
        }
        .organigram img {
            height: 100vh;
            width: auto;
        }
        .img-scroll {
            width: 20%;
            margin-top: -4%
        }
        .social-icon li a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            font-size: 20px;
        }
        .section-title h2 {
            font-size: 16px;
        }
        .section-title h2 {
            font-weight: 500;
            width: 200px;
        }
        .section-title p {
            font-weight: 300;
            font-size: 12px;
        }
        .home-section-background h2 {
            font-size: 18px;
        }
        .home-section-background p {
            font-size: 12px;
        }
        .visi h2 {
            font-size: 1em;
        }
    }
    </style>
    <style amp-boilerplate>
    body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }
    
    @-webkit-keyframes -amp-start {
        from {
            visibility: hidden
        }
        to {
            visibility: visible
        }
    }
    
    @-moz-keyframes -amp-start {
        from {
            visibility: hidden
        }
        to {
            visibility: visible
        }
    }
    
    @-ms-keyframes -amp-start {
        from {
            visibility: hidden
        }
        to {
            visibility: visible
        }
    }
    
    @-o-keyframes -amp-start {
        from {
            visibility: hidden
        }
        to {
            visibility: visible
        }
    }
    
    @keyframes -amp-start {
        from {
            visibility: hidden
        }
        to {
            visibility: visible
        }
    }
	/* --- Section Images --- */
/* -------------- */
.section-images{
    padding: 80px 0;
    height: 100vh;
    background-size: cover;
    background-position: center;
    transition: background-color 2s;
}
.section-images > h2{
text-align : center;
color : #000;
}

.port-images{
    padding-left: 4%;
    list-style: none;
    width: 100%;
    padding-top: 30px;
}
.port-images li{
    display: block;
    float: left;
    width: 24%;
}
.port-photo{
    width: 100%;
    margin:0;
    overflow: hidden;
    background-color: #000;
}
.port-photo img{
    opacity: 0.7;
    width: 300px;
    height: 200px;
    transform: scale(1.15);
    transition: transform 0.5s,opacity 0.5s;
}
.port-photo img:hover{
    opacity: 1;
    transform: scale(1.03);
	background-color : #000;
}
.icon{
    font-size: 470%;
    display: block;
    color: #3498db;
    margin-bottom: 30px;
    margin-left : 0px;
    transition: color 0.3s, transform 1s;
    
}

	/* --- Section Lembaga --- */
/* -------------- */
.section-lembaga{
    height: 100vh;
    transition: background-color 2s;
}

.port-lembaga{
    list-style: none;
    width: 100%;
}
.port-logo img{
	width: 100px;
    height: auto;
}
.port-logo2 img{
	width: 100px;
    height: auto;
}
.port-logo3 img{
    width: 100px;
    height: auto;
}
.port-logo4 img{
    width: 100px;
    height: auto;
}
.port-logo5 img{
    width: 100px;
    height: auto;
}
.port-logo6 img{
    width: 100px;
    height: auto;
}.port-logo7 img{
    width: 100px;
    height: auto;
}.port-logo8 img{
    width: 100px;
    height: auto;
}.port-logo9 img{
    width: 100px;
    height: auto;
}.port-logo10 img{
    width: 100px;
    height: auto;
	}
.port-lembaga li{
    display: inline-block;
	}
	.kotak-polos{
position : relative;
width : 120px;
padding-right: 60px;
margin-bottom : 400px;
}
.kotak-polos:hover .img-activity {
  opacity: 0.3;
}

.kotak-polos:hover .middle2 {
  opacity: 1;
}
.logo-kementrian{
height :auto;
width :120px;
}
.container2 {
    position: relative;
    width: 50%;
}

.img-activity {
  opacity: 1;
  height :auto;
width :400px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle2 {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
 margin-top :20px;
  left: 90%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container2:hover .img-activity {
  opacity: 0.3;
}

.container2:hover .middle2 {
  opacity: 1;
}

.text2 {
  color: black;
  font-size: 20px;
  padding: 16px 32px;
}
.button2 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
}
.card {
	 width: 100%;
     background-color: white;
	 opacity :1;
     padding: 20px;
     margin-top: 20px;
}
.fakeimg {
    width: 100%;
    padding: 20px;
}
.img-post {
    width: 100%;
    height: 60%;
    padding-left: 20%;
    margin-top: -40px;
    margin-left: -200px;
}
@media (min-width:1500px) {
        .img-post {
            width: 400px;
            height: 60%;
            padding-left: 6%;
            margin-top: -40px;
            margin-left: -200px;
        }
    }
@media (min-width:1500px) {
        .img-post {
            width: 100%;
            height: 60%;
            padding-left: 15%;
            margin-top: -40px;
            margin-left: -200px;
        }
    }
    </style>
    <noscript>
        <style amp-boilerplate>
        body {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none
        }
        </style>
    </noscript>
    </head>
    <body>
        <!-- Home & Menu Section Start -->
        
    <header id="home" class="home-section">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php"><img class="img-scroll" src="img/bem-datar.png"></a>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home"><div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="?page=new">Input Berita</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="?page=see">Lihat Post</a>
                                        </li>
										<li><a class="smoth-scroll" href="?logout=true"> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- end -->
 <?php
 	if(isset($_POST['submit'])){
        $query = "SELECT * FROM mainwebpost";
        $sql = mysqli_query($conn, $query);
        $rows = $sql->num_rows;

        $admin = $_SESSION['userSession'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $tanggal = $_POST['tanggal'];
        $isi = $_POST['isi'];
        //$gambar = $_FILES['gambar']['name'];
        $namagambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $gambarExt = explode('.', $namagambar);
        $ext = strtolower(end($gambarExt));
        $namagambarFix = $nama.$rows.".".$ext;
        $dir = "img/".$namagambarFix;
        move_uploaded_file($gambar_tmp, $dir);
        // $type = $_FILES['gambar']['type'];
        // $ext = GetImageExtension($type);
        // $imagename = date("d-m-Y")."-".time().$ext;
        $query = "INSERT INTO `mainwebpost` (`nama`, `kategori`, `tanggal`, `isi`, `gambar`, `admin`)
                    VALUES ('$nama', '$kategori', '$tanggal', '$isi', '$namagambarFix', '$admin')";
        mysqli_query($conn, $query);
        // echo "SUKSES";
        echo "<script>
              swal(
                'Sukses',
                'Data sudah di upload',
                'success'
              )
              </script>";
    }
    if(isset($_GET['edited'])){
            echo "<script>
              swal(
                'Sukses',
                'Data sudah di edit',
                'success'
              )
              </script>";
        }
    if(isset($_GET['deleted'])){
        echo "<script>
          swal(
            'Sukses',
            'Data sudah di hapus',
            'success'
          )
          </script>";
    }
 //    if(isset($_GET['edit'])){
	// 	echo "<script>
 //              swal(
 //                'Sukses',
 //                'Data sudah di edit',
 //                'success'
 //              )
 //              </script>";	
	// }
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    
    // echo isset($_GET['page']);
   	switch ($page) {
    		case 'new':
    			include_once "newContent.php";
    			break;
    		case 'see':
    			include_once "postList.php";
    			break;
    		case 'edit':
    			include_once 'editPost.php';
    			break;
    		
    		default:
    			include_once "newContent.php";
    			
    	}
    			// include_once "newContent.php";
    
 ?>
<!-- Footer Start -->
<footer class="footer-section">
	<!--Footer-->
      
          <!--Footer Links-->
          <div class="container text-center text-md-left">
	 <!--First column-->
                  <div class="col-md-6 col-sm-12">
                      <h6 class="text-uppercase mb-4 font-weight-bold">BEM FILKOM UB</h6>
                      <p>Sekretariat Gedung D1.11</p>
					  <p>Fakultas Ilmu Komputer</p>
                  </div>
                  <!--/.First column-->
				   <!--Second column-->
                  <!--/.Third column-->
				   <!--Fourth column-->
                  <div class="col-md-6 col-sm-12">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                     <ul class="social-icon" id="contact">
                <li><a href="#" target="_blank" class="facebook"><i class="ion-social-facebook social-logo"></i></a></li>
                <li><a href="#" target="_blank" class="twitter"><i class="ion-social-twitter social-logo"></i></a></li>
                <li><a href="#" target="_blank" class="instagram"><i class="ion-social-instagram social-logo"></i></a></li>
                <li><a href="#" target="_blank" class="dribbble"><i class="ion-social-youtube social-logo"></i></a></li>
                <li><a href="#" target="_blank" class="line"><i class="ion-social-whatsapp social-logo"></i></a></li>
            </ul>
                  </div>
                  <!--/.Fourth column-->
       
        <div class="container">
            <div class="row">
             
                <div class="col-md-6">
                    <p>© Copyright 2018 BEM FILKOM</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="ion-arrow-up-b"></i></a>
    <!-- Back to Top End -->
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src=" http://materializecss.com/templates/starter-template/js/init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</body>
</html>
<script type="text/javascript">
               
	    $(document).ready(function(){
	      $('.modal').modal();
	      $('select').material_select();
	      $(".button-collapse").sideNav();
$('.tooltipped').tooltip({delay: 50});
	    }); 
	      $('.datepicker').pickadate({

		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15, // Creates a dropdown of 15 years to control year
		    format: 'yyyy-mm-dd'
		  }); 

          
               
	</script>