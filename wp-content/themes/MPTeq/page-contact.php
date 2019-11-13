<?php get_header()?>
<main>
    <section id="contact1" class="design">
        <div id="box">
            <div id="left">
                <form>
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email...">
                    <label for="message">Message:</label>
                    <textarea id="message" placeholder="Message..."></textarea>
                    <input id="submit" type="submit">
                </form>
            </div>
            <div id="right">
                <div class="contact">
                    <div class="details">+27 (0) 79 885 2513</div>
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact">
                    <div class="details">+27 (0) 86 293 0351</div>
                    <i class="fas fa-fax"></i>
                </div>
                <div class="contact">
                    <div class="details">info@mpteq.com</div>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact">
                    <div class="details location">
                        <p>71 Marais Street</p>
                        <p>Schoemansville</p>
                        <p>Hartbeespoort</p>
                        <p>North West</p>
                        <p>0216</p>
                    </div>
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="contact2" class="design">
        <div id="wrap">
            <div class="column">
                <div class="icon" id="phone">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="fax">
                    <i class="fas fa-fax"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="column">
                <div class="icon" id="location">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
            <div id="details">
                <div id="phone">
                    <h2>Phone:</h2>
                    <p>+27 (0) 79 885 2513</p>
                </div>
                <div id="fax">
                    <h2>Fax:</h2>
                    <p>+27 (0) 86 293 0351</p>
                </div>
                <div id="email">
                    <h2>Email:</h2>
                    <p>info@mpteq.com</p>
                </div>
                <div id="location">
                    <h2>Location:</h2>
                    <p>71 Marais Street</p>
                    <p>Schoemansville</p>
                    <p>Hartbeespoort</p>
                    <p>North West</p>
                    <p>0216</p>
                </div>
            </div>
        </div>
        <div id="form">
            <h2>Leave a message:</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email...">
                <label for="product">Product:</label>
                <select id="product">
                    <option default value="Unspecified">Product...</option>
                    <option>Thickeners</option>
                    <option>Jigs</option>
                    <option>Larcodems</option>
                    <option>Agitation & Mixing Systems</option>
                    <option>Filters</option>
                    <option>Laboratry Services</option>
                    <option>Other</option>
                </select>
                <label for="message">Message:</label>
                <textarea id="message" placeholder="Message..."></textarea>
                <input id="submit" type="submit">
            </form>
        </div>
    </section>
    <input id="main-toggle" class="toggle" type="range" min="0" max="1" value="0">
</main>
<?php get_footer()?>