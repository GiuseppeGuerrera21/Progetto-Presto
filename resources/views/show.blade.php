<x-layout>
    <x-nav/>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
                <h1> {{ $article->title }}</h1>
            </div>
        </div>
    </div>

      <div class="container">
  <div class="row">
    <div class="col-sm-6">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/350x250/e8117f/fff&amp;text=Product+Main">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+2">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/ff00ff/fff&amp;text=Product+Image+3">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/ffff00/000&amp;text=Product+Image+4">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/612b65/fff&amp;text=Product+Image+5">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+6">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/db371b/fff&amp;text=Product+Image+7">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/feb8aa/000&amp;text=Product+Image+8">
                </div>
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100/e8117f/fff&amp;text=Product+Main"></div>
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100/00ffff/000&amp;text=Product+Image+2"></div>
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100/ff00ff/fff&amp;text=Product+Image+3"></div>
                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100/ffff00/000&amp;text=Product+Image+4"></div>
                </div><!-- /item -->
                <div class="item">
                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100/612b65/fff&amp;text=Product+Image+5"></div>
                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100/00ffcc/000&amp;text=Product+Image+6"></div>
                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100/db371b/fff&amp;text=Product+Image+7"></div>
                    <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100/feb8aa/000&amp;text=Product+Image+8"></div>
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
    </div> <!-- /col-sm-6 -->
    <div class="col-sm-6">
        <h2>Products</h2>
        <h3>Some product subhead</h3>
        <p>Product description goes here.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>

    </div> <!-- /col-sm-6 -->
  </div> <!-- /row -->
</div> <!-- /container -->

</x-layout>