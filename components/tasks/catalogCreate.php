<article>
  <header>
    <h5>
      ADD ITEM TO CATALOG
      <span class="badge badge-danger badge-pill">R20 p/m</span>
    </h5>
    <p>
      Add all the <u>products</u> and <u>services</u> your business offers so that
      customers can browse &amp; place <u>orders</u>.
    </p>
  </header><br>
  <?php

    if($error != null){

      echo "
      <div class='alert alert-danger' role='alert'>
        <span class='text-capitalize'>$error</span>
      </div>
    ";
    }
  ?>
  <section>
    <?php echo form_open_multipart(current_url()) ?>
      <div class="card border-dark">
        <header class='card-header bg-dark text-white'>
          <ion-icon name="bag-handle" class="align-middle"></ion-icon>
          ITEM DETAILS
        </header>
        <div class="card-body">
          <div class="row">
            <div class="mb-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="catalogNameCreate" class="form-label">
                  <ion-icon name="bag-handle" class="align-middle"></ion-icon>
                  Name
                </label>
                <input type="text" name="catalogName" class="form-control"
                  value="<?php echo set_value('catalogName'); ?>"
                  id="catalogNameCreate" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogName'); ?>
                </small>
              </div>
            </div>
            <div class="mb-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="catalogAvailableSizesCreate" class="form-label">
                  <ion-icon name="crop" class="align-middle"></ion-icon>
                  Available Sizes
                </label>
                <input name="catalogSizes" placeholder='e.g. small; medium; large; x large'
                  value="<?php echo set_value('catalogSizes'); ?>"
                  type="text" class="form-control" id="catalogAvailableSizesCreate">
                <small class='text-danger'>
                  <ion-icon name='information-circle' size='small' class='align-middle'></ion-icon>
                  Use <mark>;</mark> to separate sizes e.g. small; medium; large
                </small>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogSizes'); ?>
                </small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="mb-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="PriceCreate" class="form-label">
                  <ion-icon name="wallet" class="align-middle"></ion-icon>
                  Old Price
                </label>
                <div class='input-group'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text bg-white border-dark text-danger' id='textddf'>R</span>
                  </div>
                  <input type="text" name="catalogPrice" placeholder="e.g. 18.99"
                    value="<?php echo set_value('catalogPrice') ?>"
                    class="form-control" id="PriceCreate" aria-describedby="textddf"
                    style='border-left: none'>
                </div>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogPrice'); ?>
                </small>
              </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="PriceCreate" class="form-label">
                  <ion-icon name="wallet" class="align-middle"></ion-icon>
                   New Price
                </label>
                <div class='input-group'>
                  <div class='input-group-prepend'>
                    <span class='input-group-text bg-white border-dark text-danger' id='textddf'>R</span>
                  </div>
                  <input type="text" name="catalogPrice" placeholder="e.g. 18.99"
                    value="<?php echo set_value('catalogPrice') ?>"
                    class="form-control" id="PriceCreate" aria-describedby="textddf"
                    style='border-left: none'>
                </div>
                <small class='text-danger'>
                  <ion-icon name='information-circle' size='small' class='align-middle'></ion-icon>
                  If price has not changed, leave it blank.
                </small>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogPrice'); ?>
                </small>
              </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="catalogServiceCategoryCreate" class="form-label">
                  <ion-icon name="albums" class="align-middle"></ion-icon>
                  Sale Ends On
                </label>
                <input type='datetime-local' name='' value='' class='form-control'>
                <small class='text-danger'>
                  <ion-icon name='information-circle' size='small' class='align-middle'></ion-icon>
                  If this item is not on sale, leave it blank.
                </small>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogServiceCategory'); ?>
                </small>
              </div>
              <script>

                function setVar(val1 ="<?php echo set_value('catalogType'); ?>"){

                  var catType = document.getElementById('catalogItemTypeCreate').value = val1.charAt(0);

                  var setCat = (catType == 1) ? 'catalogProductCategoryCreate' : 'catalogServiceCategoryCreate';
                  var hideCat = (catType != 1) ? 'catalogProductCategoryCreate' : 'catalogServiceCategoryCreate';

                  var elem = document.getElementById(setCat);
                  elem.value = val1;
                  elem.hidden = false;

                  var elem = document.getElementById(hideCat);
                  elem.hidden = true;

                  document.getElementById('catProdCat').value = "<?php echo set_value('catalogProductCategory') ?>";
                  document.getElementById('catServCat').value = "<?php echo set_value('catalogServiceCategory') ?>";

                }
                setVar();
              </script>
            </div>
            <div class='mb-4 col-12'>
              <div class='alert alert-info alert-dismissible fade show border-info bg-info text-white' role='alert'>
                <h5 class='text-uppercase'>
                  <ion-icon name='information-circle' size='small' class='align-middle'></ion-icon>
                  HOW IT WORKS
                </h5>
                <p>
                  When you have a sale at your store, enter the <u>New Price</u> and the <u>Sales End On</u> field.
                  After the <u>Sales End On</u> date has passed, the <u>New Price</u> will default back to the <u>Old Price</u>.
                </p>
                <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                  <ion-icon name='close-circle' class='align-middle'></ion-icon>
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="mb-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="catalogItemTypeCreate" class="form-label">
                  <ion-icon name="albums" class="align-middle"></ion-icon>
                  Select Item Type
                </label>
                <select name="catalogType" onchange="setVar(this.value)"
                  class="form-control" id='catalogItemTypeCreate'>
                 <option value='1' selected>Product</option>
                 <option value='2'>Service</option>
               </select>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogType'); ?>
                </small>
              </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"
              id='catalogProductCategoryCreate'>
              <div class="form-group">
                <label for="catalogProductCategoryCreate" class="form-label">
                    <ion-icon name="albums" class="align-middle"></ion-icon>
                    Product Category
                </label>
                <select name='catalogProductCategory' id='catProdCat'
                  class='form-control text-capitalize'>
                  <optgroup label='Product Category'>
                    <option value='' selected></option>
                  </optgroup>
                  <optgroup label='Appliances'>
                    <option value='1a'>Fridges &amp; Freezers</option>
                    <option value='1b'>Washers &amp; Tumble Dryers</option>
                    <option value='1c'>Stoves &amp; Ovens</option>
                    <option value='1d'>Small Appliances</option>
                    <option value='1e'>Vacuum Cleaners &amp; Floor Care</option>
                    <option value='1f'>Fans, Heaters &amp; Air Coolers</option>
                    <option value='1g'>Water Purification &amp; Soda Machines</option>
                  </optgroup>
                  <optgroup label='Baby, Toddlers &amp; Kids'>
                    <option value='1h'>Baby</option>
                    <option value='1i'>Baby &amp; Toddler Food</option>
                    <option value='1j'>Bags &amp; Clothing</option>
                    <option value='1k'>Learning &amp; Development</option>
                    <option value='1l'>Toys</option>
                  </optgroup>
                  <optgroup label='Beverages &amp; Liquor'>
                    <option value='1m'>Coffee, Teas &amp; Hot Drinks</option>
                    <option value='1n'>Milk &amp; Alternatives</option>
                    <option value='1o'>Soft Drinks &amp; Juices</option>
                    <option value='1p'>Spirits</option>
                    <option value='1q'>Wines</option>
                    <option value='1r'>Beer &amp; Ciders</option>
                    <option value='1s'>Pre Mixes</option>
                    <option value='1t'>Bar Acccesories</option>
                  </optgroup>
                  <optgroup label='Books'>
                    <option value='1u'>Children &amp; Young Adult</option>
                    <option value='1v'>Educational</option>
                    <option value='1w'>General Fiction</option>
                    <option value='1x'>Non-Fiction</option>
                    <option value='1y'>Non-Fiction Specialists</option>
                  </optgroup>
                  <optgroup label='Cars'>
                    <option value='1z'>Cabrolet</option>
                    <option value='1a0'>Coupe</option>
                    <option value='1a1'>Crew Bus</option>
                    <option value='1a2'>Double cab</option>
                    <option value='1a3'>extented cab</option>
                    <option value='1a4'>fastback</option>
                    <option value='1a5'>hatchback</option>
                    <option value='1a6'>kingcab</option>
                    <option value='1a7'>LCV</option>
                    <option value='1a8'>Minibus</option>
                    <option value='1a9'>MPV</option>
                    <option value='1b0'>Panel van</option>
                    <option value='1b1'>sedan</option>
                    <option value='1b2'>single cab</option>
                    <option value='1b3'>sportback</option>
                    <option value='1b4'>station wagon</option>
                    <option value='1b5'>supercab</option>
                    <option value='1b6'>SUV</option>
                  </optgroup>
                  <optgroup label='Catering'>
                    <option value='1b7'>Cookware</option>
                    <option value='1b8'>Consumables &amp; Cleaning</option>
                    <option value='1b9'>Electrical Equipment</option>
                    <option value='1c0'>Glassware &amp; Crockery</option>
                    <option value='1c1'>Plasticware</option>
                    <option value='1c2'>Utensils</option>
                    <option value='1c3'>Commercial Cater Wear</option>
                  </optgroup>
                  <optgroup label='Electronics &amp; Computers'>
                    <option value='1c4'>Televisions</option>
                    <option value='1c5'>Computer &amp; Tables</option>
                    <option value='1c6'>Printers &amp; Scanners</option>
                    <option value='1c7'>Cellphones</option>
                    <option value='1c8'>Cameras</option>
                    <option value='1c9'>Fitness Trackers &amp; Wearables</option>
                    <option value='1d1'>Wifi &amp; Networking</option>
                    <option value='1d2'>GPS &amp; navigation</option>
                    <option value='1d3'>Movies, Music &amp; Entertainment</option>
                    <option value='1d4'>Audio &amp; Video</option>
                    <option value='1d5'>Watches</option>
                  </optgroup>
                  <optgroup label='Fashion'>
                    <option value='1d6'>men - Tops</option>
                    <option value='1d7'>men - Bottoms</option>
                    <option value='1d8'>men - Shoes</option>
                    <option value='1d9'>men - accessories</option>
                    <option value='1d0'>Women - Tops</option>
                    <option value='1e0'>Women - Bottoms &amp; Skirts</option>
                    <option value='1e1'>Women - Shoes</option>
                    <option value='1e2'>Women - accessories</option>
                    <option value='1e3'>Kids - Tops</option>
                    <option value='1e4'>Kids - Bottoms</option>
                    <option value='1e5'>Kids - Shoes</option>
                    <option value='1e6'>Kids - accessories</option>
                    <option value='1e7'>Unisex - Tops</option>
                    <option value='1e8'>Unisex - accessories</option>
                  </optgroup>
                  <optgroup label='Food'>
                    <option value='1e9'>Cooking</option>
                    <option value='1f0'>Sauces, Spreads &amp; Condiments</option>
                    <option value='1f1'>Cereals &amp; Porridges</option>
                    <option value='1f2'>Baking</option>
                    <option value='1f3'>Snacks, Biscuits &amp; Sweets</option>
                    <option value='1f4'>Desserts</option>
                  </optgroup>
                  <optgroup label='Games &amp; Gaming'>
                    <option value='1f5'>Video Games</option>
                    <option value='1f6'>Games</option>
                    <option value='1f7'>Interactive Toys</option>
                  </optgroup>
                  <optgroup label='Hardware &amp; Auto'>
                    <option value='1f8'>DIY Powertools</option>
                    <option value='1f9'>industrial Powertool</option>
                    <option value='1g0'>Electrical</option>
                    <option value='1g1'>hand tools</option>
                    <option value='1g2'>lighting</option>
                    <option value='1g3'>paint &amp; surface</option>
                    <option value='1g4'>Powertool Acccesories</option>
                    <option value='1g5'>security</option>
                    <option value='1g6'>trolleys &amp; ladders</option>
                    <option value='1g7'>glue, nails &amp; fasteners</option>
                    <option value='1g8'>fittings &amp; shelving</option>
                    <option value='1g9'>workshop machinery</option>
                  </optgroup>
                  <optgroup label='Health &amp; Beauty'>
                    <option value='1h0'>bath &amp; shower</option>
                    <option value='1h1'> body care</option>
                    <option value='1h2'> antiperspirants & deodrants</option>
                    <option value='1h3'>oral care</option>
                    <option value='1h4'> healthcare</option>
                    <option value='1h5'> feminine care</option>
                    <option value='1h6'> hair care</option>
                    <option value='1h7'>shaving &amp; grooming</option>
                    <option value='1h8'> skin care</option>
                    <option value='1h9'> cosmetics</option>
                    <option value='1i0'> self care</option>
                    <option value='1i1'> shoe care</option>
                  </optgroup>
                  <optgroup label='Home &amp; Garden'>
                    <option value='1i2'>bathroom</option>
                    <option value='1i3'> bedroom</option>
                    <option value='1i4'> bins</option>
                    <option value='1i5'> home decor</option>
                    <option value='1i6'> kitchen</option>
                    <option value='1i7'> laundry</option>
                    <option value='1i8'>lawn &amp; garden</option>
                    <option value='1i9'> lighting</option>
                    <option value='1j0'> patio</option>
                  </optgroup>
                  <optgroup label='Household &amp; Pet Supplies'>
                    <option value='1j1'>bathroom Supplies</option>
                    <option value='1j2'> Household Supplies</option>
                    <option value='1j3'> insecticides &amp; pest control</option>
                    <option value='1j4'>kitchen supplies</option>
                    <option value='1j5'> pet supplies</option>
                  </optgroup>
                  <optgroup label='Property'>
                    <option value='1j6'>For sale - Apartment</option>
                    <option value='1j7'>For sale - Commercial Property</option>
                    <option value='1j8'>For sale - industrial  Property</option>
                    <option value='1j9'>For sale - House</option>
                    <option value='1k0'>For sale - Farm</option>
                    <option value='1k1'>For sale - Townhouse</option>
                    <option value='1k2'>For sale - Vacant Land</option>
                    <option value='1k3'>Rent - Apartment</option>
                    <option value='1k4'>Rent - Commercial Property</option>
                    <option value='1k5'>Rent - industrial  Property</option>
                    <option value='1k6'>Rent - House</option>
                    <option value='1k7'>Rent - Farm</option>
                    <option value='1k8'>Rent - Townhouse</option>
                    <option value='1k9'>Rent - Vacant Land</option>
                  </optgroup>
                  <optgroup label='Sports, Outdoor &amp; Travel'>
                    <option value='1l0'>braai</option>
                    <option value='1l1'> camping</option>
                    <option value='1l2'> exercise fitness</option>
                    <option value='1l3'> sports</option>
                    <option value='1l4'> fun outdoor activities</option>
                    <option value='1l5'>luggage &amp; bags</option>
                    <option value='1l6'> pool</option>
                  </optgroup>
                  <optgroup label='Stationery &amp; Office'>
                    <option value='1l7'>office furniture</option>
                    <option value='1l8'> office Electronics</option>
                    <option value='1l9'> Stationery supplies</option>
                    <option value='1m0'>Stationery storage</option>
                    <option value='1m1'> paper &amp; filing</option>
                  </optgroup>
                </select>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogProductCategory'); ?>
                </small>
              </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"
              id='catalogServiceCategoryCreate' hidden>
              <div class="form-group">
                <label for="catalogServiceCategoryCreate" class="form-label">
                  <ion-icon name="albums" class="align-middle"></ion-icon>
                  Service Category
                </label>
                <select name="catalogServiceCategory" id='catServCat'
                  class="form-control text-capitalize">
                  <option value='' selected></option>
                  <option value="2a">Advertising</option>
                  <option value="2b">agricultural industry</option>
                  <option value="2c">Communications industry</option>
                  <option value="2d">Construction industry</option>
                  <option value="2e">creative industry</option>
                  <option value="2f">Education</option>
                  <option value="2g">Entertainment industry</option>
                  <option value="2h">farming</option>
                  <option value="2i">fashion</option>
                  <option value="2j">Finance</option>
                  <option value="2k">Green industry</option>
                  <option value="2l">heavy industry</option>
                  <option value="2m">Hospitality industry</option>
                  <option value="2n">information industry</option>
                  <option value="2o">information technology</option>
                  <option value="2p">infrastructure</option>
                  <option value="2q">IT industry</option>
                  <option value="2r">light industry</option>
                  <option value="2s">Manufacturing</option>
                  <option value="2t">materials</option>
                  <option value="2u">media</option>
                  <option value="2v">music industry</option>
                  <option value="2w">primary industry</option>
                  <option value="2x">publishing industry</option>
                  <option value="2y">retail</option>
                  <option value="2z">robotics</option>
                  <option value="2a1">secondary industry</option>
                  <option value="2a2">service industry</option>
                  <option value="2a3">space</option>
                  <option value="2a4">space industry</option>
                  <option value="2a5">technology industry</option>
                  <option value="2a6">Telecom</option>
                  <option value="2a7">Tertiary</option>
                </select>
                <small id="emailHelp" class="form-text text-danger">
                  <?php echo form_error('catalogServiceCategory'); ?>
                </small>
              </div>
              <script>

                function setVar(val1 ="<?php echo set_value('catalogType'); ?>"){

                  var catType = document.getElementById('catalogItemTypeCreate').value = val1.charAt(0);

                  var setCat = (catType == 1) ? 'catalogProductCategoryCreate' : 'catalogServiceCategoryCreate';
                  var hideCat = (catType != 1) ? 'catalogProductCategoryCreate' : 'catalogServiceCategoryCreate';

                  var elem = document.getElementById(setCat);
                  elem.value = val1;
                  elem.hidden = false;

                  var elem = document.getElementById(hideCat);
                  elem.hidden = true;

                  document.getElementById('catProdCat').value = "<?php echo set_value('catalogProductCategory') ?>";
                  document.getElementById('catServCat').value = "<?php echo set_value('catalogServiceCategory') ?>";

                }
                setVar();
              </script>
            </div>
          </div>
          <div>
            <label for="catalogDescriptionCreate" class="form-label">
              <ion-icon name="information-circle" class="align-middle"></ion-icon>
              Description
              <span class='badge badge-danger badge-pill'>
                <span id='charLeft'></span>
              </span>
            </label>
            <textarea name="catalogDescription" class="form-control"
              oninput="charsLeft()" id="catalogDescriptionCreate"><?php
               echo (isset($catalogDescription)) ?
               $catalogDescription : '';
              ?></textarea>
            <small id="emailHelp" class="form-text text-danger">
              <?php echo form_error('catalogDescription'); ?>
            </small>
            <script>

            function charsLeft(){

              var description = document.getElementById('catalogDescriptionCreate');
              var charLength = 500 - description.value.length;

              document.getElementById('charLeft').innerHTML = charLength;
            }

            charsLeft();
            </script>
          </div>
        </div>
      </div>
      <br><br>
      <section class="card border-dark">
        <header class='card-header bg-dark text-white'>
          <ion-icon name="trending-up" class="align-middle"></ion-icon>
          PROMOTE MY ITEM
        </header>
        <div class="card-body">
          <div>
            <h6 class="card-title" aria-describedby="homepageApprearanceDescription">
              <b class='text-uppercase'>Homepage Advertising</b>
              <span class="badge badge-danger badge-pill">R100 p/m</span>
            </h6>
            <p class="card-text form-text" id="homepageApprearanceDescription">
              The home page is the first page every customer sees, so adverting
              your <b>item</b> there will give you a greater
               advantage over your competitors.
             </p>
            <div class="form-group form-check">
              <input name="catalogPromoteOnHomepage" type="checkbox"
                class="form-check-input" value="1" id="promoteOnHomepage"
                <?php echo (isset($catalogPromoteOnHomepage) && $catalogPromoteOnHomepage == 1) ? 'checked': '';?>>
              <label class="form-check-label text-danger" for="promoteOnHomepage">
                Advertise my <b>item</b> on the homepage.
              </label>
            </div>
         </div><br>
         <div>
            <h6 class="card-title" aria-describedby="searchAppearanceDescription">
              <b class='text-uppercase'>Search results Advertising</b>
              <span class="badge badge-danger badge-pill">R50 p/m</span>
            </h6>
            <p class="card-text form-text" id="searchAppearanceDescription">
              Whenever a customer searches for a <b>item</b>,
              yours will appear on the first page of that search result category
            </p>
            <div class="form-group form-check">
              <input name="catalogPromoteOnSearchResults"
                type="checkbox" value="1" class="form-check-input form-label"
                id="promoteOnSearch" aria-describedby=""
                <?php echo (isset($catalogPromoteOnSearchResults) &&
                  $catalogPromoteOnSearchResults == 1) ? 'checked': '';?>>
              <label class="form-check-label text-danger" for="promoteOnSearch">
                 Advertise my <b>item</b> on the
                first search results page.
              </label>
            </div>
          </div>
        </div>
      </section>
      <br><br>
      <button type="submit" name="catalogSubmit" class="btn btn-dark">
        <ion-icon name="bag-add" class="align-middle"></ion-icon>
        Submit
      </button>
    </form>
  </section>
</article>
