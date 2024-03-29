
<!DOCTYPE html>
<html>


<body>
<!-- header -->

<script src="https://js.paystack.co/v1/inline.js"></script>
<!-- top-brands -->
<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_test_47bf1b5981e798fdb38108aee099206ab39805b9',
            email: 'customer@email.com',
            amount: 10000,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: 'Stephen',
            lastname: 'King',
            // label: "Optional string that replaces customer email"
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function(response){
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function(){
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>
<div class="top-brands">
    <div class="container" id="paypal-button-container">
        <h3>Available produce</h3>
        <div class="agile_top_brands_grids">
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="assets/ecommerce/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title="" alt=" " src="assets/ecommerce/images/cassava.jpg" style="width: 140px; height: 140px;"/></a>
                                        <p>Cassava (1KG)</p>
                                        <h4>&#8358;499.99 <span>&#8358;699.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Cassava (1KG)" />
                                                <input type="hidden" name="amount" value="699.99" />
                                                <input type="hidden" name="discount_amount" value="200.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <button type="button" onclick="payWithPaystack()"> Pay </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title=" " alt=" " src="assets/ecommerce/images/rice.jpg" style="width: 140px; height: 140px;"/></a>
                                        <p>Rice (1KG)</p>
                                        <h4>&#8358;699.99 <span>&#8358;799.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Rice (1KG)" />
                                                <input type="hidden" name="amount" value="799.99" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="assets/ecommerce/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="assets/ecommerce/images/watermelon.jpg" alt=" " class="img-responsive" style="width: 140px; height: 140px;"/></a>
                                        <p>Watermelon (1KG)</p>
                                        <h4>&#8358;399.99 <span>&#8358;499.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Watermelon (1KG)" />
                                                <input type="hidden" name="amount" value="399.00" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="assets/ecommerce/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="assets/ecommerce/images/cucumber.jpg" alt=" " class="img-responsive" style="width: 140px; height: 140px;"/></a>
                                        <p>Cucumber (1KG)</p>
                                        <h4>&#8358;299.99 <span>&#8358;399.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Cucumber (1KG)" />
                                                <input type="hidden" name="amount" value="299.99" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="top-brands">
    <div class="container">
        <!--<h3>Hot Offers</h3>-->
        <div class="agile_top_brands_grids">
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="assets/ecommerce/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title=" " alt=" " src="assets/ecommerce/images/sweet potato.jpg" style="width: 140px; height: 140px;"/></a>
                                        <p>Sweet Potato (1KG)</p>
                                        <h4>&#8358;299.99 <span>&#8358;399.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Sweet Potato (1KG)" />
                                                <input type="hidden" name="amount" value="299.99" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title=" " alt=" " src="assets/ecommerce/images/yam.jpg" style="width: 140px; height: 140px;"/></a>
                                        <p>Yam (1KG)</p>
                                        <h4>&#8358;999.99 <span>&#8358;1999.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Yam (1KG)" />
                                                <input type="hidden" name="amount" value="999.99" />
                                                <input type="hidden" name="discount_amount" value="1000.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="assets/ecommerce/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="assets/ecommerce/images/melon.jpg" alt=" " class="img-responsive" style="width: 140px; height: 140px;"/></a>
                                        <p>Melon (1KG)</p>
                                        <h4>&#8358;499.99 <span>&#8358;599.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Melon (1KG)" />
                                                <input type="hidden" name="amount" value="499.99" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="assets/ecommerce/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="assets/ecommerce/images/oranges.jpg" alt=" " class="img-responsive" style="width: 140px; height: 140px;"/></a>
                                        <p>Orange (1KG)</p>
                                        <h4>&#8358;299.99 <span>&#8358;399.99</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Orange (1KG)" />
                                                <input type="hidden" name="amount" value="299.99" />
                                                <input type="hidden" name="discount_amount" value="100.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->

<!-- //fresh-vegetables -->
<!-- newsletter -->

<!-- //newsletter -->
<!-- footer -->
<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="assets/ecommerce/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="assets/ecommerce/js/minicart.js"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });

</script>
</body>
</html>
