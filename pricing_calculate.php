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
<div class="container-fluid ml-2 mb-5">
  <div class="row mx-auto">
    <div class="col-md-5 border-primary">
      <div class="card border-red">
        <div class="card-header">
           <h4 class="card-title" id="basic-layout-round-controls">Calculate</h4>
           
        </div>
        <div class="card-body">
          <div class="px-3">
            <form class="form">
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
                <button type="button" class="btn btn-red mr-1 btn btn-lg">
                  Calculate
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2 border-primary">
    </div>

    <div class="col-md-5">
      <div class="card bg-secondary">
        <div class="card-header">
          <div class="card-title-wrap">
            <h4 class="card-title" id="basic-layout-square-controls">Cargo shipment price</h4>
          </div>
          <span class="mb-0">Calculated based on the information you spanrovided.</p>
        </div>
        <div class="card-body">
          <div class="px-3">

            <div class="table1">
              <table class="table">
                            <thead>
                                <tr>
                                    <th class="red">From:</th>
                                    <th class="red">IBADAN</th>
                                    <th class="text-warning">To:</th>
                                    <th class="text-warning">ABUJA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cargo: </td>
                                    <td>Box (Fragile)</td>
                                    <td>Weight: </td>
                                    <td>5-10kg</td>
                                </tr>
                                <tr>
                                    <td>Speed: </td>
                                    <td>Express (1-2 days)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
            </div>

            <div class="table2">
              <div class="text-center">
                <label>PRICE SUMMARY</label>
              </div>
              <table class="table">
                            <tbody>
                                <tr>
                                    <td>LOCATION</td>
                                    <td>₦5,000.00</td>
                                </tr>
                                <tr>
                                    <td>WEIGHT</td>
                                    <td>+₦4,000.00</td>
                                </tr>
                                <tr>
                                    <td>SHIPPING</td>
                                    <td>+₦1,000.00</td>
                                </tr>
                                <tr>
                                    <td>TOTAL</td>
                                    <td class="red">₦10.000.00</td>
                                </tr>
                            </tbody>
                        </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



      <?php include ("footer.php") ?>  