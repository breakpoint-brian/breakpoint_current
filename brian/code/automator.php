
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brian Richardson</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    
    <style type="text/css">
  		pre.prettyprint {
    		border: 1px solid #ccc;
    		margin-bottom: 0;
    		padding: 9.5px;
  		}
  	</style>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="../index.php">Home</a>
          <a class="blog-nav-item" href="../about/index.php">About</a>
          <a class="blog-nav-item active" href="index.php">Code Examples</a>
          <a class="blog-nav-item" href="../contact/index.php">Contact</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">Working with the UiAutomator Framework</h1>
        <p class="lead blog-description">Simple, Powerful UI Automation on Android</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">You have to crawl before you run</h2>
            <p class="blog-post-meta">Authored by: Brian Richardson</p>

            <article>
            	<h3>Back to the basics</h3>
            	<p>As part of putting this website together and just trying to keep the few skills I have ready
            	to go for that next interview, I wanted to put together some Android automation since I was
            	missing working with UiAutomator. Since I am still a couple weeks out from having my own Android
            	application ready to go, I thought I would put together a quick little script that tests out the
            	example Navigation app that is provided in the Android SDK.</p>
            	<p>What I am not going to cover here is the initial setup and mundane tasks that are associated
            	with stating up an Android automation project using UiAutomator. While it is relatively simple
            	to set up, it requires making sure several Android specific components have been installed and
            	configured properly. I could spend and entire post talking about that, but, there are tons of
            	great explanations and walkthrough's on the web that do that already.</p>
            	<h3>UiAutomator Structure</h3>
            	<p>Since the app under test is a single view with several buttons, I chose to create the test
            	project as a single class with all the test cases contained within it. In this particular
            	context, we could have broken down each action on the main view in to it's own test class, but
            	I will explain later why that could be burdensome in larger and more complex apps.</p>
            	<p>After creating our test class the first thing to do is to bring in our UiAutomator libraries.
 				If you are curious the full documentation of these libraries can be found 
 				<a href="http://developer.android.com/tools/help/uiautomator/index.html">here</a>. These are the
 				ones we are going to be working with:</p>
 				<pre class="prettyprint">import com.android.uiautomator.core.UiObject;
import com.android.uiautomator.core.UiObjectNotFoundException;
import com.android.uiautomator.core.UiScrollable;
import com.android.uiautomator.core.UiSelector;
import com.android.uiautomator.testrunner.UiAutomatorTestCase; </pre>
				<p></p>
 				<p>Next we need to extend our test class with UiAutomatorTestCase.</p>
 				<pre class="prettyprint">
public class TestClass extends UiAutomatorTestCase {
	}
 				</pre>
 				<p></p>
 				<p>We are now ready to start building out our test cases in our test class. Since UiAutomatorTestCase
 				inherits from the JUnit TestCase class we can use the setUp method to make sure we are 
 				configured properly and launch the app. The full code is below:</p>
 				<pre class=" pre-scrollable prettyprint">
public void setUp() throws UiObjectNotFoundException {

	//determine whether or not setUp has been run before
	if (setUpIsDone) {
		return;
		}
		setUpIsDone = true;

	//gets a device instance and simulates a short press on the device Home button
	getUiDevice().pressHome();
		
	//creates an object allApps and assigns it to the Apps button on the Home 
	//screen of the device. Then we short click on that object and wait for a new window to load before
	//moving on
	UiObject allApps = new UiObject(new UiSelector().description("Applications"));
	allApps.clickAndWaitForNewWindow();
		
	//make sure we are on the Apps tab by assigning the apps tab to the appsTab object
	//then short click
	UiObject appsTab = new UiObject(new UiSelector().text("Apps"));
	appsTab.click();
		
	//we create a scrollable object appView and set the scrolling/swipe direction
	//as horizontal since the default direction is vertical
	UiScrollable appView = new UiScrollable(new UiSelector().scrollable(true));
	appView.setAsHorizontalList();

	//next we find the application to launch by its displayed name. Since the view is scrollable, it will move
	//through each view until it finds the app. If it doesn't find it exception is raised, otherwise it will
	//perform a short click on the app
	UiObject appNav = appView.getChildByText(new UiSelector().className(android.widget.TextView.class.getName()), 
		"App Navigation");
	appNav.clickAndWaitForNewWindow();
		
	//finally we verify the package name of the app that is running to be sure we found the correct app in the list
	UiObject appValidation = new UiObject(new UiSelector().packageName("com.example.android.appnavigation"));
	assertTrue("Unable to find App Navigation", appValidation.exists());
}
 				</pre>
 				<p></p>
 				<p>What this method does is it handles my device/OS operations first then launches the app from
 				the Apps view and finally verifies the correct app is running by checking the package name. So
 				how do we accomplish identifying the objects on screen and creating our selectors? The UiAutomator
 				package has a really cool tool called UiAutomatorViewer (UAV for short). If you have ever used FireBug on a browser
 				then this will look very familiar. UAV takes an XML snapshot of the screen and displays information
 				about each selected element on the screen. From this information we can determine things like it's
 				position in the hierarchy, text value, class, index, resource-id and many many other attributes
 				related to the object we select. Below is a sample snapshot of the NaivgationApp we are testing.</p>
 				<figure style="padding-bottom:15px;">
            	<a href="tutimg/uavsnap.png" target="_blank"><img src="tutimg/uavsnap.png" 
            	style="height:350px; width:570px;" class="tutimg"></a>
            	<figcaption>fig.1 The Content Category button selected in UiAutomatorViewer</figcaption>
            	</figure>
            	<p></p>
            	<p>One of the drawbacks to using the setUp method is that it is called every time we run a test
            	case. That isn't ideal for a variety of reasons so we simply set a flag to check whether or not
            	setUp has been run before. Now that we have our test environment set and our app running it's time
            	to write our cases.</p>
            	<h3>A single test case</h3>
            	<p>The test class I wrote for this app is rather large for web viewing at 250+ lines of code, so I'm 
            	going to focus on a single test case so we can get an idea of how it is constructed. The purpose
            	of this test case is to test linking a peer activity by pressing a button in the UI. There is also a text
            	string that keeps count of the number of peers we have connected. What we want to do is construct
            	a test case that adds five peer activities then verifies that our counter is updating with each click. So
            	what does it look like? Here's the full test case:</p>
            	<pre class="pre-scrollable, prettyprint">
public void testAddPeerActivity() throws UiObjectNotFoundException {
	//find the Peer Activities button
	UiObject peerBtn = new UiObject(new UiSelector().text("Peer Activities"));
	peerBtn.clickAndWaitForNewWindow();
		
	//define the Link another peer activity button and peer count string
	UiObject linkPeerActivity = new UiObject(new UiSelector().className("android.widget.Button").text("Link another peer activity"));
	UiObject peerTextView = new UiObject(new UiSelector().resourceId("com.example.android.appnavigation:id/peer_counter"));
		
	//peform a while loop to add a total of five peers
	int i = 1;
	while (i <= 4) {
		linkPeerActivity.clickAndWaitForNewWindow();
		i++;
	}
	String peerCount = peerTextView.getText();
	assertEquals(peerCount, "Peer count:5");
}
		</pre>
		<p></p>
		<p>The first thing we do here is define the Peer Activities button on the main App Navigation view. The
		button is defined by looking for a text value of Peer Activities. From UAV when we click on the Peer 
		Activities list item we get the details of the object. We then perform a short click on the object and
		wait for the Peer Activities view to load.</p>
		<figure style="padding-bottom:15px;">
            	<a href="tutimg/uavedit.png" target="_blank"><img src="tutimg/uavedit.png" 
            	style="height:350px; width:570px;" class="tutimg"></a>
            	<figcaption>fig.2 Finding the text value of a list item</figcaption>
        </figure>
        <p></p>
        <p>Now that we have loaded the Peer Activities view, we need to define the button we click to link a new
        peer activity and the text string that keeps count of the number of linked peers. We define those objects
        in these two lines:</p>
        <pre class="prettyprint">
UiObject linkPeerActivity = new UiObject(new UiSelector().className("android.widget.Button").text("Link another peer activity"));
UiObject peerTextView = new UiObject(new UiSelector().resourceId("com.example.android.appnavigation:id/peer_counter"));
        </pre>
        <p></p>
        <p>In order to click on the 'Link another peer button' multiple times we need to create a simple while loop to
        handle that for us. Since our counter starts at 1, we need to start our while loop at 1. As long as our
        counter is less than or equal to 4 we will continue to click the button. This will gives us a total peer
        count of 5.</p>
        <pre class="prettyprint">
int i = 1;
while (i <= 4) {
	linkPeerActivity.clickAndWaitForNewWindow();
	i++;
	}
        </pre>
        <p></p>
        <p>The last step in the test is to verify the expected result of the test. Our original goal was to open
        the view and add five peer activities. If our code hasn't thrown an exception yet, these last two statements
        are what we use to assert the expected result of the test.</p>
        <pre class=prettyprint">
String peerCount = peerTextView.getText();
assertEquals(peerCount, "Peer count:5");
        </pre>
        <p></p>
        <p>The first line gets the current text value of the peer count string we created earlier. The second line
        is our assertion that our expected string value matches what is displayed on the device by making sure the
        two values are equal. UiAutomator inherits from the JUnit Assert class so that is something to keep in mind
        when deciding what kind of assert statement would be best in order to validate your test case. In this case
        if our two strings are equal we pass the test and move on to the next one in our class. My full test class 
        is below.</p>
        <pre class="prettyprint pre-scrollable">
package com.example.test_cases;

import com.android.uiautomator.core.*;
import com.android.uiautomator.testrunner.*;

public class NavAppTestCases extends UiAutomatorTestCase {

	public void setUp() throws UiObjectNotFoundException {
		getUiDevice().pressHome();
		
		//find the All Apps button
		UiObject allApps = new UiObject(new UiSelector().description("Applications"));
		allApps.clickAndWaitForNewWindow();
		
		//make sure we are on the Apps tab
		UiObject appsTab = new UiObject(new UiSelector().text("Apps"));
		appsTab.click();
		
		//set scrollable view and swipe to find app
		UiScrollable appView = new UiScrollable(new UiSelector().scrollable(true));
		appView.setAsHorizontalList();
		
		UiObject appNav = appView.getChildByText(new UiSelector().className(android.widget.TextView.class.getName()), 
			"App Navigation");
		appNav.clickAndWaitForNewWindow();
		
		//validate the package name
		UiObject appValidation = new UiObject(new UiSelector().packageName("com.example.android.appnavigation"));
		assertTrue("Unable to find App Navigation", appValidation.exists());
	}

	public void testUpNavigation() throws UiObjectNotFoundException {
		//click on the Up Navigation button
		UiObject upBtn = new UiObject(new UiSelector().text("Up Navigation"));
		upBtn.clickAndWaitForNewWindow();
		
		//verify we are on the right page
		UiObject upTitle = new UiObject(new UiSelector().resourceId("android:id/title"));
		UiObject upTextView = new UiObject(new UiSelector().className("android.widget.TextView"));
		String upViewContent = upTextView.getText();
		String upLabel = upTitle.getText();
		assertEquals(upLabel, "Up Navigation");
		assertEquals(upViewContent, "You clicked the up button");
		
		//clicking the device back button should take us back to the App Navigation view
		getUiDevice().pressBack();
		
		//verify we are back at the App Navigation view
		UiObject appTitle = new UiObject(new UiSelector().resourceId("android:id/title"));
		String titleText = appTitle.getText();
		assertEquals(titleText, "App Navigation");
	}

	public void testAddPeerActivity() throws UiObjectNotFoundException {
//		find the Peer Activities button
		UiObject peerBtn = new UiObject(new UiSelector().text("Peer Activities"));
		peerBtn.clickAndWaitForNewWindow();
		
//		define the Link another peer activity button and peer count string
		UiObject linkPeerActivity = new UiObject(new UiSelector().className("android.widget.Button").text("Link another peer activity"));
		UiObject peerTextView = new UiObject(new UiSelector().resourceId("com.example.android.appnavigation:id/peer_counter"));
		
//		peform a while loop to add a total of five peers
		int i = 1;
		while (i <= 4) {
			linkPeerActivity.clickAndWaitForNewWindow();
			i++;
		}
		String peerCount = peerTextView.getText();
		assertEquals(peerCount, "Peer count:5");
	}
		
	public void testPeerActivityBack() throws UiObjectNotFoundException {
//		define the peer count string
		UiObject peerTextView = new UiObject(new UiSelector().resourceId("com.example.android.appnavigation:id/peer_counter"));
			
//		peform a while loop to navigate back to peer count 1
		int i = 5;
		while (i >= 1) {
			getUiDevice().pressDelete();
			--i;
		}
		String peerCount = peerTextView.getText();
		assertEquals(peerCount, "Peer count:1");
		
//		verify one more back button click takes us to the App Navigation view
		getUiDevice().pressBack();
		
		//verify we are back at the App Navigation view
		UiObject appTitle = new UiObject(new UiSelector().resourceId("android:id/title"));
		String titleText = appTitle.getText();
		assertEquals(titleText, "App Navigation");	
	}
	
	public void testViewTaskBackBtn() throws UiObjectNotFoundException {
//		define the view tasks button
		UiObject taskBtn = new UiObject(new UiSelector().text("View from other tasks"));
		taskBtn.clickAndWaitForNewWindow();
		
//		define the new task button
		UiObject newTaskBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Launch new task"));
		newTaskBtn.clickAndWaitForNewWindow();
		
//		verify we are on the outside task
		UiObject taskTitle = new UiObject(new UiSelector().resourceId("android:/id/action_bar_title"));
		String titleText = taskTitle.getText();
		assertEquals(titleText, "Outside Task");
		
//		click the back button and verify it takes us to the App navigation view
		getUiDevice().pressBack();
		UiObject appTitle = new UiObject(new UiSelector().resourceId("android:id/title"));
		String appText = appTitle.getText();
		assertEquals(appText, "App Navigation");
	}
	
	public void testViewTaskContentBtn() throws UiObjectNotFoundException {
//		define the view tasks button
		UiObject taskBtn = new UiObject(new UiSelector().text("View from other tasks"));
		taskBtn.clickAndWaitForNewWindow();
		
//		define the new task button
		UiObject newTaskBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Launch new task"));
		newTaskBtn.clickAndWaitForNewWindow();
		
//		click the content view button
		UiObject contentViewBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Content View"));
		contentViewBtn.clickAndWaitForNewWindow();
		
//		verify we are on the content viewer
		UiObject contentTitle = new UiObject(new UiSelector().resourceId("android:id/title"));
		String contentText = contentTitle.getText();
		assertEquals(contentText, "Content Viewer");
		
//		step backwards and verify order
		getUiDevice().pressBack();
		
//		verify Outside Task title
		UiObject outsideTitle = new UiObject(new UiSelector().resourceId("android:id/action_bar_title"));
		String outsideText = outsideTitle.getText();
		assertEquals(outsideText, "Outside Text");
		
//		step back again
		getUiDevice().pressBack();
		
//		verify task launcher view. uses assertTrue because assertEquals got boring.
		UiObject textViewContent = new UiObject(new UiSelector().className("android.widget.TextView").text("New task launcher"));
		assertTrue("We are not on the task launcher view", textViewContent.exists());
		
//		click back button again and we should be on the App Navigation view
		getUiDevice().pressBack();
		
//		verify we are back on the App navigation page
		UiObject appNavView = new UiObject(new UiSelector().resourceId("android:id/title").text("App Navigation"));
		assertTrue("We are nto on the App Navigation view", appNavView.exists());	
	}
	
	public void testContentCategory() throws UiObjectNotFoundException {
//		define the Content Category button
		UiObject contentBtn = new UiObject(new UiSelector().text("Content Category"));
		contentBtn.clickAndWaitForNewWindow();
		
//		find the Content View button and click it
		UiObject contentViewBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Content View"));
		contentViewBtn.click();
		
//		verify we are at the content viewer
		UiObject contentViewText = new UiObject(new UiSelector().className("android.widget.TextView").text("Navigated here from category"));
		assertTrue("We are not at the Content Viewer", contentViewText.exists());
		
//		click the device back button
		getUiDevice().pressBack();
		
//		verify we are on the Content Category view
		UiObject catTitle = new UiObject(new UiSelector().resourceId("android:id/title").text("Content Category"));
		assertTrue("We are not on the Content Category view", catTitle.exists());
		
//		clicking the back button should take us back to the App Navigation page
		getUiDevice().pressBack();
		UiObject appNavView = new UiObject(new UiSelector().resourceId("android:id/title").text("App Navigation"));
		assertTrue("We are nto on the App Navigation view", appNavView.exists());	
		
	}
	
	public void testDirectNotification() throws UiObjectNotFoundException {
//		find the Notifications button and click on it
		UiObject notificationBtn = new UiObject(new UiSelector().text("Notifications"));
		notificationBtn.clickAndWaitForNewWindow();
		
//		find and click on the Post direct notification button
		UiObject directNotificationBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Post direct notification"));
		directNotificationBtn.click();
		
//		open the notification view
		getUiDevice().openNotification();
		
//		define the direct notification list item and click on it
		UiScrollable notificationView = new UiScrollable(new UiSelector().scrollable(true));
		UiObject directNotification = notificationView.getChild(new UiSelector().className("android.widget.TextView").text("Direct Notification"));
		directNotification.clickAndWaitForNewWindow();
		
//		verify we are on the Content Viewer
		UiObject contentViewerText = new UiObject(new UiSelector().className("android.widget.TextView").text("From Notification"));
		assertTrue("We are not on the Content Viewer view", contentViewerText.exists());
		
//		pressing the back button will take us to the Content Category view
		getUiDevice().pressBack();
		UiObject contentCatTitle = new UiObject(new UiSelector().resourceId("android:id/title").text("Content Category"));
		assertTrue("We are not on the Content Category view", contentCatTitle.exists());
		
//		clicking the back button should take us back to the App Navigation page
		getUiDevice().pressBack();
		UiObject appNavView = new UiObject(new UiSelector().resourceId("android:id/title").text("App Navigation"));
		assertTrue("We are nto on the App Navigation view", appNavView.exists());
		
	}
	
	public void testInterNotification() throws UiObjectNotFoundException {
//		find the Notifications button and click on it
		UiObject notificationBtn = new UiObject(new UiSelector().text("Notifications"));
		notificationBtn.clickAndWaitForNewWindow();
		
//		find and click on the Post direct notification button
		UiObject interNotificationBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Post interstitial notification"));
		interNotificationBtn.click();
		
//		open the notification view
		getUiDevice().openNotification();
		
//		define the direct notification list item and click on it
		UiScrollable notificationView = new UiScrollable(new UiSelector().scrollable(true));
		UiObject interNotification = notificationView.getChild(new UiSelector().className("android.widget.TextView").text("Interstitial Notification"));
		interNotification.clickAndWaitForNewWindow();
		
//		verify we are on the Interstitial
		UiObject interTitle = new UiObject(new UiSelector().className("android.widget.TextView").text("Interstitial"));
		assertTrue("We are not on the interstitial", interTitle.exists());
		
//		pressing the Content View button will take us to the Content Viewer view
		UiObject interContentViewBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Content View"));
		interContentViewBtn.click();
		
//		verify we are on the Content Viewer view
		UiObject interTextContent = new UiObject(new UiSelector().className("android.widget.TextView").text("From Interstitial Notification"));
		assertTrue("We are ot on the content viewer", interTextContent.exists());
		
//		clicking on the back button will take us to the Content Category view
		getUiDevice().pressBack();
		UiObject contentViewBtn = new UiObject(new UiSelector().className("android.widget.Button").text("Content View"));
		assertTrue("We are not on the Content Category view", contentViewBtn.exists());
		
//		clicking the back button should take us back to the App Navigation page
		getUiDevice().pressBack();
		UiObject appNavView = new UiObject(new UiSelector().resourceId("android:id/title").text("App Navigation"));
		assertTrue("We are not on the App Navigation view", appNavView.exists());
		
	}

}
        </pre>
        <p></p>
        <p>Overall this is a pretty simple example but it's a good chance to dive in to the basic fundamentals of
        creating selectors, manipulating the device hardware and constructing a basic test case using UiAutomator.
        Even though we have our test case fully written there are a few more steps we need to cover before our tests
        are up and running on an Android device. Right now I am out of Dr.Pepper and my stomach is rumbling so those
        steps will come in a second post once I have cured my hunger and found a cold Dr.Pepper. Or beer.</p>
            </article>
            
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <img src="android.png" style="width:233px; padding-right:22px;">
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About UiAutomator</h4>
            <p>UiAutomator is a flexible yet powerful Android UI automation framework. Getting running with UiAutomator takes no time
            at all and since it's part of the Android SDK there are no special tools to install.</p>
          </div>
          
          
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>&copy; 2015 Built by me.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/readmore.min.js"></script>
    <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script>
	$('article').readmore({
		collapsedHeight: 250,
		});
    </script>
  </body>
</html>
