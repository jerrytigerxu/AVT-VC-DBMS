## Rough outline of DBMS workflow/procedure training document

### I. Introduction

- Purpose of this training: To introduce the new workflow for updating product and pricing information on the AVT website.
- Benefits of the new workflow:
  - Increased efficiency (making the CRUD processes 2-3x more efficient!)
  - Reduced errors (cutting down errors by over 80%!)
  - Improved collaboration between production and marketing teams
- Overview of the new system:
  - Airtable as the central data source
  - Automated website updates via API
  - Simplified content management

### II. Airtable Basics

Accessing Airtable:
- Log in to the company Airtable account: (Chloe Arai's account (ma@shanghai-optics.com))
  - There should be three bases ("AVT DBMS", "AVT Microscope Objectives", and "AVT YX Microscope Objectives")


Navigating the Airtable interface:
 - Bases: You'll find all relevant product information in separate bases within this account.
 - Tables and Views: Each base contains tables, and you can use different views to organize the data.
 - Records and Fields: Each row in a table is a record (representing a product), and the columns are fields (containing product attributes).
 - Filtering and Sorting Data: Learn how to find the specific products you need by filtering and sorting data.
 - **IMPORTANT: Airtable table names MUST not contain spaces (e.g., use "asphericLenses" not "Aspheric Lenses").**

### III. New Workflow Step-by-Step

Step 1: Product Updates (Production Team)
 - Accessing the correct Airtable base (everything not related to microscope objectives is in the "AVT DBMS" base)
 - Editing product/price information:
  - Simply edit the table data just like you would edit spreadsheet (Excel or Google Sheets) data
 

Step 2: Website Updates (Anyone)
 - Once you are ready to update the website with the changes made in Airtable, ask for another team member to double-check the changes before proceeding to the next step.
 - (optional) Create a snapshot of the updated base

Step 3: Adding the Shortcode (Anyone)
 - Go to the WordPress page for the product you want to update. (Example - "Stock - Aspheric Lenses")
 - In Elementor, add the shortcode to the page content (refer to section IV - PHP Shortcode)
 - Make sure to use the correct base and view attributes in the shortcode to pull the right data from Airtable.

Step 4: Website Verification
 - Check the updated product page on the AVT website.
 - Ensure the accuracy of the information and formatting.

### IV. PHP Shortcode

- Purpose of the shortcode: To dynamically display product information from Airtable on the website.
- Structure of the shortcode:
  - "base_id" -> there is a default ID that you won't need to worry about (unless another base is created) -> no need to directly add this
  - "table_name" -> the name must match the Airtable table (tab) name exactly
  - "api_key" -> there is a default API key that doesn't need to directly added
  - "column_names" -> specify the order of the columns to be be displayed for the table
- **IMPORTANT: DO NOT have commas separate the attributes in the shortcode**
- Example usage:
  - [airtable table_name="beamExpanders" column_names="Part Number, Design Wavelength, Magnification, Interface, Price (USD)..."]

### V. Troubleshooting and Support (need to fill)

- Common issues and solutions: Need to Fill
- Where to get help: Need to Fill
- Revision history: click the "history" icon to access base history (snapshots) | you can access the revision history of each record by expanding them

### VI. Video Tutorial Overview (need to fill)
 - Briefly describe the video tutorial and its contents.
 - Provide a link to access the video.
