<footer id="site_footer">
      <div class="contact_us">
            <div class="my_container">
                  <div class="row">
                        <div class="col-5">
                              <div class="row">
                                    <div class="col">
                                          <h3>dc comics</h3>

                                          <a href="#">{{ item.text }}</a>

                                          <h3>shop</h3>
                                          <a href="#" v-for="item in Shop">{{ item.text }}</a>


                                    </div>
                                    <div class="col">
                                          <h3>DC</h3>
                                          <a href="#" v-for="item in DC">{{ item.text }}</a>

                                    </div>
                                    <div class="col">
                                          <h3>Sites</h3>

                                          <a href="#" v-for="item in Sites">{{ item.text }}</a>


                                    </div>
                              </div>
                        </div>

                  </div>
            </div>

      </div>
      <div class="call_to_action">
            <div class="my_container">
                  <button>
                        sign-up now!
                  </button>
                  <nav class="navbar">
                        <h3>follow us</h3>
                        <div>
                              <a v-for="icon in Icons" href="#">
                                    <img :src="'../src/assets/img/' + icon.url" alt="">
                              </a>
                        </div>
                  </nav>
            </div>

      </div>
</footer>
<!-- /#site_footer -->