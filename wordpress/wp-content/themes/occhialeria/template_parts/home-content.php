<section>
   <div class="container">
      <div class="novidades">
         <h5 class="mb-3 text-center pt-5">NOVIDADES</h5>
         <?php echo do_shortcode("[products columns='4']"); ?>
      </div>

      <div class="mais-vendidos mb-5">
         <h5 class="mb-3 text-center pt-5">MAIS VENDIDOS</h5>
         <?php echo do_shortcode("[products columns='4']"); ?>
      </div>
   </div>

<div  class = "carousel slide  w-100" >
   <div class ="inner">
      <div class = "carousel-item active">
                     <div class="container">
                           <div class="col-sm-3 inner-text2">
                              <span class="inner-span4">COLEÇÃO VERÃO</span><br>
                              <span class="inner-span5">2020</span><br>
							         <span class="inner-span6">APROVEITE</span>
                           </div>
                     </div>
                             <img class = "d-block w-100" src = "wp-content\themes\occhialeria\assets\images\banner-img-2.jpg" >
      </div>
   </div>
</div>
</section>

<div class="container">
   <div  class="row  box-row">
      <div  class="col-sm-6">
         <div class="box-left pt-5">
                  <img class="img-box-left" src="wp-content\themes\occhialeria\assets\images\img-box-left.jpg">
                  <div class="col-sm-5 inner-texts ">
                  <h6 class="inner-span7 mb-2">MASCULINO</h6>
                  <span class="inner-span8"><a>VEJA MAIS</a></span>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
               <div class="box-right pt-5">
                  <?php echo do_shortcode("[products limit='4' columns='2']"); ?>
               </div>
         </div>
      </div>
	</div>
</div>



<div class="container">
   <div id="box-row-id" class="row  box-row">
      <div  class="col-sm-6">
         <div class="box-left pt-5">
                  <img class="img-box-left" src="wp-content\themes\occhialeria\assets\images\img-box-right.jpg">
                  <div class="col-sm-5 inner-texts ">
                  <h6 class="inner-span7 mb-2">FEMININO</h6>
                  <span class="inner-span8"><a>VEJA MAIS</a></span>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
               <div class="box-right pt-5">
               <?php echo do_shortcode("[products limit='4' columns='2']"); ?>
               </div>
         </div>
      </div>
	</div>
</div>




<div id="box-row2-id" class="container">
	<div class="row box-row2">
            <div class="col-sm-6 box2">
            <div class=" pt-5">
            <?php echo do_shortcode("[products limit='4' columns='2']"); ?>
				</div>
		</div>
         <div  class="col-sm-6">
               <div class="pt-5">
                  <img class="img-box-right" src="wp-content\themes\occhialeria\assets\images\img-box-right.jpg">
                  <div class="col-sm-6  inner-texts-box-bottom ">
                  <h6 class="inner-span7 mb-2">FEMININO</h6>
                  <span class="inner-span8"><a>VEJA MAIS</a></span>
               </div>
         </div>
      </div>
	</div>
</div>