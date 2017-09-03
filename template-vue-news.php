<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: News Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<section id="app" class="container-fluid">

 <div id="mobile-single-list" class="col-sm-12 col-xs-12 visible-xs visible-sm hide">
    
         <div class="">

            <h3>
              {{ news }}
            </h3> 
            <ul class="list-group well container" v-for="post in posts">
              <li class="list-group-item" >

                  <a :href="post.link">
                    <h4 class="" v-html="post.title.rendered">
                    
                    
                        {{ post.title.rendered }}


                    </h4>  
                  <hr/>

                  </a>  
                  <div class="row">
                    <a :href="post.link">
                        <div class="col-md-3 col-sm-3"><img class="img-responsive" :src="post.featured_thumb" alt=""></div>
                        
                    </a>
                    <div class="col-md-9 col-sm-9" v-html="post.excerpt.rendered">
                        {{ post.excerpt.rendered }}
                    </div>                    

                  </div>
              </li>
            </ul>
            
        </div>

  </div>


  <!-- FOR DESKTOPS -->
  <div id="primary" class="content-area col-md-5 col-lg-5 hidden-sm hidden-xs wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.3s">
    <main id="main" class="site-main" role="main">


        <div id="left-inner-content-div"  class="">

            <h3 class="text-center">
             {{ news }}
            </h3> 
              <br>
            <ul class="list-group well" v-for="post in posts">
              <li class="list-group-item " >
                <div class="row">
                  <a @click="getSingle(post.id, show=false)">
                    <h4 class="col-md-12" v-html="post.title.rendered">
                      {{ post.title.rendered }}
                    </h4>
                  <hr/>

                  </a>                  
                  <a @click="getSingle(post.id, show=false)">
                      <div class="col-md-3"><img class="img-circle img-responsive" :src="post.featured_thumb" alt=""></div>
                  </a>

                  <!-- <div class="col-md-9" v-html="post.excerpt.rendered">
                  </div> -->
                  <h1>{{ post.featured_media }}</h1>

                  <br>
                  <a @click="getSingle(post.id, show=false)">
                      <button class="btn btn-success btn-sm" type="">READ MORE</button>
                  </a>    


                </div>
              </li>
            </ul>
              
            
        </div>

  

    </main><!-- #main -->
  </div><!-- #primary -->

       <div id="right-inner-content-div" class=" col-md-7 col-md-7 hidden-sm hidden-xs" >

           <article >

            <h3 v-if="show" v-html="singlePost.title"  class=" animated zoomIn" >{{ singlePost.title }}</h3>

           </article>
           <article>
            <img v-if="show" class=" animated lightSpeedIn" class="img-responsive f-image" :src="singlePost.featured_full" alt="">

          </article>
          <article>

            <p  v-if="show" class=" animated fadeInUp" v-html="singlePost.content">
              {{ singlePost.content }}
            </p>

          </article>    
          
        </div>          
 
</section> <!-- End Container --> 
<!-- 

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js" type="text/javascript"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app-vue-news.js"></script>  

   -->
<?php
get_footer();
