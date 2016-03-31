# Damage Control - Magento Module #

Damage Control module is created with idea to get feedback from customers about orders. Customer rate order and depending if rate is good or bad different actions are triggered. Unsatisfied customer gets a chance, in simple popup window, to explain what is wrong with order. If order has reviewed with good rate in pop up window is call to action for customer to leave positive review on social media, Facebook and/or Google+.
On the other side, seller gets notified about every bad reviewed order and has opportunity to redeem.

Here is the overview of functionalities provided by this extension

* Define orders and cron options to periodically check and send emails with review request
* Review based on one question survey
* Get notified with email about negative review
* Provide links to Facebook and Google+ pages for positive review
* Customizable email templates
* Detailed overview of reviews

# Usage

First thing to do is to create new Magento mail templates for two different emails. First mail is for customers and has link leading to review page on website, while other has information about negative review and will be sent when customer finish with survey (as mention before good review will offer links for social media). Both mail templates could be found in Email Templates, Damage Control Review and Damage Control Review Notification.
Next step is setting Damage Control configuration in System Configuration from left menu Stuntcoders. All details are described in the section "Setting up basic and required options".

After setting options, email with review request is going to be sent to all orders from selected range accordingly to defined cron option.
Since mail sending, from main menu Customers => Damage Control, all information about sent review mails and their statuses are there. Clicking on desired line opens more detailed information on another page for better tracking customer behavior (mark, date of sending, reading mail and reviewing order, number of page visiting before rating). With every step cron or customer take, informations about review are updated.

### Setting up basic and required options

##### Set up general options
* Send after (in days) - mail with request will be sent after x days since order is created
* Ignore old orders (in days) - mail with request will not be sent to orders older than x days
* Order statuses - select order statuses from which orders will be selected

##### Set up rating system
* Define border mark - this mark distinct good and bad review

##### Set up damage control run options
* Frequency - select cron frequency from dropdown list
* Start time - set cron start time
* Email sender - select sender email from dropdown list (emails stored in Store email addresses), this mail contains link to review page
* Email template - select email template for email with review request link (etc. Damage Control Review)

##### Set up damage control email notification options
* Email sender - select email sender from dropdown list (emails stored in Store email addresses)
* Recipient emails - add email addresses to get notified when bad review is submitted, if there are more emails separate it with commas
* Email template - select email template for email with negative review data (etc. Damage Control Review Notification)

##### Social media options
* Message for social media - provide message for popup window in survey for good review
* Link to Facebook page - link to desired Facebook page
* link to Google+ - link to desired Google+ account

Copyright StuntCoders — [Start Your Online Store Now](http://stuntcoders.com/)
