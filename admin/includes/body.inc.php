<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
function isStop($char){
    switch ($char){
        case ' ':
        case ',':
        case '!':
        case '?':
        case ':':

        case '.':return(1);
    }
    return(0);
}
function resumo($str, $num){
    if($num>strlen($str))
        return($str);
    while(!isStop($str[$num])){
        $num++;
    }
    return(substr($str,0,$num)." (...)");
}

function idade($data){
    $timeStamp=strtotime($data);
    $ano=intval(date("Y",$timeStamp));
    $mes=date("m",$timeStamp);
    $dia=date("d",$timeStamp);
    $anoD=intval(date("Y"));
    $mesD=intval(date("m"));
    $diaD=intval(date("d"));
    return (($mes==$mesD && $dia <= $diaD)||($mes<$mesD)?$anoD-$ano:$anoD-$ano-1);
}


function drawTop($menu=HOME,$page=''){
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Site de Resultados</title>
        <script src="js/common.js"></script>
        <script src='js/tinymce/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: 'textarea#descricaoNoticia',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: "30s",
                autosave_prefix: "{path}{query}-{id}-",
                autosave_restore_when_empty: false,
                autosave_retention: "2m",
                image_advtab: true,
                /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
                link_list: [
                    { title: 'My page 1', value: 'https://www.codexworld.com' },
                    { title: 'My page 2', value: 'https://www.xwebtools.com' }
                ],
                image_list: [
                    { title: 'My page 1', value: 'https://www.codexworld.com' },
                    { title: 'My page 2', value: 'https://www.xwebtools.com' }
                ],
                image_class_list: [
                    { title: 'None', value: '' },
                    { title: 'Some class', value: 'class-name' }
                ],
                importcss_append: true,
                file_picker_callback: function (callback, value, meta) {
                    /* Provide file and text for the link dialog */
                    if (meta.filetype === 'file') {
                        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                    }
                    /* Provide image and alt text for the image dialog */
                    if (meta.filetype === 'image') {
                        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                    }
                    /* Provide alternative source and posted for the media dialog */
                    if (meta.filetype === 'media') {
                        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                    }
                },
                templates: [
                    { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
                ],
                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                height: 600,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                noneditable_noneditable_class: "mceNonEditable",
                toolbar_mode: 'sliding',
                contextmenu: "link image imagetools table",
            });
        </script>
        <script>
            $('document').ready(function (){
            <?php
                if($page=='nj' || $page=='ej'){
                ?>
                $('#clubesCasa').change(function (){
                    fillClubs('clubesFora',this.value);
                    $('#clubesFora').prop('disabled',false);
                });
                <?php
                }
                if($page!='ej')
                    echo "fillClubs('clubesCasa',0);";
                ?>
            })

        </script>
        <link rel="stylesheet" href="css/estilos.css">


    </head>
    <body>
    <div class="container w-100  " style="border: solid 1px #888">
    <div id="topo" class="p-2" >
    <img style="float:left; margin-right: 20px" src="images/logo.jpg">
    <h1 class="ml-5" style="color: #ff2d00">Site de resultados</h1>
    <ul class="nav nav-pills nav-justified ">
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==HOME?" active ":"");?>" href="index.php">Pagina principal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==CLUBES?" active ":"");?>" href="listaClubes.php">Lista de clubes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==JOGADORES?" active ":"");?>" href="listaJogadores.php">Lista jogadores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==JOGOS?" active ":"");?>" href="listaJogos.php">Lista jogos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==NOTICIAS?" active ":"");?>" href="listaNoticias.php">Lista Noticias</a>
        </li>
    </ul>
    </div>
    <?php
}
function drawBottom(){
    ?>
    </div> <!-- container principal -->
    </body>
    </html>
    <?php
}

?>