<footer>
    <div class="top-footer-off">
        <div class="container">
            <div >
                <h5 class="mb-3 h5-register pt-5">CADASTRE-SE E GANHE 5% OFF NA PRIMEIRA COMPRA</h5>
                <div class="register">
                        <div class="row ">
                        <div class="col-sm-6">
                            <input class="form-control input-register" type="text" placeholder="Digite o seu melhor e-mail">
                        </div>
                        <div id="div-register" class="col-sm-6">
                            <button type="submit" class="btn">FEMININO</button>
                            <button type="submit" class="btn">MASCULINO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
    <div class="container">
        <div class="row">
            <?php 
            if(is_active_sidebar('oc_footer_sidebar_top')){
                dynamic_sidebar( 'oc_footer_sidebar_top' );
            }
            ?>
        </div>
        <div id="payment" class="row">
            <?php 
            if(is_active_sidebar('oc_footer_sidebar_bottom')){
                dynamic_sidebar( 'oc_footer_sidebar_bottom' );
            }
            ?>
        </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="copyright">OCCHIALERIA - AVENIDA DAS AMÉRICAS, 3500 - BARRA DA TIJUCA - RIO DE JANEIRO - RJ | 05346-000 CNPJ: 12.534.669/0001-42</p>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
            <a href="<?php echo esc_url('https://digitaluow.com.br/')?>"><img class="logo-footer" src="wp-content\themes\occhialeria\assets\images\LOGO - DIGITAL UOW.png"></a>
                
            </div>
        </div>
        </div>
    </div>

    <button onclick="topFunction()" id="btn-top" title="Go to top"><i class="fas fa-arrow-up"></i></button>
</footer>

     	<?php wp_footer()?>

</body>
</html>

