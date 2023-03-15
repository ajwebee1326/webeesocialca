 <!----Form ---->
 <section class="contact-form sec-space text-center">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h3 class="text-primary">Think we’d be a good match for you and your business? Send us a message!</h3>
            </div>
         </div>
         <div class="row pt-2">
            <div class="col-12">
               <div class="glb_form_main">
                  <div class="form-illus">
                      <img class="cont-img1" src="images/form-emo3.png">
                      <img class="cont-img2" src="images/form-emo2.png">
                      <img class="cont-img3" src="images/form-emo1.png">
                  </div>
                  <div class="glb_form">
                      <div class="glb_form_inner">
                          <div class="bgn-wf-wrapper" id="BiginWebToEntityFormDiv4656515000003025149">
                              <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                              <form id='BiginWebToContactForm4656515000003025149' name='BiginWebToContactForm4656515000003025149' method='POST' enctype='multipart/form-data' onSubmit='javascript:document.charset="UTF-8"; return validateForm4656515000003025149()' accept-charset='UTF-8' style='margin: 0;'>
                                  <!-- Do not remove this code. -->
                                  <input type='text' style='display:none;' name='xnQsjsdp'
                                  value='6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534' />
                                  <input type='hidden' name='zc_gad' id='zc_gad' value='' />
                                  <input type='text' style='display:none;' name='xmIwtLD'
                                  value='2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fb' />
                                  <input type='text' style='display:none;' name='actionType' value='Q29udGFjdHM=' />
                                  <input type='text' style='display:none;' name='returnURL' value= 'https://webeesocial.ca/thank-you' />
                                  <div id="elementDiv4656515000003025149">
                                      <div class="bgn-wf-row bgn-wf-col-2">
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <input name="First Name" type="text" maxlength="40" value="" placeholder="First Name">
                                          </div>
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <input name="Last Name" type="text" maxlength="80" value="" placeholder="Last Name">
                                          </div>
                                      </div>
                                      <div class="bgn-wf-row bgn-wf-col-2">
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <input name="Email" type="text" maxlength="100" value="" placeholder="Email">
                                          </div>
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <div class="phone-field">
                                                  <span>+1</span>
                                                  <input name="Phone" type="text" maxlength="10" value="" placeholder="Phone Number">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="bgn-wf-row">
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <input name="Account Name" type="text" maxlength="120" value="" placeholder="Company Name">
                                          </div>
                                      </div>
                                      <div class="bgn-wf-row">
                                          <div class="bgn-wf-field bgn-wf-item-mb">
                                              <textarea name="Description" maxlength="32000" placeholder="Requirement"></textarea>
                                          </div>
                                      </div>
                                      <div class="bgn-wf-row bgn-wf-item-mb">
                                          <div class="captcha_form">
                                              <div class="bgn-wf-field">
                                                  <input type="text" name="enterdigest" placeholder="Enter Captcha Here...">
                                              </div>
                                              <div class="bgn-wf-field">
                                                  <img id="imgid4656515000003025149" src="https://bigin.zoho.com/crm/CaptchaServlet?formId=2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fb&grpid=6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534">
                                              </div>
                                          </div>
                                          <a href="javascript:;" onclick="reloadImg4656515000003025149()">Reload</a>
                                      </div>
                                      <div class="bgn-wf-row">
                                          <div class="bgn-wf-field">
                                              <input class="btn btn-primary w-100" id='formsubmit4656515000003025149' type='submit' value='Submit' />
                                          </div>
                                      </div>
                                  </div>
                                  <script>
                                      function reloadImg4656515000003025149() {
                                          var captcha = document.getElementById('imgid4656515000003025149');
                                          if (captcha.src.indexOf('&d') !== -1) {
                                              captcha.src = captcha.src.substring(0, captcha.src.indexOf('&d')) + '&d' + new Date().getTime();
                                          } else {
                                              captcha.src = captcha.src + '&d' + new Date().getTime();
                                          }
                                      }
                          
                                      function disableSubmitwhileReset4656515000003025149() {
                                          var submitbutton = document.getElementById('formsubmit4656515000003025149');
                                          if (document.getElementById('privacyTool4656515000003025149') !== null || document.getElementById(
                                                  'consentTool') !== null) {
                                              submitbutton.disabled = true;
                                              submitbutton.style.opacity = '0.5;';
                                          } else {
                                              submitbutton.removeAttribute('disabled');
                                          }
                                      }
                          
                                      function checkMandatory4656515000003025149() {
                                          var mndFields = new Array('First Name', 'Last Name', 'Account Name', 'Email', 'Phone', 'Description');
                                          var fldLangVal = new Array('First Name', 'Last Name', 'Company Name', 'Email', 'Phone', 'Requirement');
                                          var i;
                                          var mndFieldslength = mndFields.length;
                                          var fieldObj;
                                          for (i = 0; i < mndFieldslength; i++) {
                                              fieldObj = document.forms.BiginWebToContactForm4656515000003025149[mndFields[i]];
                                              if (fieldObj) {
                                                  if (fieldObj.value.replace(/^s+|s+$/g, '').length === 0) {
                                                      if (fieldObj.type === 'file') {
                                                          alert('Please select a file to upload.');
                                                          fieldObj.focus();
                                                          return false;
                                                      }
                                                      alert(fldLangVal[i] + ' cannot be empty.');
                                                      fieldObj.focus();
                                                      return false;
                                                  } else if (fieldObj.nodeName === 'SELECT') {
                                                      if (fieldObj.options[fieldObj.selectedIndex].value === '-None-') {
                                                          alert(fldLangVal[i] + ' cannot be none.');
                                                          fieldObj.focus();
                                                          return false;
                                                      }
                                                  } else if (fieldObj.type === 'checkbox') {
                                                      if (fieldObj.checked === false) {
                                                          alert('Please accept  ' + fldLangVal[i]);
                                                          fieldObj.focus();
                                                          return false;
                                                      }
                                                  }
                                                  if (fieldObj.name === 'Last Name' && fieldObj.value) {
                                                      name = fieldObj.value;
                                                  }
                                              }
                                          }
                                          return true;
                                      }
                          
                                      function validateFileUpload() {
                                          var e = document.getElementById("theFile"),
                                              t = 0;
                                          if (e) {
                                              if (e.files.length > 3) return alert("You can upload a maximum of three files at a time."), !1;
                                              if ("files" in e) {
                                                  var i = e.files.length;
                                                  if (0 !== i) {
                                                      for (var o = 0; o < i; o++) {
                                                          var a = e.files[o];
                                                          "size" in a && (t += a.size)
                                                      }
                                                      if (t > 20971520) return alert("Total file(s) size should not exceed 20MB."), !1
                                                  }
                                              }
                                          }
                                          return !0
                                      }
                                  </script>
                                  <script id='wf_script' src='https://bigin.zoho.com/crm/WebformScriptServlet?rid=2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fbgid6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534'></script>
                             </form>
                          </div>  
                      </div>
                  </div>
              </div>
            </div>
         </div>
      </div>

   </section>
   <!---- google-review---->
   <section class="google-review sec-space overflow-hidden">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class=" head-wrap text-center">
                  <h3 class="text-primary">
                     Here's what our clients have to say!
                  </h3>
               </div>
            </div>
         </div>
         <div class="row align-items-center">
            <div class="col-md-3">
               <div class="source-google">
                  <div class="large-logo">
                     <div class="vertical-center">
                        <img src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" width="110" height="35"
                           alt="Google" />
                     </div>
                  </div>
                  <div class="star-rating large-star">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <div class="rating-text"> <strong class="rating"> EXCELLENT </strong> <span class="nowrap">Based on
                        <strong>28 reviews</strong>.</span> </div>

               </div>
            </div>
            <div class="col-md-9">
               <div class="review-slider">
                  <div class="review-item">
                     <div class="review-inner">
                        <div class="review-header">
                           <div class="profile-img">
                              <img src="images/user-one.png" alt="google-user">
                           </div>
                           <div class="profile-details">
                              <div class="profile-name">A Google User</div>
                              <div class="profile-date">2022-08-09</div>
                           </div>
                        </div>
                        <div class="star-rating">
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                        </div>
                        <div class="review-content">
                           Working with shubhendu, soumya and the rest of the team webeesocial is always a good &amp;
                           rewarding experience. They instinctively know our customers and give us good insights. They
                           do share fresh ideas as to how we can attract new business, while rewarding our existing
                           customer base. I would highly recommend as they always deliver results.
                        </div>
                     </div>
                  </div>
                  <div class="review-item">
                     <div class="review-inner">
                        <div class="review-header">
                           <div class="profile-img">
                              <img src="images/user-one.png" alt="google-user">
                           </div>
                           <div class="profile-details">
                              <div class="profile-name">A Google User</div>
                              <div class="profile-date">2022-08-10</div>
                           </div>
                        </div>
                        <div class="star-rating">
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                        </div>
                        <div class="review-content">
                           I would like to say that working with them is a pleasure. Their team always understands our
                           business needs, and proactively comes up with creative ideas that bring results. Would
                           definitely recommend working with the bees.
                        </div>
                     </div>
                  </div>
                  <div class="review-item">
                     <div class="review-inner">
                        <div class="review-header">
                           <div class="profile-img">
                              <img src="images/user-4.png" alt="google-user">
                           </div>
                           <div class="profile-details">
                              <div class="profile-name">ramey mclaughlin</div>
                              <div class="profile-date">2022-08-09</div>
                           </div>
                        </div>
                        <div class="star-rating">
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                        </div>
                        <div class="review-content">
                           Working with Webeesocial is always a pleasure. My account manager is Vikram who always
                           explains everything meticulously and is always polite and professional. Their team is quite
                           knowledgeable and proficient in the services they offer
                        </div>
                     </div>
                  </div>
                  <div class="review-item">
                     <div class="review-inner">
                        <div class="review-header">
                           <div class="profile-img">
                              <img src="images/user-three.png" alt="google-user">
                           </div>
                           <div class="profile-details">
                              <div class="profile-name">Larraine Celia</div>
                              <div class="profile-date">2022-08-08</div>
                           </div>
                        </div>
                        <div class="star-rating">
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                        </div>
                        <div class="review-content">
                           I run a Holiday Company and we do day trips, holidays and cruises. All my leads are generated
                           by the wbs team. The team really tries to offer new ideas and new campaigns to me to enable
                           me to promote my business in a professional and creative way. The young lady who designs my
                           adverts is imaginative and very creative and the reaction to her ads are really excellent.
                        </div>
                     </div>
                  </div>
                  <div class="review-item">
                     <div class="review-inner">
                        <div class="review-header">
                           <div class="profile-img">
                              <img src="images/user-4.png" alt="google-user">
                           </div>
                           <div class="profile-details">
                              <div class="profile-name"> robin Jazmin</div>
                              <div class="profile-date">2022-08-08</div>
                           </div>
                        </div>
                        <div class="star-rating">
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                           <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                        </div>
                        <div class="review-content">
                           We stated working with them about a year ago. The results have been good with many sales
                           coming from our social media campaigns. I would highly recommend them for digital marketing
                           services
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--google-review end-->