<style>
     .modal-dialog{
            max-width: 900px;
        }

        .modal-body select {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;

        }
        .modal-body textarea {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;
        }
</style>

<!-------------Apply now modal start ------->
    <!-- Modal -->
    <div class="modal fade" id="apply_now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-5">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Please Fillup This Form Crouse Inrolling </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="signup-form text-center">
                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="name" id="name" placeholder="Full  Name">
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="email" placeholder="Email">
                    </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="date" name="date" id="date" >
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="text" name="phone" id="phone" placeholder="Phone">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="work" id="work">
                          <option disabled selected>  Work </option>
                          <option value="students"> Students </option>
                          <option value="job_holder"> Job Holder </option>
                        </select>
                    </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="collage" id="collage" placeholder="Collage">
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="vercity" id="vercity" placeholder="Univercity">
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="text" name="zilla" id="zilla" placeholder="Zilla ">
                    </div>
                      <div class="col-lg-4 col-md-4">
                          <select   name="country" id="country">
                            <option disabled selected>  Country </option>
                            <option value="Bangladesh"> Bangladesh </option>
                          </select>
                      </div>
                      <div class="col-lg-3 col-md-3">
                          <select   name="gender" id="gender">
                            <option disabled selected> Gender</option>
                            <option value="male"> Male </option>
                            <option value="female"> Female </option>
                          </select>
                      </div>
                      <div class="col-lg-5 col-md-5">
                        <select   name="crouse" id="crouse">
                          <option disabled selected>  Select Crouse </option>
                          <option value="1"> Web Development with java script </option>
                          <option value="2">Graphics Design with Adobi Illastator  </option>
                        </select>
                    </div>
                      <div class="col-lg-12 col-md-12">
                        <textarea name="address" placeholder="Enter Your Address"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="payment" id="payment">
                          <option disabled selected>  Payment </option>
                          <option value="hand_cash"> Hand Cash  </option>
                          <option value="online" id="onlinePayment">Online Payment</option>
                        </select>
                  </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="payment_method" id="payment_method">
                          <option disabled selected>  Payment method</option>
                          <option value="bkash"> Bkash  </option>
                          <option value="nagad">Nagad</option>
                          <option value="dbbl">Duch Bangla Bank</option>
                        </select>
                  </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" name="transaction_number" id="transection" placeholder="Transaction Number">
                  </div>

                  <button class="btn btn-primary form-control" type="submit">Apply </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-------------Apply now modal end ------->

    <script>
        $(document).ready(function(){
            $('#onlinePayment').click(function(){
              $('#payment_method, #transection').display('none');
            })
        })
    </script>
