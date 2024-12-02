# DBMS POC Stage

## Components
- Airtable setup
  - Simple base with a single table with essential fields and sample data (based off Stock - Aspheric Lenses)
  - [Link to base](https://airtable.com/appmXtJKw9kGWHR0J/tblru3M6pYGiwqFeI/viw26Xkkake7tnCXQ?blocks=hide)
  - Personal access token ("Nov-POC"): patD3Y6XZgfqKZPDZ.7f2a16a4214afc2736d819736b5d3375ef7275fa09a42ae66a8297b187480ec1
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
- A) Establish Airtable connection and data retrieval (test the API call with cURL)
- B) Format data for HTML output (suitable for display on Wordpress page)
- C) Create a Wordpress shortcode to easily embed the dynamic table on any page
- D) Dynamic updates - ensure the displayed table updates automaically when Airtable data changes

## Streamlining (PAC)
- We'll need to figure out how to simplify the process of actually creating the shortcode (so we don't need to make a new function for every new stock product table) -> maybe generate the shortcode would take into account the name of the page and use that to pull the correct data from Airtable?
