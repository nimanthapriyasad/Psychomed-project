<x-patient-dashboard>

    <div class="container container-smaller">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
            <div class="btn-group mb-4">
              <a href="/dashboard/patient/payment" class="btn btn-success">Save as PDF</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice">
                <div class="row">
                  <div class="col-sm-6">
                    <h4></h4>
                    <address>
                      <strong>Psychomed Medical Center</strong><br>
                      New Road,Wennappuwwa <br>
                      psychomed@gmail.com<br>
                      (+94) 11 342 9702 <br>
                      www.psychomed.com
                    </address>
                  </div>
    
                  <div class="col-sm-6 text-right">
                    <img src="https://www.online-psychology-degrees.org/wp-content/uploads/2019/11/shutterstock_1328892578.png"  width="200" 
         height="250"alt="logo">
                  </div>
                </div>
    
                <div class="row">
    
                  <div class="col-sm-7">
               
                  <div class="col-sm-5 text-right">
                    <table class="w-full">
                      <tbody>
                      @isset($patient)
                        <tr>
                          <th>Patient Name:</th>
                          <td>{{ $patient->name }}</td>
                        </tr>
                        @endisset
                        <tr>
                          <th>Date: </th>
                          
                          <td>{{ \Carbon\Carbon::now()->format('m/d/Y') }} </td>
                        </tr>
                      </tbody>
                    </table>
    
                    <div style="margin-bottom: 0px">&nbsp;</div>
    
                    
    
    
                  </div>
                </div>
    
                <div class="table-responsive">
                  <table class="table invoice-table">
                    <!-- <thead style="background: #F5F5F5;">
                      <tr>
                        <th>Disease</th>
                        <th></th>
                        <th class="text-right">Drugs</th>
                      </tr>
                    </thead> -->
                    <tbody>
                      <tr>
                        <td>
                            <strong>Depression     

                            </strong>
                            can lead to suicide, but this is preventable when appropriate support is provided. 
                              It is important to know that much can be done to help young people who are thinking about suicide.
                        </td>
                        <td></td>
                        <td class="text-right"></td>
                      </tr>
    
                      </tbody>
                    </table>
                  </div><!-- /table-responsive -->
    
                  <table class="table invoice-total">
                    <tbody>
                      <tr>
                        <td class="text-right"><strong>Balance:</strong></td>
                        <td class="text-right small-width">5$</td>
                      </tr>
                    </tbody>
                  </table>
    
                  <hr>
    
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="invbody-terms">
                        Thank you. <br>
                        <br>
                        <h4>Payment Terms and Methods</h4>
                        <p>
                         You Can get Free Psychology Counselling. All Your Mental Problems can be Solved by Meeting Our Doctor or Psychiatrist Online. 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>



    
</x-patient-dashboard>