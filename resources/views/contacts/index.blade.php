<x-layout>
 <div class="contacts-page">
    <!-- Header Navigation (renamed classes to avoid conflicts) -->
    <div class="contacts-breadcrumb">
        <a href="/" class="contacts-breadcrumb-link">Home</a> /
        
        <span>WTG? Support +049 554 4402</span>
    </div>
    
    <!-- Main Content Section -->
    <div class="contacts-container">
        <!-- Left Column - Text Content -->
        <div class="contacts-container-left">
            <h1 class="contacts-main-heading">REACH OUT TO OUR SUPPORT TEAM</h1>
            <p class="contacts-description">
                Tap into our dedicated customer service team and get the support you need
                for your event planning needs. Our experienced team is ready to help bring
                your next event to life!
            </p>
            <p class="contacts-team-intro">Our dedicated <span class="contacts-highlight">Support Team</span> is here to assist you with any questions about WTG? and help you achieve your event goals. Reach out to us directly at <span class="contacts-highlight">+1 855-963-2422</span> to get started, or if you prefer, complete the Contact Us form and someone from our team will be in touch shortly.</p>
            <div class="contacts-support-box">
                
            </div>
        </div>
        
        <!-- Right Column - Contact Form -->
        <div class="contacts-container-right">
            <p class="contacts-form-info">
                Click "Contact Us" to learn about other ways that WTG? can support your events.
                <a href="/privacy-policy" class="contacts-highlight-link">Read our Privacy Policy here.</a>
            </p>
            <form class="contacts-form">
                <div class="contacts-form-row">
                    <div class="contacts-form-group contacts-form-half">
                        <input type="text" class="contacts-input" placeholder="First name*" required>
                    </div>
                    <div class="contacts-form-group contacts-form-half">
                        <input type="text" class="contacts-input" placeholder="Surname*" required>
                    </div>
                </div>
                <div class="contacts-form-group">
                    <input type="email" class="contacts-input" placeholder="Email*" required>
                </div>
                <div class="contacts-form-group">
                    <input type="text" class="contacts-input" placeholder="Organization*" required>
                </div>
                <div class="contacts-form-group">
                    <input type="tel" class="contacts-input" placeholder="Phone number*" required>
                </div>
                <div class="contacts-form-group">
                    <select class="contacts-select" required>
                        <option value="" disabled selected>Country*</option>
                        <option value="us">United States</option>
                        <option value="ca">Canada</option>
                        <option value="uk">United Kingdom</option>
                        <option value="au">Australia</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="submit" class="contacts-submit-button">Contact Support</button>
            </form>
        </div>
    </div>
</div>
</x-layout>