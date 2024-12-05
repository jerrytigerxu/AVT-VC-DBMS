# DBMS POC Stage (12/2-10)

## Components
- Airtable setup
  - Simple base with a single table with essential fields and sample data (based off Stock - Aspheric Lenses)
  - [Link to base](https://airtable.com/appmXtJKw9kGWHR0J/tblru3M6pYGiwqFeI/viw26Xkkake7tnCXQ?blocks=hide)
  - Table name: "Aspheric" | Base name: "AVT DBMS Test"
  - Personal access token ("Dec-POC"): patEV5dMy4CeyAbtR.7c11019e0a0eba7041bbc49ad0fd873b20015f8a9f0bc584344d3dac09a75b4f
  - Base ID: appmXtJKw9kGWHR0J
- Shortcode implementation
  - Add PHP code in 'functions.php' + utilize shortcode to embed code into Wordpress pages (experimental branch - use Chloe's SO email)
- Demonstrate to the marketing and production teams what Airtable x APIs can do

---

## ReD
- Functional requirements:
  - I want to have a working POC test on a page in the AVT experimental branch such that a dynamic "copy" of an Airtable table is displayed on Wordpress
  - This "copy" should be updated dynamically whenever the data on Airtable is updated/changed

## TDD
- ~~A) Establish Airtable connection and data retrieval (test the API call with cURL)~~
- ~~B) Test the API call through Wordpress (create a new PHP file and include it in functions.php)~~
- ~~C) Create a Wordpress shortcode (with PHP) to easily embed the dynamic table on any page~~
- ~~D) Dynamic updates - ensure the displayed table updates automaically when Airtable data changes + format the data for suitable display on Wordpress page => simply re-running the shortcode updates the table~~

## Streamlining (PAC)
- Actually present the POC to the marketing team
- Adjust the code so that with shortcode we can specify the specific table in the base to pull from Airtable
- Adjust the code to manually set the actual column names for each table when setting the shortcode
