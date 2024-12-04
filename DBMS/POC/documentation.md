# Documentation


### 12/3/24
- TDD-A (establish Airtable connection and data retrieval using cURL to test the API call) => Used ReqBin (online API testing tool) => Used the URL API endpoint "https://api.airtable.com/v0/appmXtJKw9kGWHR0J/Aspheric" with the headers "Authorization: Bearer patEV5dMy4CeyAbtR.7c11019e0a0eba7041bbc49ad0fd873b20015f8a9f0bc584344d3dac09a75b4f" and "Content-Type: application/json" and got a good 200 response!
- TDD-B+C (test the API call from within Wordpress - AVT experimental branch) => "airtable-functions.php" -> include in "functions.php" and register the shortcode => I tested to see if the shortcode in Wordpress would generate a table that reflects Airtable, and it works, and it even updates when I update Airtable! => Page draft called "Airtable API test"

### 11/20/24
- I can access the data from the Airtable API through cURL in bash, but in Wordpress I’m getting the 401 error (“Unauthorized”) for some reason
  - ```curl "https://api.airtable.com/v0/appmXtJKw9kGWHR0J/Aspheric" -H "Authorization: Bearer patD3Y6XZgfqKZPDZ.7f2a16a4214afc2736d819736b5d3375ef7275fa09a42ae66a8297b187480ec1"```
