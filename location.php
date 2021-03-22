<?php include ("header.php") ?>
<?php //include ("sidebar.php") ?>
<?php include ("nav.php") ?>

<div class="main-panel">
        <div class="">  <!-- main-content -->
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
              <div class="row bg-white ">
                <div class="mt-5">
                  
                </div>
              </div>

<div class="row bg-white ">
  <div class="col-xl-5 col-lg-5 col-md-5 col-12">
    <div class="container-fluid bg-white">
          <div class="media pl-2">
            <div class="media-body white text-left">
              <h6 class="">Click on the labels on the map for more information</h6>
             </div>
          </div>
    </div>
  </div>

  <div class="col-xl-2 col-lg-2 col-md-2 col-12">
     <div class="container-fluid bg-white">
          <div class="media pl-2">
              <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="1st-item">
                        <label class="custom-control-label" for="1st-item">All locations</label>
                      </div>
          </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-2 col-12">
    <div class="container-fluid bg-white">
          <div class="media pl-2">
            <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="2st-item">
                        <label class="custom-control-label" for="2st-item">Pacesetter offices</label>
            </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-12">
    <div class="container-fluid bg-white">
          <div class="media pl-2">
            <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">Select State&nbsp;&nbsp;&nbsp; </option>
                      </select>
                    </fieldset>

      </div>
    </div>
  </div>


<!-- Map -->
    <!-- Map Events -->
    <div class="row ">
        <div class="col-12 mb-4">
            <div class="container-fluid">
                <div id="map-events" class="height-400"></div>
            </div>
        </div>
    </div>
    <!--  -->
</div>






      <?php include ("footer.php") ?>  