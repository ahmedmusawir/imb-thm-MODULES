<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Testimonial Page Template
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

<section id="testimonials" class="container-fluid">

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
  <div id="primary" class="content-area col-md-12 col-lg-12 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.3s">
    <main id="main" class="site-main" role="main">


        <div id="left-inner-content"  class="">

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
                  <figure>
                    <img :src="post.acf.client_image" alt="">
                    <figcaption>{{ post.acf.client_description }}</figcaption>
                    
                  </figure>
                  <h1>{{ post.acf.client_content }}</h1>

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

      
 
</section> <!-- End Container --> 

<script type="text/javascript">

new Vue ({
  el: '#testimonials',
  data: {
    videoTitle:     'VIDEOS',  
    news:           'LATEST NEWS',  
    ajax:           '<?php echo get_site_url(); ?>',
    posts:          '',
    vids:           '',
    singlePost:     [''],
    show:           false,
    id:             '' 
  },  
  created: function() {

    this.getNews();
    // this.getVids();

    this.getSingle(758);
    // this.getSingleVid(3310);
  },
  methods: {
     getNews: function() {

        var app = this;

         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;
            app.id = app.posts[0].id;

            console.log(app.posts);

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });

     },
     
     getSingle: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


     getSingleNews: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


         
  }

});


// new Vue ({
//   el: '#app',
//   data: {
//     message:  'Vue 2.0 is Working',
//     ajax:     'Posts Should Display Here',
//     posts:    ''
//   },
//   methods: {
//     selectFruit(post) {
//       this.message = post;
//     }
//   },
//   created: function() {
//     // console.log('created ran');
//     this.$http.get('http://dmol.local/wp-json/wp/v2/posts/')
//       .then(function(response){
//           console.log(response);

//           this.posts = response.data;
//       });
//   }
// });




// new Vue ({
//   el: '#app',
//   data: {
//     message: 'Hello Vue 2.0',
//     fruits: [ 'apple', 'Microsoft', 'VMware', 'OSx' ]
//   },
//   methods: {
//     selectFruit(fruit) {
//       this.message = fruit;
//     }
//   }
// });  
</script>

<?php
get_footer();
