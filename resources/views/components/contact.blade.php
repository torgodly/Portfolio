<div id="contact" class="contact-section section hide-in-preloading" tabindex="-1">
    <div class="container">
        <div class="section-content">

            <!-- contact text -->
            <div class="contact__text">
                <div class="text-box-inline">
                    <span class="subtitle">contact</span>
                    <h2>
                        You need A Project?
                        <br>
                        Please Drop a Message
                    </h2>
                    <p>Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as possible.</p>
                </div>

                <!-- contact info -->
                <ul class="contact__info">
                    <li class="contact__info__item">
                        <svg class="contact__info__item__icon" width="24" height="24">
                            <use href="#location"/>
                        </svg>
                        <div class="contact__info__item__text">
                            <strong>Address:</strong>
                            {{$about->address}}
                        </div>
                    </li>
                    <li class="contact__info__item">
                        <svg class="contact__info__item__icon" width="24" height="24">
                            <use href="#phone"/>
                        </svg>
                        <div class="contact__info__item__text">
                            <strong>Phone:</strong>
                            <ul>
                                <li><a href="tel:02966202290" class="ltr-dir">{{$about->phone_number}}</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="contact__info__item">
                        <svg class="contact__info__item__icon" width="24" height="24">
                            <use href="#envelope"/>
                        </svg>
                        <div class="contact__info__item__text">
                            <strong>Email:</strong>
                            <ul>
                                <li><a href="mailto:{{$about->email}}">{{$about->email}}</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- social links -->
                <ul class="contact__social">
                    <li class="contact__social__item">
                        <a class="contact__social__link" href="#" target="_blank" rel="noreferrer"
                           data-tooltip='{ "text": "Facebook", "dir": "top" }'>
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="contact__social__item">
                        <a class="contact__social__link" href="#" target="_blank" rel="noreferrer"
                           data-tooltip='{ "text": "Twitter", "dir": "top" }'>
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="contact__social__item">
                        <a class="contact__social__link" href="#" target="_blank" rel="noreferrer"
                           data-tooltip='{ "text": "LinkedIn", "dir": "top" }'>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="contact__social__item">
                        <a class="contact__social__link" href="#" target="_blank" rel="noreferrer"
                           data-tooltip='{ "text": "YouTube", "dir": "top" }'>
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- contact form -->
            <div class="contact__formHolder">
                <form class="contact__form form-styled" data-url="contact_form.php"
                      data-success-msg="Message sent successfully!"
                      data-err-msg="Oops! something went wrong, please try again.">

                    <!-- name control -->
                    <div class="group">
                        <label>Name</label>
                        <div class="control has-prefix-icon">
                            <input type="text" name="name" placeholder="e.g. John Doe" minlength="3" required>
                            <i class="fa-solid fa-circle-user prefix-icon"></i>

                            <!-- validation errors messages -->
                            <div class="errors-msgs">
                                <input class="required" type="hidden" value="Name is required">
                                <input class="minLength" type="hidden" value="Name must be at least 3 characters">
                            </div>
                        </div>
                    </div>

                    <!-- email control -->
                    <div class="group">
                        <label>Email</label>
                        <div class="control has-prefix-icon">
                            <input class="ltr-dir" type="email" inputmode="email" name="email"
                                   placeholder="e.g. john.doe@gmail.com" required>
                            <i class="fa-solid fa-envelope prefix-icon"></i>

                            <!-- validation errors messages -->
                            <div class="errors-msgs">
                                <input class="required" type="hidden" value="Email is required">
                                <input class="invalid" type="hidden" value="Please enter a valid email address">
                            </div>
                        </div>
                    </div>

                    <!-- phone control -->
                    <div class="group phone-number">
                        <label>Phone <span class="optional">(Optional)</span></label>
                        <div class="control has-prefix-icon">
                            <input type="tel" inputmode="tel" name="phone" placeholder="Phone Number">
                            <i class="fa-solid fa-phone prefix-icon"></i>

                            <!-- validation errors messages -->
                            <div class="errors-msgs">
                                <input class="invalid" type="hidden" value="Please enter a valid Phone Number">
                            </div>
                        </div>
                    </div>

                    <!-- message control -->
                    <div class="group">
                        <label>Message</label>
                        <div class="control has-prefix-icon">
                            <textarea name="message" placeholder="Write message..." required></textarea>
                            <i class="fa-solid fa-comments prefix-icon"></i>

                            <!-- validation errors messages -->
                            <div class="errors-msgs">
                                <input class="required" type="hidden" value="Message is required">
                            </div>
                        </div>
                    </div>

                    <!-- submit button -->
                    <div class="group">
                        <div class="control">
                            <button class="submit-btn w-btn w-btn--s2 w-btn--dark" type="button"
                                    onclick="window._contactFormValidation(this)">Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
