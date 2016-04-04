# Damage Control - Magento Module #

The idea behind creating Damage Control Module is to get order related feedback from customers. Depending on whether the customer’s review was positive or negative, different actions are triggered.

Bad review will lead to a possibility to leave a comment, and a good one will offer the buyer to share the good news with friends via social media.

Seller will get notified about every bad review and get an opportunity to redeem.

Here is the overview of functionalities provided by this extension:

* Define orders and cron options to periodically check and send emails with review request
* Review based on one question survey
* Get notified with email about negative review
* Provide links to Facebook and Google+ pages for positive review
* Customizable email templates
* Detailed overview of reviews

# Usage

Your first step should be creating new Magento email template for two different emails. First email is meant for a customer and it contains a link leading to a review page on the website, while other has information about negative review and will be sent when customer finishes the survey (as mentioned before, good review will offer links to social media).

![notification](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_damage_control/order-review-email.png)

Both email templates can be found in Email Templates, Damage Control Review and Damage Control Review Notification.
Next step is setting Damage Control Configuration in System Configuration under StuntCoders left hand menu. All details are described in the section “Setting up basic and required options”.

Link from the first email leads to a page where customer is supposed to rate the order. It is followed by a pop-up that shows different actions depending on the review.

![frontend](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_damage_control/order-review-frontend.png)

Unsatisfied customer gets a chance to explain what is wrong with an order in a simple pop-up window. Orders that have good review rate will serve as a call to action for a customer to share positive review on social media, Facebook or Google Plus.

After setting options, email with review request is going to be sent to all orders from selected range according to defined cron option.
Once the email is sent, all information about sent review email and their statuses are stored under Customers → Damage Control.

![reviews](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_damage_control/order-reviews.png)

Choosing order opens another page with detailed information for better customer behaviour tracking (mark, date of sending, reading email, reviewing order, number of page visits before rating). With every step crone or customer takem information about review are updated.

![review](https://s3-eu-west-1.amazonaws.com/stcd/stunt_mage_damage_control/order-review.png)

### Setting up basic and required options

##### Set up general options
* Send after (in days) - mail with request will be sent after x days since order is created
* Ignore old orders (in days) - mail with request will not be sent to orders older than x days
* Order statuses - select order statuses from which orders will be selected

##### Set up rating system
* Define border mark - this mark distincts good and bad review

##### Set up damage control run options
* Frequency - select cron frequency from drop down list
* Start time - set cron start time
* Email sender - select email sender from drop down list (emails stored in Store email addresses). This mail contains link to review page.
* Email template - select email template for email with review request link (etc. Damage Control Review)

##### Set up damage control email notification options

* Email sender - select email sender from drop down list (emails stored in Store email addresses)
* Recipient emails - add email addresses to get notified when bad review is submitted, if there are more emails separate it with commas
* Email template - select email template for email with negative review data (etc. Damage Control Review Notification)

##### Social media options
* Message for social media - provide message for pop-up window in survey for good review
* Link to Facebook page - link to desired Facebook page
* Link to Google+ - link to desired Google+ account

Copyright StuntCoders — [Start Your Online Store Now](http://stuntcoders.com/)
