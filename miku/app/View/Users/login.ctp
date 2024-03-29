<?php echo $this->element('slider'); ?>
<?php echo $this->Html->css('presentacion'); ?>
<br>
<div class="container">
    <div class="jumbotron">
        <h1 class="title-bienvenida">Bienvenido</h1>
        <p class="texto-presentacion">Ha llegado la hora de dejar la preocupación por no saber qué cocinar o qué plato degustar en su día a día. 
           Deje que <strong  class="title-bienvenida">Miku</strong> se haga cargo. Le proponemos los más variados y selectos platillos para que 
           usted los disfrute a la hora que lo solicite. Experimente el cambio... </p>
        <p><a class="btn btn-success btn-lg" id="btnPasos" href="#" role="button">Leer más &raquo;</a></p>
    </div>
    <?php echo $this->element('modal-pasos-orden'); ?>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2><span class="fa fa-leaf"></span> Entrada</h2>
            <div class="row">
                <div class="col-sm-5">
                    <?php echo $this->Html->image('entrada/causa.jpg', array('class'=>'img-presentacion img-responsive')); ?>
                </div>
                <div class="col-sm-7">
                    <p class="texto-presentacion">El primer plato para empezar su comida siempre es importante, por eso para  usted tenemos
                    los más esquisitos platillos que harán que su paladar queden maravillados. </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2><span class="fa fa-cutlery"></span> Principal</h2>
            <div class="row">
                <div class="col-sm-5">
                    <?php echo $this->Html->image('menu/aji.jpg', array('class'=>'img-presentacion img-responsive')); ?>
                </div>
                <div class="col-sm-7">
                    <p class="texto-presentacion">Están a su disposición los tradicionales y finos 
                        platillos elaborados con los 
                        mejores ingredientes del mercado y con una cuidadosa salubridad.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2><span class="fa fa-glass"></span> Bebidas</h2>
            <div class="row">
                <div class="col-sm-5">
                    <?php echo $this->Html->image('bebida/chicha.jpg', array('class'=>'img-presentacion img-responsive')); ?>
                </div>
                <div class="col-sm-7">
                    <p class="texto-presentacion">Tenemos bebidas naturales  y bebidas de marcas reconocidas. 
                        Siempre pensando en sus gustos. Nosotros le mostramos. ¡Usted elige!</p>
                </div>
            </div>
        </div>
    </div>
</div>