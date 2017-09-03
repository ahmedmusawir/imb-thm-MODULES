<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<section id="heather-blog-indx">
Browser Class = {{ browserClass }}

Browser Detect = {{ browserDetect() }}
	<main id="col-wrapper">
		<div id="columns" class="container">


			<!-- <article class="article-content-block" :class="{chrome: browserClass, safari: !browserClass }"> -->
			<article class="article-content-block" :class="{safari: browserClass}">
			    <a class="article--link" href="/this-is-a-sample-post-3-copy/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<img src="http://via.placeholder.com/450x225" alt="">
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline">Lorem ipsum dolor sit amet business Design </h4>

			            <p class="article-date" itemprop="datePublished">May 25, 2017 </p>

			            <p class="article-text">
			            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<a class="socialicons-facebook pull-right" onclick="essb_window('http://www.facebook.com/sharer/sharer.php?u=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;t=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana','facebook','635420585'); return false;" target="_blank" rel="nofollow">
		        			<i class="fa fa-facebook" aria-label="Facebook"></i>
			            </a>

			            <a class="socialicons-twitter pull-right" onclick="essb_window('https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana&amp;url=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;counturl=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;related=asana&amp;via=asana','twitter','635420585'); return false;" target="_blank" rel="nofollow">
			                <i class="fa fa-twitter" aria-label="Twitter"></i>
			            </a>
			        </div>
			    </footer>
			</article>

			<!-- <article class="article-content-block" :class="{chrome: browserClass, safari: !browserClass }"> -->
			<article class="article-content-block" :class="{safari: browserClass}">
			    <a class="article--link" href="/this-is-a-sample-post-3-copy/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<!-- <img src="http://via.placeholder.com/250x125" alt=""> -->
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline">Lorem ipsum dolor sit amet business Design </h4>

			            <p class="article-date" itemprop="datePublished">May 25, 2017 </p>

			            <p class="article-text">
			            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<a class="socialicons-facebook pull-right" onclick="essb_window('http://www.facebook.com/sharer/sharer.php?u=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;t=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana','facebook','635420585'); return false;" target="_blank" rel="nofollow">
		        			<i class="fa fa-facebook" aria-label="Facebook"></i>
			            </a>

			            <a class="socialicons-twitter pull-right" onclick="essb_window('https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana&amp;url=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;counturl=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;related=asana&amp;via=asana','twitter','635420585'); return false;" target="_blank" rel="nofollow">
			                <i class="fa fa-twitter" aria-label="Twitter"></i>
			            </a>
			        </div>
			    </footer>
			</article>

			<!-- <article class="article-content-block" :class="{chrome: browserClass, safari: !browserClass }"> -->
			<article class="article-content-block" :class="{safari: browserClass}">
			    <a class="article--link" href="/this-is-a-sample-post-3-copy/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<img src="http://via.placeholder.com/450x225" alt="">
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline">Lorem ipsum dolor sit amet business Design </h4>

			            <p class="article-date" itemprop="datePublished">May 25, 2017 </p>

			            <p class="article-text">
			            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<a class="socialicons-facebook pull-right" onclick="essb_window('http://www.facebook.com/sharer/sharer.php?u=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;t=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana','facebook','635420585'); return false;" target="_blank" rel="nofollow">
		        			<i class="fa fa-facebook" aria-label="Facebook"></i>
			            </a>

			            <a class="socialicons-twitter pull-right" onclick="essb_window('https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana&amp;url=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;counturl=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;related=asana&amp;via=asana','twitter','635420585'); return false;" target="_blank" rel="nofollow">
			                <i class="fa fa-twitter" aria-label="Twitter"></i>
			            </a>
			        </div>
			    </footer>
			</article>

			<!-- <article class="article-content-block">
			    <a class="article--link" href="/this-is-a-sample-post-3-copy/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<img src="http://via.placeholder.com/250x125" alt="">
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline">Lorem ipsum dolor sit amet business Design </h4>

			            <p class="article-date" itemprop="datePublished">May 25, 2017 </p>

			            <p class="article-text">
			            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<a class="socialicons-facebook pull-right" onclick="essb_window('http://www.facebook.com/sharer/sharer.php?u=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;t=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana','facebook','635420585'); return false;" target="_blank" rel="nofollow">
		        			<i class="fa fa-facebook" aria-label="Facebook"></i>
			            </a>

			            <a class="socialicons-twitter pull-right" onclick="essb_window('https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana&amp;url=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;counturl=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;related=asana&amp;via=asana','twitter','635420585'); return false;" target="_blank" rel="nofollow">
			                <i class="fa fa-twitter" aria-label="Twitter"></i>
			            </a>
			        </div>
			    </footer>
			</article> -->

			

		</div> <!-- End Columns -->


	</main> <!-- MAIN COL WRAPPER -->
	
</section>

<!-- THE VUE JS CODE  -->
<script type="text/javascript">
new Vue ({
  el: '#heather-blog-indx',
  data: {
    ajax:           '<?php echo get_site_url(); ?>',
    posts:          '',
    browserClass: 	true,
  },  
  created: function() {
    this.getNews();
    this.browserDetect();
  },
  computed: {


  },
  methods: {
     getNews: function() {
        var app = this;
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;
            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });
     },
  	 browserDetect: function(){
	 	if(navigator.userAgent.indexOf("Chrome") != -1) {
        	// alert('Chrome');
        	this.browserClass = false;

        	return this.browserClass;	
    	}	
	 }          
  }
});
</script>
<?php

get_footer();
