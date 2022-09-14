<form method="post" action="/contact/store" enctype="multipart/form-data">
    <div class="container">
        <div class="columns is-multiline my-5" style="align-self: center;">

            <div class="column is-6" style="align-self: center !important;">
                <div class="content-div">

                    <h1 class="title is-1 has-text-black">Contact Information</h1>
                    <br>
                    <p class="subtitle is-4" style="text-align: justify !important;">
                        You can contact us to receive detailed information about our subscription services and prices, become a solution partner, and voice your opinions and suggestions about Apsiyon.
                    </p>
                </div>
            </div>

            <div class="column is-1"></div>
            <div class="column is-5">
                <img style="position: absolute; left: 640px; top: 80px;" class="left-circle rotate ls-is-cached lazyloaded" data-src="https://cdn.apsiyon.com/V5/dist/img/ui/dotted-circle-blue.svg" alt="blue" width="119px" height="112px" src="https://cdn.apsiyon.com/V5/dist/img/ui/dotted-circle-blue.svg">
                <img style="position: absolute; right: -50px; bottom: 80px;" class="right-circle ls-is-cached lazyloaded" data-src="https://cdn.apsiyon.com/V5/dist/img/ui/half-circle-orange.svg" alt="orange" width="66px" height="132px" src="https://cdn.apsiyon.com/V5/dist/img/ui/half-circle-orange.svg">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <div class="field">
                                <label for="name">Full Name</label>
                                <div class="control has-icons-left">
                                    <input type="text" name="name" id="name" placeholder="Your Name"
                                           class="input is-medium"
                                           autocomplete required>
                                    <span class="icon is-left is-small"><i class="sl sl-icon-user"></i></span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="email">Email</label>
                                <div class="control has-icons-left">
                                    <input type="email" name="email" id="email" placeholder="Your Email"
                                           class="input is-medium"
                                           required>
                                    <span class="icon is-left is-small"><i class="sl sl-icon-user"></i></span>

                                </div>
                            </div>

                            <div class="field">
                                <label for="phone">Phone</label>
                                <div class="control has-icons-left">
                                    <input type="text" name="phone" id="phone" placeholder="Your Phone"
                                           class="input is-medium"
                                           required>
                                    <span class="icon is-left is-phone"><i class="sl sl-icon-phone"></i></span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="message">Message</label>
                                <div class="control has-icons-left">
                                    <textarea name="message" id="message" placeholder="Your Message" rows="10"
                                              class="textarea" required></textarea>
                                              <br>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary site-first-btn-color">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>
