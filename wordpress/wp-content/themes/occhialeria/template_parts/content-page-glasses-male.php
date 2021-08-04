<div class="bg-div">
        <div class="container">
                <div class="col-sm h-breadcrumb">
                <h1 class="h2-bg-div">MASCULINO</h1>
                    <div class="breadcrumb">
                    <?php get_breadcrumb(); ?>
                    </div>
                </div> 
        </div>
        
   
</div>       





<?php 
            if(is_active_sidebar('oc_sidebar_body')){
                dynamic_sidebar( 'oc_sidebar_body' );
            }
            ?>







            <div class="menu-departamento">
    <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">MARCA</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a id="ARMANI" onclick="open_section(this.id)" href="#" class="dropdown-item">ARMANI</a>
                                <a id="GUCCI" href="#" onclick="open_section(this.id)" href="#" class="dropdown-item">GUCCI</a>
                                <a id="VERSACE" href="#" onclick="open_section(this.id)" href="#"class="dropdown-item">VERSACE</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CATEGORIA</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a id="ÓCULOS DE SOL" onclick="open_section(this.id)" href="#" class="dropdown-item">ÓCULOS DE SOL</a>
                                <a id="ÓCULOS DE GRAU" onclick="open_section(this.id)" href="#" class="dropdown-item">ÓCULOS DE GRAU</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">FORMATO</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a id="OVAL" onclick="open_section(this.id)" href="#" class="dropdown-item">OVAL</a>
                                <a id="REDONDO" onclick="open_section(this.id)" href="#" class="dropdown-item">REDONDO</a>
                                <a id="QUADRADO" onclick="open_section(this.id)" href="#"class="dropdown-item">QUADRADO</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">TAMANHO</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">PEQUENO</a>
                                <a href="#" class="dropdown-item">MÉDIO</a>
                                <a href="#"class="dropdown-item">GRANDE</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">GÊNERO</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">MASCULINO</a>
                                <a href="#" class="dropdown-item">FEMININO</a>
                                
                                <a href="#"class="dropdown-item">UNISSEX</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">MATERIAL</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">AÇO</a>
                                <a href="#" class="dropdown-item">TITÂNIO</a>
                                
                                <a href="#"class="dropdown-item">PLÁSTICO</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">TIPO DE LENTE</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">NORMAL</a>
                                <a href="#" class="dropdown-item">TRANSITIONS</a>
                                
                                <a href="#"class="dropdown-item">ESPECIAL</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">COR</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">AZUL</a>
                                <a href="#" class="dropdown-item">VERMELHO</a>
                                
                                <a href="#"class="dropdown-item">AMARELO</a>
                            </div>
                        </li>
                    </ul><ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PREÇO</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">ATÉ 1000</a>
                                <a href="#" class="dropdown-item">1000 - 2000</a>
                                
                                <a href="#"class="dropdown-item">2000 - 5000</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
    </div>
</div>



<div class="container container-escolha"><a class="a-marcas" onclick="fecharFiltro()" id="testeh" ></a></div>

<div id="marcas">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="categoria">
    <div class="container">
<?php echo do_shortcode("[products product_categories ids='82' limit='4' columns='4']"); ?>
    </div>
</div>

<div id="formato">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="tamanho">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="genero">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="material">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="tipo-lente">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="cor">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>

<div id="preco">
    <div class="container">
<?php echo do_shortcode("[products limit='4' columns='4']"); ?>
    </div>
</div>





<?php 
            if(is_active_sidebar('oc_sidebar_produtos')){
                dynamic_sidebar( 'oc_sidebar_produtos' );
            }
            ?>