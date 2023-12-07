
<div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Pricing Plan</div>
        <h2 class="title-section">Choose plan the right for you</h2>
        <div class="divider mx-auto"></div>
      </div>

  

      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Newbie</div>
              <div class="price">
                <span class="dollar"></span>
                <h1>Free<span class="suffix"></span></h1>
              </div>
              <h5>-</h5>
            </div>
            <div class="body">
              <p>Free <span class="suffix">template access </span></p>
              <p>24/7 <span class="suffix">Support</span></p>
              <p>-<span class="suffix"></span></p>
              <p>-<span class="suffix"></span></p>
              <p>-<span class="suffix"></span></p>
             
            </div>
            <div class="footer">
              <a class="btn btn-pricing btn-block">Free</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">Pro</div>
              <div class="price">
                <span class="dollar">IDR</span>
                <h1>20<span class="suffix">.000</span></h1>
              </div>
              <h5>Per Month</h5>
            </div>
            <div class="body">
              <p>4 months <span class="suffix">technical support</span></p>
              <p>Life time <span class="suffix">free updates</span></p>
              <p>100% money back <span class="suffix">guarantee</span></p>
              <p>Pro <span class="suffix">template access</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" id="btn-pro" class="btn btn-pricing btn-block pro">Subscribe</a>
              <script type="text/javascript">
                    $('#btn-pro').click(function (event) {
                      event.preventDefault();
                      $(this).attr("disabled", "disabled");
                  
                  $.ajax({
                      url: '<?=site_url()?>/payment/pro',
                      cache: false,

                      success: function(data) {
                        //location = data;

                        console.log('token = '+data);
                        
                        var resultType = document.getElementById('result-type');
                        var resultData = document.getElementById('result-data');

                        function changeResult(type,data){
                          $("#result-type").val(type);
                          $("#result-data").val(JSON.stringify(data));
                          //resultType.innerHTML = type;
                          //resultData.innerHTML = JSON.stringify(data);
                        }

                        snap.pay(data, {
                          
                          onSuccess: function(result){
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                          },
                          onPending: function(result){
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                          },
                          onError: function(result){
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                          }
                        });
                      }
                    });
                });

                  </script>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Master</div>
              <div class="price">
                <span class="dollar">IDR</span>
                <h1>45<span class="suffix">.000</span></h1>
              </div>
              <h5>Per Month</h5>
            </div>
            <div class="body">
              <p>6 months <span class="suffix">technical support</span></p>
              <p>Life time  <span class="suffix">free updates</span></p>
              <p>100% money back <span class="suffix">guarantee</span></p>
              <p>Master & Pro <span class="suffix">template access</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" id="btn-master" class="btn btn-pricing btn-block">Subscribe</a>
              <script type="text/javascript">
                    $('#btn-master').click(function (event) {
                      event.preventDefault();
                      $(this).attr("disabled", "disabled");
                  
                  $.ajax({
                      url: '<?=site_url()?>/payment/master',
                      cache: false,

                      success: function(data) {
                        //location = data;

                        console.log('token = '+data);
                        
                        var resultType = document.getElementById('result-type');
                        var resultData = document.getElementById('result-data');

                        function changeResult(type,data){
                          $("#result-type").val(type);
                          $("#result-data").val(JSON.stringify(data));
                          //resultType.innerHTML = type;
                          //resultData.innerHTML = JSON.stringify(data);
                        }

                        snap.pay(data, {
                          
                          onSuccess: function(result){
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                          },
                          onPending: function(result){
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                          },
                          onError: function(result){
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                          }
                        });
                      }
                    });
                });

                  </script>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->