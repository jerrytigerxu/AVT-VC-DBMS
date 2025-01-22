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
- Log in to the company Airtable account: (placeholder: link to your company Airtable account or instructions for accessing it)
Navigating the Airtable interface:
 - Bases: You'll find all relevant product information in separate bases within this account.
 - Tables and Views: Each base contains tables, and you can use different views to organize the data.
 - Records and Fields: Each row in a table is a record (representing a product), and the columns are fields (containing product attributes).
 - Filtering and Sorting Data: Learn how to find the specific products you need by filtering and sorting data.
Relevant Airtable Bases: (placeholder: list of relevant bases, e.g., "asphericLenses", "opticalFlats")
 - IMPORTANT: Airtable table names MUST not contain spaces (e.g., use "asphericLenses" not "Aspheric Lenses").

### III. New Workflow Step-by-Step

Step 1: Product Updates (Production Team)
 - Accessing the correct Airtable base
 - Editing product information:
  - (placeholder: list of key fields/attributes to update, e.g., product name, description, specifications)
 - Updating pricing information:
  - (placeholder: instructions for updating prices)
 - IMPORTANT: Emphasize "no commas" rule for attributes in shortcode

Step 2: Website Updates (Anyone)
 - Once you are ready to update the website with the changes made in Airtable, proceed to the next step.
 - No separate approval process is required.

Step 3: Adding the Shortcode (Anyone)
 - Go to the WordPress page for the product you want to update.
 - Add the avt_product_table shortcode to the page content.
  - (placeholder: provide detailed instructions on how to add the shortcode in WordPress)
 - Make sure to use the correct base and view attributes in the shortcode to pull the right data from Airtable.

Step 4: Website Verification
 - Check the updated product page on the AVT website.
 - Ensure the accuracy of the information and formatting.

### IV. PHP Shortcode

- Purpose of the shortcode: To dynamically display product information from Airtable on the website.
- Structure of the shortcode:
  - [avt_product_table base="baseName" view="viewName"]
  - Explanation of base and view attributes
  - (placeholder: any other relevant attributes for the shortcode)
- Example usage:
  - Show a code example with the shortcode embedded in a WordPress page

### V. Troubleshooting and Support

- Common issues and solutions: (placeholder: list common problems and their fixes)
- Where to get help: (placeholder: contact information or support resources)
- Revision history: (placeholder: how to revert changes within the 2-week timeframe)

### VI. Video Tutorial Overview
 - Briefly describe the video tutorial and its contents.
 - Provide a link to access the video.
