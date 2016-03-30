# Damage Control - Magento Module #

Damage Control module is created with idea to get feedback from customer about order. Unsatisfied customer will get a chance to explain what is wrong with order, on the other side seller will get chance to redeem and to try help customer. If everything is all right with order, with quick survey, customer will be redirected to leave comment on social media such are Facebook and Google+.

Here is the overview of functionalities provided by this extension

* Choose orders and time to send emails with review request
* Quick review with one question survey
* Get notified with email about negative review
* Provide links to Facebook and Google+ pages for positive review
* Customizable email templates
* Overview of all order reviews

# Usage

First thing to do is to create new Magento mail templates for two different emails. First will be send to customer and has link leading to review page on website, while other has information about negative review and will be sent when customer finish with survey (as mention before good review will offer links to social media). Both mail templates could be found in Email Templates, Damage Controll Review and Damage Controll Review Notification.
Next step is setting Damage Controll configuration in System Configuration from left menu Stuntcoders. All details are described bellow.

After setting options, email with review request will be sent to all orders from selected range according cron option.
Since mail sending, from main menu Customers => Damage Controll, all information about sent review mails and their statuses are there. Clicking on desired line will open more detailed information for better tracking customer behavior (mark, date of sending, reading mail and reviewing order, number of page visiting before rating). With every step cron or customer take, information will be updated automatically.
### Setting up basic and required options

##### Set up general options
* Send after (in days) - mail with request will be sent after x days since order creation
* Ignore old orders (in days) - mail with request will not be sent to orders older than x days
* Order statuses - select order statuses from which orders will be selected

##### Set up rating system
* Define border mark - this mark distinct good and bad review

##### Set up damage control run options
* Frequency - select cron frequency from dropdown list
* Start time - set cron start time
* Email sender - select email sender from dropdown list (from Store email addresses)
* Email template - select email template for email with review request link (etc. Damage Controll Review)

##### Set up damage control email notification options
* Email sender - select email sender from dropdown list (from Store email addresses)
* Recipient emails - add emails, if there are more emails separate it with commas
* Email template - select email template for email with negative review data (etc. Damage Controll Review Notification)

##### Social media options
* Message for social media - provide message for popup window in survey for good review
* Link to Facebook page - link to desired Facebook page
* link to Google+ - link to desired Google+ account


Copyright StuntCoders  [Start Your Online Store Now](http://stuntcoders.com/)
