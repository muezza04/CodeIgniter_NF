<link rel="stylesheet" href="<?php echo base_url('dist/style/Register.css')?>" media="screen">
    <section class="u-clearfix u-section-1" id="sec-4059">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <img class="u-image u-image-1" src="<?php echo base_url('dist/images/Lambang_Kota_Depok.png')?>" data-image-width="650" data-image-height="841">
                </div>
              </div>
              <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Register</h3>
                  <div class="u-form u-login-control u-white u-form-1">

                  <?php echo form_open('login/input_data')?>
                    <div class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;">
                      <div class="u-form-group u-form-name">
                        <label for="username-a30d" class="u-label">New Username *</label>
                        <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                      </div>
                      <div class="u-form-group u-form-password">
                        <label for="password-a30d" class="u-label">New Password *</label>
                        <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                      </div>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <label for="email-1a4c" class="u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-1a4c" name="email" class="u-grey-5 u-input u-input-rectangle u-input-3" required="">
                      </div>
                      <div class="u-form-checkbox u-form-group">
                        <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                        <label for="checkbox-a30d" class="u-label">Remember me</label>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-1">Create</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </div>
                    <?php echo form_close()?>

                  </div>
                  <a href="<?php echo base_url('index.php/login')?>" data-page-id="737129497" class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-grey-40 u-text-hover-palette-4-base u-btn-2">I have an account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>