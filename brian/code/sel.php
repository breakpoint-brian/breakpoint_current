
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
        <h1 class="blog-title">Working with Selenium</h1>
        <p class="lead blog-description">Some simple test exercises using Selenium WebDriver</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Getting Started</h2>
            <p class="blog-post-meta">Authored by: Brian Richardson</p>

            <article>
            	<h3>Getting set up</h3>
            	<p>The actual setup of Selenium WebDriver is realtively easy and, if you are really interested, can be found 
            	<a href="http://docs.seleniumhq.org/docs/03_webdriver.jsp" target="_blank">here</a>. My IDE of choice at the moment is Eclipse which has
            	a few extra steps in order to get up an running. A good tutorial for getting Selenium setup in Eclipse can be found 
            	<a href="http://www.toolsqa.com/selenium-webdriver/configure-eclipse-with-selenium-webdriver/" target="_blank">here</a>. The point
            	where I am going to start is just a simple login/register page I put together using PHP and MySQL. Even though this is a 
            	simple page, because I am using the page object design pattern, there is a little bit of work to do before we start 
            	actually writing out our test cases.</p>
            	<figure style="padding-bottom:15px;">
            	<a href="tutimg/loginscreen.png" target="_blank"><img src="tutimg/loginscreen.png" 
            	style="height:300px; width:600px;" class="tutimg"></a>
            	<figcaption>fig.1 The login/register page under test</figcaption>
            	</figure>
            	<h3>Defining the objects</h3>
            	<p>The first step is to define each of the objects we intend to test on this page. In this case, it is pretty simple to
            	determine what is relevant. There are several main elements that we need to test. I am excluding the elements required for
            	login since that is a different form with a different function. The seven elements we need to verify are the form title,
            	a first name, last name, username, email address and password. Using Firebug we can see that all these elements have an
            	id defined, so that is how we are going to locate our objects on the page.</p>
            	<p>This is what it looks like when we view the page using Firebug:</p>
            	<figure style="padding-bottom:15px;">
            	<a href="tutimg/fbtitle.png" target="_blank"><img src="tutimg/fbtitle.png" 
            	style="height:250px; width:600px;" class="tutimg"></a>
            	<figcaption>fig.2 The Register form title selected in FireBug</figcaption>
            	</figure>
            	<p>Once we have the id of the object we can begin setting up our page objects in Selenium. From your editor of choice
            	create a new java class. Let's call it RegisterPage. We will need to import a few thing as well. Make sure the following
            	are included in your import statements:</p>
            	<pre class="prettyprint">
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.WebDriver;
				</pre>
				<p></p>
				<p>Let's go ahead and define our page object class and set our element variable to null. This is what it should look
				like:</p>
				<pre class="prettyprint">
public class RegisterPage {
	private static WebElement element = null;
	}
				</pre>
				<p></p>
				<p>Now we can start actually defining our form heading. What we are going to do next is locate our heading by id and assign
				it to a variable - element. Once we have defined our object variable, the final step is to return that object when the
				method is called from our test cases. So how do we it? Well, it's actually quite simple. With just a few lines of code
				we can identify our form heading and assign it to our element variable. The form heading's id is "regEdit" which we can
				use to find the element. It should look like the following:</p>
				<pre class="prettyprint">
public static WebElement regFormTitle(WebDriver driver) {
	element = driver.findElement(By.id("regTitle"));
	return element;
	}
				</pre>
				<p></p>
				<p>And there it is. We can now grab that element and use it in our test cases. Since this is just a text heading, there
				isn't much we can really do with it. From here on out though, locating each object on the page and assigning it to our
				element variable is pretty much the same steps repeated over multiple methods. The below block of code shows what the
				completed page object class should look like.</p>
				<pre class="pre-scrollable prettyprint">
// Import Selenium libraries
import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.WebDriver;

// Define our page object class.
public class RegisterPage {
	private static WebElement element = null;

//	Returns the registration form heading
	public static WebElement regFormTitle(WebDriver driver) {
		element = driver.findElement(By.id("regTitle"));
		return element;
	}
	
//	Returns the text input box for the first name field
	public static WebElement firstName(WebDriver driver) {
		element = driver.findElement(By.id("regFirstName"));
		return element;
	}
	
//	Returns the text input box for the last name field
	public static WebElement lastName(WebDriver driver) {
		element = driver.findElement(By.id("regLastName"));
		return element;
	}
	
//	Returns the text input box for the username field
	public static WebElement userName(WebDriver driver) {
		element = driver.findElement(By.id("regUserName"));
		return element;
	}
	
//	Returns the text input box for the email field	
	public static WebElement email(WebDriver driver) {
		element = driver.findElement(By.id("regEmail"));
		return element;
	}
	
//	Returns the text input box for the password field
	public static WebElement password(WebDriver driver) {
		element = driver.findElement(By.id("regPass"));
		return element;
	}
	
//	Returns the Register button
	public static WebElement regButton(WebDriver driver) {
		element = driver.findElement(By.className("btn-success"));
		return element;
	}
	
// Returns the success div element
	public static WebElement successMessage(WebDriver driver) {
		element = driver.findElement(By.className("alert-success"));
		return element;
	}
				</pre>
				<p></p>
				<p>You may have noticed that we didn't use an id as the selector for the register button or success div. We used className instead. The
				reason for this is that I know that the Register button will be the only element on the page that has the class name
				"btn-success" so I can use it to locate the Register button. Using classes to identify objects on a page can be tricky
				though. Unlike id's, classes can be assigned to multiple objects on the page. Unless the goal is to select multiple
				objects of the same class, it is best to make sure the element you want to select is the only element on the page that
				contains that class. Another option would be to simply user another selector such as xpath or css.</p>
				<h3>Writing the test cases</h3>
				<p>So we've defined our page objects and now it's time to actually get down to business and write some test cases. Today,
				we are just going to write a simple test case that verifies we are on the right page, enters a value in to each field
				and then clicks the Register button. So how do we go about writing our registration tests?</p>
				<p>First we need to create a new class. As a sidenote I usually keep my page object and test case class files in separate
				directories. It helps keep things tidy. Since we are doing a lot more than just identifying and returning objects in our
				test cases, we will need to import a few more libraries as well as our page object class. This is what we are importing:
				</p>
				<pre class="prettyprint">
import static org.junit.Assert.*;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import ioFramework.pages.RegisterPage;
				</pre>
				<p></p>
				<p>There's a lot going on here. No need to worry, it will all start to make sense as we go through the process of setting
				up our tests, running them and then tearing them down. The next step is to create our class that will hold all of our
				test cases and also create a private method to set our driver variable to null. It should look like this:</p>
				<pre class="prettyprint">
public class Reg_Tests {
	private static WebDriver driver = null;
				</pre>
				<p></p>
				<p>Easy enough so far. The next step is where we start to see a lot of our import statements start to make sense.
				We can make use of the jUnit BeforeClass, AfterClass and Test classes to tell Selenium what to do before running the tests,
				what tests to run and what to do after we have run those tests.</p> 
				<p>The easiest place to begin is with the BeforeClass.
				What the BeforeClass does is runs a set of instructions prior to running any of the actual test cases. This allows us
				to set up the environment in which we want to test. Things like the test url, type of browser and timeouts are typically
				placed here. For this test, our BeforeClass would look something like:</p>
				<pre class="prettyprint">
@BeforeClass
public static void setUp() throws Exception {
	driver = new FirefoxDriver();
	driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
	driver.get("http://www.breakpointdev.com/io/login/index.php");
	}
				</pre>
				<p></p>
            <p>What's going on here? Notice the annotation @BeforeClass. This is what tells Selenium to take these actions first. Next
            we create the setUp method and assign it a driver for the browser we want to use. In this case we are using FireFox, so we are
            using FirefoxDriver() and assigning it to the variable driver. Next, we assign a ten second timeout to our tests. In the
            event we get stuck, we want to be able to exit our test and report an error. Finally we tell the browser where to go by
            assigning it a url to retrieve. Now that are browser is set and ready to run some tests, let's move on.</p>
            <p>I typically create my AfterClass tearDown method immediately after my BeforeClass, so that's where we will start now. The AfterClass
            is nearly identical to BeforeClass with the exception that it tells Selenium what to do after it has run all our tests. Generally,
            all this requires is a simple call to quit the browser we are running. The full tearDown method would look like:</p>
            <pre class="prettyprint">
@AfterClass
public static void tearDown() throws Exception {
	driver.quit();
	}
            </pre>
            <p></p>
            <p>We have defined our browser and told it where to go and we have also told Selenium to close that browser window when we
            are through running our tests in this class. Whew. We are finally on to writing our test cases. Before we write our test
            cases we should define what steps we need to take in each of our test cases. In this case, we are only registering a new user
            so our steps are rather simple:</p>
            <ol>
            	<li>Verify we are on the right page</li>
            	<li>Enter a first name</li>
            	<li>Enter a last name</li>
            	<li>Enter a user name</li>
            	<li>Enter an email address</li>
            	<li>Enter a password</li>
            	<li>Click on the Register button</li>
            	<li>Verify we get a success message</li>
            </ol>
            <p></p>
            <p>Let's get started with the first item on our list, verifying we are on the right page. Since we are testing the Registration
            portion of our site, it would be safe to assume that if our form heading were present we would be in the right spot. So let's
            take a look at how we would verify that the heading is actually on the page we are looking at. I always create this check as
            it's own test case. If this case fails then we need to investigate why we are not on the right page. The actual code would 
            look like:</p>
            <pre class="prettyprint">
@Test
public void regTitle() {
	String title = RegisterPage.regFormTitle(driver).getText();
	assertEquals(title, "Register");
	}
            </pre>
            <p></p>
            <p>We have finally created our very first test case! We could run this test case if we wanted to and we would (hopefully)
            get the green light that our single test has passed. This doesn't do much to help us verify that the registration page is
            actually working, so we will need to write a few more tests.</p>
            <p>The next five steps of our registration test all require us to input text in to a text field. We can use click and sendKeys to tell
            Selenium to click in a text field and input any characters we choose. This is what it would look like for the first name
            field:</p>
            <pre class="prettyprint">
@Test
public void registerUser() {
	RegisterPage.firstName(driver).click();
	RegisterPage.firstName(driver).sendKeys("user");
            </pre>
            <p></p>
            <p>In this bit of code we simply tell Selenium to grab the firstName page object from our RegisterPage class and click on it.
            Then we tell Selenium to put the value user in the text box. We would repeat the click/sendKeys pattern for each of the
            remaining text fields in our form. The final step before verification would be to click on the Register button and submit 
            our form. So far, this is what our Reg_Tests class should look like:</p>
            <pre class="pre-scrollable prettyprint">
import static org.junit.Assert.*;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import ioFramework.pages.RegisterPage;

public class Reg_Tests {
	private static WebDriver driver = null;
	
//	Initiates Firefox browser and navigates to the registration page
	@BeforeClass
	public static void setUp() throws Exception {
		driver = new FirefoxDriver();
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
		driver.get("http://www.breakpointdev.com/io/login/index.php");
	}
	
//	Shuts down the active browser window
	@AfterClass
	public static void tearDown() throws Exception {
		driver.quit();
	}
	
	//	Verifies we are on the right page
	@Test
	public void regTitle() {
		String title = RegisterPage.regFormTitle(driver).getText();
		assertEquals(title, "Register");
	}
	
	@Test
	public void registerUser() {
		RegisterPage.firstName(driver).click();
		RegisterPage.firstName(driver).sendKeys("user");
		
		RegisterPage.lastName(driver).click();
		RegisterPage.lastName(driver).sendKeys("one");
		
		RegisterPage.userName(driver).click();
		RegisterPage.userName(driver).sendKeys("uniqueUser");
		
		RegisterPage.email(driver).click();
		RegisterPage.email(driver).sendKeys("auto@test.com");
		
		RegisterPage.password(driver).click();
		RegisterPage.password(driver).sendKeys("password");
		
		RegisterPage.regButton(driver).click();
            </pre>
            <p></p>
            <h3>Verifying we get the expected result</h3>
            <p>You may have noticed in our first test case I skipped over the assertEquals line of the test. Well now I'm going to explain
            what that line of code does. assertEquals does what it sounds like it would do, it takes two objects and compares them to see
            if they are equal. In the first case we made sure the text of our heading object matched the string "Register". The final 
            verification step of our test case will do something very similar.</p>
            <p>We know that when the user successfully registers we are supposed to see a green banner with some text in it. Our
            verification step is going to make sure that the green banner is displayed on screen and that the success message
            matches what we expect it to be. We already defined the div that contains the success message in our RegisterPage class
            so all we have to do is get the text from that div and compare it to what we think it should be. This is how the code
            would look:</p>
            <pre class="prettyprint">
String success = RegisterPage.successMessage(driver).getText();
	assertEquals(success, "Registration successful. Please log in.");
            </pre>
            <p></p>
            <p>And that's it. The full test case is below:</p>
            <pre class="pre-scrollable prettyprint">
import static org.junit.Assert.*;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import ioFramework.pages.RegisterPage;

public class Reg_Tests {
	private static WebDriver driver = null;
	
//	Initiates Firefox browser and navigates to the registration page
	@BeforeClass
	public static void setUp() throws Exception {
		driver = new FirefoxDriver();
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
		driver.get("http://www.breakpointdev.com/io/login/index.php");
	}
	
//	Shuts down the active browser window
	@AfterClass
	public static void tearDown() throws Exception {
		driver.quit();
	}
	
	//	Verifies we are on the right page
	@Test
	public void regTitle() {
		String title = RegisterPage.regFormTitle(driver).getText();
		assertEquals(title, "Register");
	}
	
	@Test
	public void registerUser() {
		RegisterPage.firstName(driver).click();
		RegisterPage.firstName(driver).sendKeys("user");
		
		RegisterPage.lastName(driver).click();
		RegisterPage.lastName(driver).sendKeys("one");
		
		RegisterPage.userName(driver).click();
		RegisterPage.userName(driver).sendKeys("uniqueUser");
		
		RegisterPage.email(driver).click();
		RegisterPage.email(driver).sendKeys("auto@test.com");
		
		RegisterPage.password(driver).click();
		RegisterPage.password(driver).sendKeys("password");
		
		RegisterPage.regButton(driver).click();
		
		String success = RegisterPage.successMessage(driver).getText();
		assertEquals(success, "Registration successful. Please log in.");
	}
}
            </pre>
            <p></p>
            <p>When we run these tests, we should get the green light. As an example of what test results look like,
             I ran the tests from Eclipse and got the following results:
            </p>
            <figure style="padding-bottom:15px;">
            	<a href="tutimg/results.png" target="_blank"><img src="tutimg/results.png" 
            	style="height:250px; width:600px;" class="tutimg"></a>
            	<figcaption>fig.3 The results panel from Eclipse</figcaption>
            	</figure>
            	<p></p>
            	<p>We have several pieces of information here. Most important we have a green bar which means all
            	of our tests passed. From the user's perspective everything is working like it should be. Additionally
            	we can see that all together the test took 20 seconds to run with our actual test cases making
            	up just under 2.5 of those seconds. We can assume the bulk of our time was spent in the setUp and
            	tearDown operations.</p>
            	<p>There it is. Our registration test case. In the real world this would be the tip of the iceberg
            	when it came to testing this piece of functionality. We would also want to include tests to verify
            	our form validation and error handling.</p> 
            	<p>One of the reasons I like building my test suites in this
            	way is that it allows your tests to be modular. In other words we can contruct various tests simply
            	by using objects we've already defined on each page. This allows for more complex test scenarios to
            	be run, such as end to end or to simulate various paths the user could take through the system. It
            	also breaks each test down in to small pieces which helps in identifying not only where a problem
            	may be, but how widespread it is as well. Overall it's a great model and one that I use frequently.</p>
            </article>
            
          </div><!-- /.blog-post -->
          <div class="blog-post">
            <h2 class="blog-post-title">RESTful API Testing</h2>
            <p class="blog-post-meta">Authored by: Brian Richardson</p>

            <article>
            	<p>When we usually think of Selenium we typically don't include API testing in the mix. Rightfully so, this
            	post isn't about how to use Selenium proper to test API's but it does fall under the category of web testing. 
            	The use of APIs in development has increased dramatically over the past ten years and has become something 
            	every tester should at least have a basic understanding of how to test. There are a lot of really great 
            	tools out there that handle API testing, but they can be "expensive" in the eyes of those that control the 
            	budget for a project. What this post does is demonstrate a way to test an API using Java that gets the job
            	done and also integrates with an existing automation framework; like Selenium.</p>
            	<p>In this example, I am testing a public API that can be found 
            	<a href="http://api.openweathermap.org/data/2.5/weather?q=Austin">here</a>. In order to get our code to work
            	we will need to import some libraries to our project. We will need the Apache HttpComponents library and the
            	JUnit 4 library. Once we have those libraries imported we can begin constructing our test case. The first
            	thing we want to do is verify that we are actually getting a response from the server. We can do this by
            	verifying the HTTP status code in the response.</p>
            	<pre class="prettyprint">
public static void testStatus(String testURL) throws ClientProtocolException, IOException {
    HttpUriRequest request = new HttpGet(testURL);
    HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);
       
    Assert.assertEquals(httpResponse.getStatusLine().getStatusCode(),HttpStatus.SC_OK);
}
            	</pre>
            	<p></p>
            	<p>What we have done is send a GET request to a specific URL and verified that the response we got included
            	a status code of OK, which is typically a 200. Responses generally come in two types - XML or JSON. The next
            	step in our test is to verify that we are getting the expected response type from the server. We do this by
            	checking the MIME type and making sure we are getting 'application/json' and the type.</p>
            	<pre class="prettyprint">
public static void testMime(String testURL, String expectedType) throws ClientProtocolException, IOException {
		
	HttpUriRequest request = new HttpGet(testURL);
	HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);
		
	Assert.assertEquals(expectedType,ContentType.getOrDefault(httpResponse.getEntity()).getMimeType());
	}
            	</pre>
            	<p></p>
            	<p>Just like before we make a GET request and verify our MIME type matches what we would expect it to be.
            	Now that we know the server is responding and responding with the correct type it's time to take a look at
            	the actual response content. Up until now, the difference between the response types didn't matter. Since
            	we have to parse the response, this is where testing JSON and XML responses differ. For this example, I am
            	testing a JSON response, but it is important to note that difference.</p>
            	<pre class="prettyprint pre-scrollable">
public static void testContentJSON(String testURL, String element, String expectedValue) throws ClientProtocolException, IOException, SAXException, ParserConfigurationException, JSONException {

	HttpUriRequest request = new HttpGet(testURL);
	HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);

	// Convert the response to a String format
	String result = EntityUtils.toString(httpResponse.getEntity());

	// Convert the result as a String to a JSON object
	JSONObject jobj = new JSONObject(result);

	Assert.assertEquals(expectedValue, jobj.getString(element));
}
            	</pre>
            	<p></p>
            	<p>There is a little more to this than before, but not much. We have to take the extra steps to convert the
            	string response to a JSON object then verify our expected result against the response. This is a good starting
            	point for anyone needing to test an API. It can easily be added to and expanded to create a more complete
            	API test suite.</p>
            	<p>The entire test class can be found below:</p>
            	<pre class="prettyprint pre-scrollable">
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;

import org.apache.http.HttpResponse;
import org.apache.http.HttpStatus;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpUriRequest;
import org.apache.http.entity.ContentType;
import org.apache.http.impl.client.HttpClientBuilder;
import org.apache.http.util.EntityUtils;
import org.json.JSONException;
import org.json.JSONObject;
import org.junit.Assert;
import org.w3c.dom.Document;
import org.w3c.dom.NodeList;
import org.xml.sax.SAXException;

public class APITest {

	public static void main (String args[]) {
		
		String testURL = "http://api.openweathermap.org/data/2.5/weather?q=Austin";

		try {
			testStatus(testURL);
			testType(testURL,"application/json");
			testJSON(testURL,"name","Austin");
			
		} catch (ClientProtocolException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		} catch (SAXException e) {
			e.printStackTrace();
		} catch (ParserConfigurationException e) {
			e.printStackTrace();
		} catch (JSONException e) {
			e.printStackTrace();
		}
	}
	
	public static void testStatus(String testURL) throws ClientProtocolException, IOException {

		HttpUriRequest request = new HttpGet(testURL);
		HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);
		
		Assert.assertEquals(httpResponse.getStatusLine().getStatusCode(),HttpStatus.SC_OK);
	}
	
	public static void testType(String testURL, String expectedMimeType) throws ClientProtocolException, IOException {
		
		HttpUriRequest request = new HttpGet(testURL);
		HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);
		
		Assert.assertEquals(expectedMimeType,ContentType.getOrDefault(httpResponse.getEntity()).getMimeType());
	}
	
	public static void testJSON(String testURL, String element, String expectedValue) throws ClientProtocolException, IOException, SAXException, ParserConfigurationException, JSONException {

		HttpUriRequest request = new HttpGet(testURL);
		HttpResponse httpResponse = HttpClientBuilder.create().build().execute(request);

		// Convert the response to a String format
		String result = EntityUtils.toString(httpResponse.getEntity());

		// Convert the result as a String to a JSON object
		JSONObject jobj = new JSONObject(result);

		Assert.assertEquals(expectedValue, jobj.getString(element));

	}
}
            	</pre>
            </article>
            
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <img src="big-logo.png">
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About Selenium</h4>
            <p>Selenium is and has been the de facto web testing tool used by test engineers. It is extremely powerful, incredibly
            versatile and amazingly easy to pick up and start using. On top of all those things it is also open-source and free to
            use, and who doesn't like a free tool that also works really well?</p>
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
