<style>
  .modal-custom {
    background-color: transparent;
    border: none;
  }

  .close {
    color: #fff;
    text-shadow: 0 2px 0 #000;
  }

  .close:hover {
    text-shadow: 0 2px 0 #fff;
  }

  input {
    outline: none;
    border-radius: 5px;
    transition: .4s;
    -webkit-transition: .4s;
    box-shadow: inset 0 0 5px #532c77, 0 0 8px #532c77;
    padding: .5em 1em;
    width: 100%
  }

  .loader {
    border: 5px solid #f3f3f3;
    border-radius: 50%;
    border-top: 5px solid blue;
    border-right: 5px solid green;
    border-bottom: 5px solid red;
    border-left: 5px solid pink;
    width: 50px;
    margin: 20px 150px;
    height: 50px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }

  .errorMsg {
    color: red;
  }

  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(360deg);
    }
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>
<a class='cta-btn btn checkout-btn' id="checkout-btn"><span class='btn-text'>Add To Cart</span> <i class='fas fa-arrow-circle-right'></i></a>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-custom">
      <div class="modal-body">
        <div class="paav2-cta">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
              <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
            </div>
            <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
              <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>

              <div class="div">
                <input class="email input" name="email" placeholder="Enter Your Email..." type="email">
              </div>
              <div class="errorMsg"></div>
              <div class="loader" style="display: none;"></div>
              <a class='cta-btn btn' id="checkout-process"><span class='btn-text'>Proceed To Checkout</span> <i class='fas fa-arrow-circle-right'></i></a>
              <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
              <img class="payment-options" src="/offer/paa/img/payment-options.png">
              <div class="security">
                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>