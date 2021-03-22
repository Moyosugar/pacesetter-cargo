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

<div class="row bg-white">
<div class="container-fluid ml-3 mb-5">
  <div class="row mx-auto">
    <div class="col-md-5 border-primary">
      <div class="card border-red">
        <div class="card-header">
           <h4 class="card-title" id="basic-layout-round-controls">Calculate</h4>
           
        </div>
        <div class="card-body ">
          <div class="px-3">
            <form class="form" action="pricing_calculate.php">
              <div class="form-body">
                <span>Destination</span>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">From</option>
                      </select>
                    </fieldset>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <span></span>
                      <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">To</option>
                      </select>
                    </fieldset>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <span for="">Packaging</span>
                  <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">Select cargo type</option>
                      </select>
                    </fieldset>
                </div>

                <div class="form-group">
                  <span for="">Shipping Method</span>
                  <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">Select shipping method</option>
                      </select>
                    </fieldset>
                </div>

              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <span for="">No. of Packages (max 25)</span>
                    <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">Select number</option>
                      </select>
                    </fieldset>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <span for="">Weight per package</span>
                      <fieldset class="form-group">
                      <select class="custom-select d-block w-100" id="customSelect">
                        <option selected="">To</option>
                      </select>
                    </fieldset>
                    </div>
                  </div>
                </div>
                </div>

              <div class="form-actions center">
               <a href="pricing_calculate.php"><button type="button" class="btn btn-red mr-1 btn btn-lg">
                  Calculate
                </button></a> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>



      <?php include ("footer.php") ?>  